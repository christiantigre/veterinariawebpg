<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinary;
use App\Slider;
use App\Card;
use App\Socio;
use App\Note;
use App\Notice;
use App\Gallery;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
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
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->where('visible',1)->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'inicio';

        return view('web.template.index',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
        /*return view('home');*/
        //return view('web.index');
    }

    public function contact(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'contacto';
        return view('web.partials.pagina.contact',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
    }

    public function postContact(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'mail'=>'required|email',
            'subject'=>'required|min:3',
            'message'=>'required|min:10'
        ]);
        $data = array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'mail'=>$request->mail,
            'subject'=>$request->subject,
            'message'=>$request->message
        );     
        Mail::to($request->mail)->send(new SendMail($data));
        Session::flash('flash_message', 'Su mensaje se ha enviado correctamente');
        return redirect('/contact');
    }



    public function us(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::where('is_active',1)->orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'nosotros';
        //return view('web.partials.pagina.us',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
        return view('web.partials.pagina.equipo',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
    }

    public function mision(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();        
        $pag = 'empresa';
        return view('web.partials.pagina.empresamision',compact('veterinary','notes','notices','pag'));
    }
    public function vision(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();        
        $pag = 'empresa';
        return view('web.partials.pagina.empresavision',compact('veterinary','notes','notices','pag'));
    }

    public function _howtoget_(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'comollegar';
        $config = array();
    //$config['center'] = 'auto';
    /*$config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';*/

        foreach ($veterinary as $dato) {
            $latitud = $dato->latitud;
            $longitud = $dato->longitud;
        }        
        $coondenadas = $latitud.','.$longitud;
        //dd($coondenadas);
        $config['center'] = $coondenadas;
        $config['zoom'] = '14';

        \Gmaps::initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
        $marker = array();
        $marker['position'] = $coondenadas;
        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();
    //$data = "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
        return view('web.partials.pagina.howtoget',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag','map'));
      //mapa estatico 2 puntosreturn view('web.partials.pagina.mapas.mapa');
    // mapa estatico return view('web.partials.pagina.mapa');
     // mapa dinamico return view('web.partials.pagina.mapas.mapas2');
     //mapa con dos posiciones animadas return view('web.partials.pagina.mapas.mapas3');
     //traza ruta desde punto A a B return view('web.partials.pagina.mapas.mapas4');
    }

    public function notices(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'noticias';
        return view('web.partials.pagina.notices',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
        return view('web.partials.pagina.mapa');
    }

    public function pet(){

    }

    public function gallery(){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'galeria';
        return view('web.partials.pagina.gallery',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag'));
    }

    public function howtoget()
    {
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::orderBy('id', 'desc')->get();
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
        $pag = 'comollegar';
        $config = array();

        foreach ($veterinary as $dato) {
            $latitud = $dato->latitud;
            $longitud = $dato->longitud;
        }   
        return view('web.partials.pagina.howtoget',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories','pag','latitud','longitud'));
    }



    public function DetallSlider($id){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $slider = Slider::findOrFail($id);
        $pag = 'noticias';
        return view('web.partials.pagina.detall.detallslider',compact('veterinary','slider','pag'));
        dd($slider);
    }

    public function DetallCards($id){
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes = Card::findOrFail($id);
        $pag = 'noticias';
        return view('web.partials.pagina.detall.detallCards',compact('veterinary','notes','pag'));
        dd($notes);
        dd($slider);
    }

    public function DetallTopic($id){
        //dd('aqui');
        $veterinary = Veterinary::where('id', 1)->orderBy('name', 'desc')->get();
        $notes = Note::findOrFail($id);
        $pag = 'noticias';
        return view('web.partials.pagina.detall.detallTemas',compact('veterinary','notes','pag'));
        
    }


}
