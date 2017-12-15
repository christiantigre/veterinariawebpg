<?php

namespace App\Http\Controllers;

use App\Albun;
use App\Card;
use App\Category;
use App\ClasificationCourse;
use App\Course;
use App\CoursesFiles;
use App\Gallery;
use App\Image;
use App\Mail\SendMail;
use App\Mail\SendSolicita;
use App\Note;
use App\Notice;
use App\Product;
use App\SectionTitle;
use App\Service;
use App\Slider;
use App\Socio;
use App\Suscribir;
use App\TypeCourse;
use App\Typeproduct;
use App\Veterinary;
use App\visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
    $this->middleware('auth');
}*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function notFound(){
        return view('errors.500');
    }
    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider       = Slider::orderBy('id', 'desc')->get();
        $cards        = Card::orderBy('id', 'desc')->where('visible', 1)->get();
        $socios       = Socio::orderBy('id', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries    = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories   = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $albuns       = Albun::orderBy('id', 'desc')->where('active', 1)->get();
        $images       = Image::orderBy('id', 'DESC')->get();
        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->where('visibleslider', 1)->get();
        $secciones    = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'inicio';

        if ($clientIP = \Request::ip()) {
            $visita = visit::where('ip', $clientIP)->get();
            if (count($visita) == '0') {
                visit::Create(['ip' => $clientIP]);
                /*\DB::table('visits')->insert(
            ['ip' => $clientIP]
        );*/

    }
}

return view('web.template.index', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'typeproducts', 'services', 'cursos', 'secciones', 'user', 'albuns', 'images'));
/*return view('home');*/
        //return view('web.index');
}

