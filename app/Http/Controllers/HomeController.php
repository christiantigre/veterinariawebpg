<?php

namespace App\Http\Controllers;

use App\Card;
use App\Category;
use App\ClasificationCourse;
use App\Course;
use App\CoursesFiles;
use App\Gallery;
use App\Mail\SendMail;
use App\Mail\SendSolicita;
use App\Note;
use App\Notice;
use App\Product;
use App\SectionTitle;
use App\Service;
use App\Slider;
use App\Socio;
use App\TypeCourse;
use App\Typeproduct;
use App\Veterinary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    public function index()
    {
        $veterinary   = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider       = Slider::orderBy('id', 'desc')->get();
        $cards        = Card::orderBy('id', 'desc')->where('visible', 1)->get();
        $socios       = Socio::orderBy('id', 'desc')->get();
        $notes        = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices      = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries    = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories   = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $services     = Service::orderBy('id', 'desc')->where('is_active', 1)->get();
        $typeproducts = Typeproduct::orderBy('id', 'desc')->where('is_active', 1)->get();
        $cursos       = Course::orderBy('id', 'asc')->where('visible', 1)->where('visibleslider', 1)->get();
        $secciones    = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag          = 'inicio';

        return view('web.template.index', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'typeproducts', 'services', 'cursos', 'secciones'));
        /*return view('home');*/
        //return view('web.index');
    }

    public function contact()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag        = 'contacto';
        return view('web.partials.pagina.contact', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag'));
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
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::orderBy('id', 'desc')->get();
        $cards      = Card::orderBy('id', 'desc')->get();
        $socios     = Socio::where('is_active', 1)->orderBy('id', 'desc')->get();
        $notes      = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices    = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $galleries  = Gallery::orderBy('id', 'desc')->where('visible', 1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag        = 'nosotros';
        //return view('web.partials.pagina.us',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
        return view('web.partials.pagina.equipo', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag'));
    }

    public function mision()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();

        $notes   = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag     = 'empresa';
        return view('web.partials.pagina.empresamision', compact('veterinary', 'notes', 'notices', 'pag'));
    }

    public function vision()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();

        $notes   = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $pag     = 'empresa';
        return view('web.partials.pagina.empresavision', compact('veterinary', 'notes', 'notices', 'pag'));
    }

    public function courses()
    {
        $date        = Carbon::now();
        $veterinary  = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes       = Note::orderBy('id', 'desc')->where('visible', 1)->get();
        $notices     = Notice::orderBy('id', 'desc')->where('visible', 1)->get();
        $tipocources = TypeCourse::orderBy('id', 'asc')->where('is_active', 1)->get();
        $clases      = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $todos       = ClasificationCourse::orderBy('id', 'asc')->where('visible', 1)->get();
        $cursos      = Course::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag         = 'courses';
        return view('web.partials.pagina.cursos', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos'));
    }

    public function product()
    {

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
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));
    }

    public function services()
    {

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
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));
    }
    public function service_search(Request $request)
    {
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
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));

    }

    public function producto_search(Request $request)
    {
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
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));

    }

    public function producto_search_id(Request $request, $id)
    {
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
        return view('web.partials.pagina.products', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));

    }
    public function service_search_id(Request $request, $id)
    {
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
        return view('web.partials.pagina.services', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'tipos', 'active', 'services', 'cards'));

    }
    public function socio_search_id($id)
    {
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
        return view('web.partials.pagina.detallSocio', compact('veterinary', 'pag', 'cards'));

    }

    public function producto_detall(Request $request, $id)
    {
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
        return view('web.partials.pagina.detallProduct', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));
    }

    public function service_detall(Request $request, $id)
    {
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
        return view('web.partials.pagina.detallService', compact('veterinary', 'notes', 'notices', 'pag', 'tipocources', 'clases', 'todos', 'cursos', 'productos', 'tipos', 'active', 'services', 'typeproducts', 'cards'));
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
        return view('web.partials.pagina.notices', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones'));
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
        $secciones  = SectionTitle::orderBy('id', 'asc')->where('visible', 1)->get();
        $pag        = 'galeria';
        return view('web.partials.pagina.gallery', compact('veterinary', 'slider', 'cards', 'socios', 'notes', 'notices', 'galleries', 'categories', 'pag', 'secciones'));
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
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider     = Slider::findOrFail($id);
        $pag        = 'noticias';
        return view('web.partials.pagina.detallslider', compact('veterinary', 'slider', 'pag'));
        dd($slider);
    }

    public function DetallCards($id)
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes      = Card::findOrFail($id);
        $pag        = 'noticias';
        return view('web.partials.pagina.detallCards', compact('veterinary', 'notes', 'pag'));
        dd($notes);
        dd($slider);
    }

    public function DetallTopic($id)
    {
        //dd('aqui');
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes      = Note::findOrFail($id);
        $pag        = 'noticias';
        return view('web.partials.pagina.detallTemas', compact('veterinary', 'notes', 'pag'));

    }

    public function DetallCourses($id)
    {
        //dd('aqui');
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $course     = Course::findOrFail($id);
        $files      = CoursesFiles::where('course_id', $id)->get();
        $pag        = 'courses';
        return view('web.partials.pagina.detallCourse', compact('veterinary', 'course', 'pag', 'files'));
    }

    public function itemgallery_detall($id)
    {
        $veterinary    = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $gallery       = Gallery::findOrFail($id);
        $temasgalerias = Gallery::orderBy('id', 'desc')->where('visible', '1')->get();
        $pag           = 'galeria';
        return view('web.partials.pagina.detallItemgallery', compact('veterinary', 'gallery', 'pag', 'temasgalerias'));
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

}
