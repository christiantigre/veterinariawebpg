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
        $cards = Card::orderBy('id', 'desc')->get();
        $socios = Socio::orderBy('id', 'desc')->get();
        $notes = Note::orderBy('id', 'desc')->where('visible',1)->get();
        $notices = Notice::orderBy('id', 'desc')->where('visible',1)->get();
        $galleries = Gallery::orderBy('id', 'desc')->where('visible',1)->get();
        $categories = Category::orderBy('id', 'desc')->where('visible',1)->get();
    
        return view('web.template.index',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories'));
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
    
        return view('web.partials.pagina.contact',compact('veterinary','slider','cards','socios','notes','notices','galleries','categories'));
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
}