public function busqueda(Request $request)
{
        /*$keyword = Input::get('campobuscar');
        return $keyword;*/

        $course = Course::where('content', 'LIKE', '%' . $request->message . '%')
        ->orwhere('title', 'LIKE', '%' . $request->message . '%')->get();

        $service = Service::where('service', 'LIKE', '%' . $request->message . '%')
        ->orWhere('description', 'LIKE', '%' . $request->message . '%')->get();

        $product = Product::where('name', 'LIKE', '%' . $request->message . '%')
        ->orWhere('slug', 'LIKE', '%' . $request->message . '%')
        ->orWhere('cod', 'LIKE', '%' . $request->message . '%')
        ->orWhere('description', 'LIKE', '%' . $request->message . '%')
        ->orWhere('precio_compra', 'LIKE', '%' . $request->message . '%')
        ->orWhere('precio_venta', 'LIKE', '%' . $request->message . '%')
        ->orWhere('porcent_descuento', 'LIKE', '%' . $request->message . '%')
        ->orWhere('stock', 'LIKE', '%' . $request->message . '%')
        ->get();

        $coincidencias = array(
            'cursos'   => $course,
            'services' => $service,
            'product'  => $product,
        );

        $response = array(
            'estado'      => 'success',
            'campobuscar' => $request->message,
        );

        return response()->json($coincidencias);

    }

    public function resultsearch($data)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $pag        = '';
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        return view('web.partials.pagina.resulbusqueda', compact('data', 'veterinary', 'user', 'pag'));
    }

    public function contact()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag        = 'contacto';
        return view('web.partials.pagina.contact', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'user', 'secciones'));
    }

    public function postContact(Request $request)
    {

        $this->validate(request(), [
            'name'    => 'required',
            'mail'    => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
        ]);
        $data = array(
            'name'    => $request->name,
            'phone'   => $request->phone,
            'mail'    => $request->mail,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->first();
        $to         = $veterinary['mail'];
        Mail::to($to)->send(new SendMail($data));
        Session::flash('flash_message', 'Su mensaje se ha enviado correctamente');
        return redirect('/contact');
    }

    public function us()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::where('is_active', 1)->orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag        = 'nosotros';
        //return view('web.partials.pagina.us',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
        return view('web.partials.pagina.equipo', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'user', 'secciones'));
    }

    public function mision()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();

        $notes         = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices       = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
        $pag           = 'empresa';
        return view('web.partials.pagina.empresamision', compact('veterinary', 'temasgalerias', 'notes', 'notices', 'pag', 'user'));
    }

    public function vision()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
        $notes         = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices       = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag           = 'empresa';
        return view('web.partials.pagina.empresavision', compact('veterinary', 'temasgalerias', 'notes', 'notices', 'pag', 'user'));
    }

    public function courses()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $cards       = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $date        = Carbon::now();
        $veterinary  = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes       = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices     = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases      = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos      = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $secciones   = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag         = 'courses';
        return view('web.partials.pagina.cursos', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'cards', 'user', 'secciones'));
    }

    public function product()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage      = 25;
        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $cards        = Product::paginate($perPage);
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'product';
        $active       = 'active';
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));
    }

    public function services()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage      = 25;
        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $cards        = Service::paginate($perPage);
        $pag          = 'services';
        $active       = 'active';
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));
    }
    public function service_search(Request $request)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cards = Service::where('service', 'LIKE', "%$keyword%")
            ->orWhere('slug', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('precio_venta', 'LIKE', "%$keyword%")
            ->orWhere('porcent_descuento', 'LIKE', "%$keyword%")
            ->orWhere('img', 'LIKE', "%$keyword%")
            ->orWhere('is_active', 'LIKE', "%$keyword%")
            ->orWhere('visible_slider', 'LIKE', "%$keyword%")
            ->orWhere('promocion', 'LIKE', "%$keyword%")
            ->orWhere('nuevo', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $cards = Service::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'product';
        $active       = 'active';
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));

    }

    public function producto_search(Request $request)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cards = Product::where('name', 'LIKE', "%$keyword%")
            ->orWhere('slug', 'LIKE', "%$keyword%")
            ->orWhere('cod', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('precio_compra', 'LIKE', "%$keyword%")
            ->orWhere('precio_venta', 'LIKE', "%$keyword%")
            ->orWhere('porcent_descuento', 'LIKE', "%$keyword%")
            ->orWhere('stock', 'LIKE', "%$keyword%")
            ->orWhere('img', 'LIKE', "%$keyword%")
            ->orWhere('visible', 'LIKE', "%$keyword%")
            ->orWhere('visible_slider', 'LIKE', "%$keyword%")
            ->orWhere('promocion', 'LIKE', "%$keyword%")
            ->orWhere('nuevo', 'LIKE', "%$keyword%")
            ->orWhere('tipeproduct_id', 'LIKE', "%$keyword%")
            ->paginate($perPage);
        } else {
            $cards = Product::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'product';
        $active       = 'active';
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));

    }

    public function producto_search_id(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage = 25;

        if (!empty($id)) {
            $cards = Product::where('tipeproduct_id', $id)
            ->paginate($perPage);
        } else {
            $cards = Product::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'product';
        $active       = 'active';
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));

    }

    public function service_search_id(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage = 25;

        if (!empty($id)) {
            $cards = Service::where('id', $id)
            ->paginate($perPage);
        } else {
            $cards = Product::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $pag          = '';
        $active       = 'active';
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'tipos', 'active', 'services', 'cards', 'user'));

    }

    public function socio_search_id($id)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage = 25;

        if (!empty($id)) {
            $cards = Socio::where('id', $id)
            ->paginate($perPage);
        } else {
            $cards = Socio::paginate($perPage);
        }

        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();

        $pag = 'nosotros';
        return view('web.partials.pagina.detallSocio', compact('veterinary', 'pag', 'cards', 'user'));

    }

    public function producto_detall(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage = 25;

        if (!empty($id)) {
            $cards = Product::where('id', $id)->get();
        } else {
            $cards = Product::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'product';
        $active       = 'active';
        return view('web.partials.pagina.detallProduct', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));
    }

    public function service_detall(Request $request, $id)
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $perPage = 25;

        if (!empty($id)) {
            $cards = Service::where('id', $id)->get();
        } else {
            $cards = Service::paginate($perPage);
        }

        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources  = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos        = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $tipos        = Typeproduct::orderBy('id', 'asc')->where('is_active', 1)->get();
        $productos    = Product::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = '';
        $active       = 'active';
        return view('web.partials.pagina.detallService', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards', 'user'));
    }

    public function _howtoget_()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag        = 'comollegar';
        $config     = array();
        //$config['center'] = 'auto';
        /*$config['onboundschanged'] = 'if (!centreGot) {
        var mapCentre = map.getCenter();
        marker_0.setOptions({
        position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
        });
        }
        centreGot = true;';*/

        foreach ($veterinary as $dato) {
            $latitud  = $dato->latitud;
            $longitud = $dato->longitud;
        }
        $coondenadas = $latitud . ',' . $longitud;
        //dd($coondenadas);
        $config['center'] = $coondenadas;
        $config['zoom']   = '14';

        \Gmaps::initialize($config);

        // set up the marker ready for positioning
        // once we know the users location
        $marker             = array();
        $marker['position'] = $coondenadas;
        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();
        //$data = "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
        return view('web.partials.pagina.howtoget', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'map'));
        //mapa estatico 2 puntosreturn view('web.partials.pagina.mapas.mapa');
        // mapa estatico return view('web.partials.pagina.mapa');
        // mapa dinamico return view('web.partials.pagina.mapas.mapas2');
        //mapa con dos posiciones animadas return view('web.partials.pagina.mapas.mapas3');
        //traza ruta desde punto A a B return view('web.partials.pagina.mapas.mapas4');
    }

    public function notices()
    {
        if (Auth::user()) {
            $user = Auth::user();
        } else {
            $user = '';
        }
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag        = 'noticias';
        return view('web.partials.pagina.notices', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones', 'user'));
        return view('web.partials.pagina.mapa');
    }

    public function pet()
    {

    }

    public function gallery()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();

        $categoriesaux = Category::where('visible', 1)->first();
        $catactive  = $categoriesaux->id;

        $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();

        //$albuns       = Albun::orderBy('id', 'desc')->where('active', 1)->get();
        $albuns    = Albun::orderBy('id', 'desc')->where('active', 1)->where('category_id',$categoriesaux)->get();
        $images       = Image::orderBy('id', 'DESC')->where('category_id',$catactive)->get();
        $pag        = 'galeria';
        return view('web.partials.pagina.viewgallery', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones', 'user','albuns','images','catactive'));
    }

    public function galleryalbun($albunvar){
        try {            
            
            $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
            $slider     = Slider::orderBy('id', 'desc')->get();
            $cards      = Card::orderBy('id', 'desc')->get();
            $socios     = Socio::orderBy('id', 'desc')->get();
            $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
            $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
            $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
            $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();

            $albunsaux    = Albun::orderBy('id', 'desc')->where('active', 1)->where('id',$albunvar)->first();
            $albunId = $albunsaux->category_id;
            $detall = $albunsaux->description;

            $categoriesaux = Category::where('id',$albunId)->where('visible', 1)->first();
            $catactive  = $categoriesaux->id;

            $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();

        //$albuns       = Albun::orderBy('id', 'desc')->where('active', 1)->get();
            $albuns    = Albun::orderBy('id', 'desc')->where('active', 1)->where('category_id',$catactive)->get();
            $images       = Image::orderBy('id', 'DESC')->where('albun_id',$albunvar)->get();
            
            $pag        = 'galeria';
        } catch (\Exception $e) {
           return view('errors.404');   
       }
       return view('web.partials.pagina.viewgallery', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones', 'user','albuns','images','catactive','albunvar','detall'));
   }
   public function gallerycategory($category){
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $slider     = Slider::orderBy('id', 'desc')->get();
    $cards      = Card::orderBy('id', 'desc')->get();
    $socios     = Socio::orderBy('id', 'desc')->get();
    $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
    $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
    $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
    $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();

    $categoriesaux = Category::where('id',$category)->where('visible', 1)->first();
    $catactive  = $categoriesaux->id;

    $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();

        //$albuns       = Albun::orderBy('id', 'desc')->where('active', 1)->get();
    $albuns    = Albun::orderBy('id', 'desc')->where('active', 1)->where('category_id',$category)->get();
    $images       = Image::orderBy('id', 'DESC')->where('category_id',$catactive)->get();
    $pag        = 'galeria';
    $albunvar    = '';
    return view('web.partials.pagina.viewgallery', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones', 'user','albuns','images','catactive','albunvar'));
}

public function howtoget()
{
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $slider     = Slider::orderBy('id', 'desc')->get();
    $cards      = Card::orderBy('id', 'desc')->get();
    $socios     = Socio::orderBy('id', 'desc')->get();
    $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
    $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
    $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
    $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
    $pag        = 'comollegar';
    $config     = array();

    foreach ($veterinary as $dato) {
        $latitud  = $dato->latitud;
        $longitud = $dato->longitud;
    }
    return view('web.partials.pagina.howtoget', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'latitud', 'longitud'));
}

public function DetallSlider($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $slider     = Slider::findOrFail($id);
    $pag        = 'noticias';
    return view('web.partials.pagina.detallslider', compact('veterinary', 'slider', 'pag', 'user'));
    dd($slider);
}

public function DetallCards($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $notes      = Card::findOrFail($id);
    $pag        = 'noticias';
    return view('web.partials.pagina.detallCards', compact('veterinary', 'notes', 'pag', 'user'));
    dd($notes);
    dd($slider);
}

public function DetallTopic($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
    $notes         = Note::findOrFail($id);
    $pag           = 'noticias';
    return view('web.partials.pagina.detallTemas', compact('veterinary', 'temasgalerias', 'notes', 'pag', 'user'));

}

public function DetallCourses($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $course     = Course::findOrFail($id);
    $files      = CoursesFiles::where('course_id', $id)->get();
    $pag        = 'courses';
    return view('web.partials.pagina.detallCourse', compact('veterinary', 'course', 'pag', 'files', 'user'));
}

public function itemgallery_detall($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $gallery       = Gallery::findOrFail($id);
    $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
    $pag           = 'galeria';
    return view('web.partials.pagina.detallItemgallery', compact('veterinary', 'gallery', 'pag', 'temasgalerias', 'user'));
}

public function itemgallery_detall_albun($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    try {

        $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $gallery       = Image::findOrFail($id);
        $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
        $pag           = 'galeria';
        
    } catch (\Exception $e) {
        return view('errors.404');
    }
    return view('web.partials.pagina.detallItemgallery', compact('veterinary', 'gallery', 'pag', 'temasgalerias', 'user'));
}

public function DetallItemSlider($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $slider        = Slider::findOrFail($id);
    $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
    $pag           = 'inicio';
    return view('web.partials.pagina.detallItemSlider', compact('veterinary', 'slider', 'pag', 'temasgalerias', 'user'));
    dd($slider);
}

public function DetallNotice($id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        $user = '';
    }
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $notices       = Notice::findOrFail($id);
    $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
    $pag           = 'noticias';
    return view('web.partials.pagina.detall.detallNotice', compact('veterinary', 'temasgalerias', 'notices', 'pag', 'temasgalerias', 'user'));
}

public function solicitainfo(Request $request)
{
    $data = array(
        'nombre'    => $request->nombre,
        'correo'    => $request->correo,
        'contactos' => $request->contactos,
        'ciudad'    => $request->ciudad,
        'message'   => $request->mensaje,
        'cursoId'   => $request->cursoId,
        'cursoName' => $request->cursoName,
        'subject'   => 'Solicitud Información del curso ' . $request->cursoName,
    );
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->first();
    $to         = $veterinary['mail'];
    Mail::to($to)->send(new SendSolicita($data));
    Session::flash('flash_message', 'Su mensaje se ha enviado correctamente');
    return redirect('/courses');
}

public function susbribirse_cupo($id)
{
    $carbon = new \Carbon\Carbon();
    Carbon::setlocale(config('app.locale'));
    $date = $carbon->now();
    $date = $date->format('Y-m-d');
        //flash('Welcome Aboard!');
    if (Auth::user()) {
        $user                 = Auth::user();
        $suscripcion          = Suscribir::where('user_id', '=', $user->id)->where('curso_id', '=', $id)->first();
        $contadordemismocurso = Suscribir::where('user_id', $user->id)->where('curso_id', $id)->count();
        if (($contadordemismocurso) > 0) {
            \Session::flash('warning', 'Ya existe una solicitud de cupo en este curso para su usuario.');
            return redirect()->back();
        } else {
            \Session::flash('success', 'Ingresa tu información para asignarte un cupo.');
        }
    } else {
        \Session::flash('warning', 'Para obtener un cupo debe registrarse en nuestra página');
        $user = '';
        return redirect()->back();
    }

    $user['fecha'] = $date;
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $course        = Course::findOrFail($id);
    $pag           = 'courses';
    return view('web.partials.pagina.user.form_cupo',
        compact('veterinary', 'course', 'pag', 'id', 'user'));
}

public function crearcupo(Request $request)
{
    $user = Auth::user();
    $this->validate($request, [
        'nombres'      => 'required|max:150',
        'apellidos'    => 'required|max:150',
        'correo'       => 'required|max:45',
        'telefono'     => 'nullable|min:1',
        'celular'      => 'nullable|min:1',
        'separarcupos' => 'required|min:1',
    ]);
    $requestData = $request->all();
    if (empty($request->precio_teorico)) {
        $teorico = 0;
    } else {
        $teorico = $request->precio_teorico;
    }
    if (empty($request->precio_practico)) {
        $practico = 0;
    } else {
        $practico = $request->precio_practico;
    }

    $total  = ($teorico + $practico);
    $carbon = new \Carbon\Carbon();
    Carbon::setlocale(config('app.locale'));
    $date = $carbon->now();
    $date = $date->format('Y-m-d');
    if ($request->hasFile('comprobante')) {
        $file       = Input::file('comprobante');
        $uploadPath = public_path('uploads/comprobantes/');
        $extension  = $file->getClientOriginalName();
        $file->move($uploadPath, $extension);
        $requestData['comprobante']      = 'uploads/comprobantes/' . $extension;
        $requestData['name_comprobante'] = $extension;
    }
    $requestData['tipesuscription_id'] = '1';
    $requestData['fecha_suscripcion']  = $date;
    $requestData['orden_cupo']         = '0';
    $requestData['user_id']            = $user->id;
    $requestData['total']              = $total;
    $requestData['precio_teorico']     = $teorico;
    $requestData['precio_practico']    = $practico;
    $veterinary                        = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $veterinaria                       = Veterinary::where('id', 1)->orderBy('name', 'desc')->first();
    $pag                               = 'courses';
    if ($suscribir = Suscribir::create($requestData)) {
        $curso_title = Course::findOrFail($suscribir->curso_id);
        $data        = array(
            'name'    => $request->nombres . ' ' . $request->apellidos,
            'phone'   => $request->telefono . ' ' . $request->celular,
            'mail'    => $request->correo,
            'subject' => 'Solicitud para obtener un cupo en el curso ' . $curso_title->title,
            'message' => 'Este mensaje es automatico, se termina de solicitar un cupo para el curso de "' . $curso_title->title . '" Para (' . $request->nombres . ' ' . $request->apellidos . '), con correo (' . $request->correo . '). ',
        );
        $to = $veterinaria['mail'];
        Mail::to($to)->send(new SendMail($data));
        \Session::flash('success', 'Hemos recibido su información, le enviaremos una respuesta al correo que ha ingresado.');
            //return redirect()->back();
    } else {
        \Session::flash('warning', 'Se produjo un error al procesar su información, intenta nuevamente.');
            //return redirect()->back();
    }
    $id = $suscribir->curso_id;

        //$suscribir = Suscribir::where('curso_id',1)->get();

        //return view('web.partials.pagina.user.detallcupo', compact('suscribir','veterinary', 'pag','id','user'));
        //return redirect()->route('verdetallcupo', ['id' => $id])->compact('suscribir','veterinary', 'pag','id','user');
        //return redirect('/courses');
    $path = 'verdetallcupo/' . $suscribir->id;

    return Redirect::to($path)->with('suscribir', $suscribir);
}

public function miscursos(Request $request, $id)
{
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        \Session::flash('warning', 'No se puede acceder a la sección');
        $user = '';
            //dd('inicia session');
        return redirect()->back();
    }
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $pag        = 'courses';

    $keyword = $request->get('search');
    $perPage = 25;

    if (!empty($keyword)) {
        $suscribir = Suscribir::where('nombres', 'LIKE', "%$keyword%")
        ->orWhere('apellidos', 'LIKE', "%$keyword%")
        ->orWhere('correo', 'LIKE', "%$keyword%")
        ->orWhere('celular', 'LIKE', "%$keyword%")
        ->orWhere('telefono', 'LIKE', "%$keyword%")
        ->orWhere('tipesuscription_id', 'LIKE', "%$keyword%")
        ->orWhere('curso_id', 'LIKE', "%$keyword%")
        ->paginate($perPage);
    } else {
        $suscribir = Suscribir::where('user_id', $user->id)->paginate($perPage);
    }

    return view('web.partials.pagina.user.miscursos', compact('veterinary', 'course', 'pag', 'user', 'suscribir'));

}

