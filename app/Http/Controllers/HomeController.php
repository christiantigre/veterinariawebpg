<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinary;
use App\Slider;
use App\Card;
use App\Socio;
use App\Note;
use App\Notice;

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

            $video = "video/os_simpsons_s25e22_720p.mp4";
    $mime = "video/mp4";
    $title = "Os Simpsons";
    
               return view('web.template.index',compact('veterinary','slider','cards','socios','notes','notices'));
        /*return view('home');*/
        //return view('web.index');
    }
}