public function editcupo($id)
{
    $suscribir = Suscribir::findOrFail($id);
    $carbon    = new \Carbon\Carbon();
    Carbon::setlocale(config('app.locale'));
    $date = $carbon->now();
    $date = $date->format('Y-m-d');
        //flash('Welcome Aboard!');
    if (Auth::user()) {
        $user = Auth::user();
    } else {
        \Session::flash('warning', 'Para obtener un cupo debe registrarse en nuestra página');
        $user = '';
        return redirect()->back();
    }
    $user['fecha'] = $date;
    $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $pag           = 'courses';
    $curso         = Course::findOrFail($suscribir->curso_id);
    return view('web.partials.pagina.user.edit', compact('veterinary', 'pag', 'id', 'suscribir', 'curso', 'user'));
}

public function verdetallcupo($id)
{
    $user       = Auth::user();
    $suscribir  = Suscribir::findOrFail($id);
    $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
    $pag        = 'courses';

    return view('web.partials.pagina.user.detallcupo', compact('suscribir', 'veterinary', 'pag', 'id', 'user'));
}

public function updatecupo(Request $request, $id)
{
    $suscribir = Suscribir::findOrFail($id);
    $user      = Auth::user();

    $this->validate($request, [
        'nombres'          => 'required|max:150',
        'apellidos'        => 'required|max:150',
        'correo'           => 'required|max:30',
        'telefono'         => 'nullable|min:1',
        'celular'          => 'nullable|min:1',
        'valor_depositado' => 'numeric|nullable|min:1',
        'separarcupos'     => 'required|min:1',
    ]);
    $requestData = $request->all();
    if (empty($request->precio_teorico)) {
        $teorico = 0;
    } else {
        $teorico = $request->precio_teorico;
    }
    if (empty($request->precio_practico)) {
        $practico = 0;
    } else {
        $practico = $request->precio_practico;
    }

    $total  = ($teorico + $practico);
    $carbon = new \Carbon\Carbon();
    Carbon::setlocale(config('app.locale'));
    $date = $carbon->now();
    $date = $date->format('Y-m-d');
    if ($request->hasFile('comprobante')) {
        $file       = Input::file('comprobante');
        $uploadPath = public_path('uploads/comprobantes/');
        $extension  = $file->getClientOriginalName();
        $file->move($uploadPath, $extension);
        $requestData['comprobante']      = 'uploads/comprobantes/' . $extension;
        $requestData['name_comprobante'] = $extension;

        $item_delete = Suscribir::findOrFail($id);
        $move        = $item_delete['name_comprobante'];
        $old         = public_path('uploads/comprobantes/') . $move;
        if (!empty($move)) {
            if (\File::exists($old)) {
                unlink($old);
            }
        }
    }
    $requestData['tipesuscription_id'] = '1';
    $requestData['fecha_suscripcion']  = $date;
    $requestData['orden_cupo']         = '0';
    $requestData['user_id']            = $user->id;

    $requestData['total']           = $total;
    $requestData['precio_teorico']  = $teorico;
    $requestData['precio_practico'] = $practico;
    if ($suscribir->update($requestData)) {
        \Session::flash('success', 'Información actualizada con exito.');
        return redirect()->back();
    } else {
        \Session::flash('warning', 'Se produjo un error al procesar su información, intenta nuevamente.');
        return redirect()->back();
    }
}

}
