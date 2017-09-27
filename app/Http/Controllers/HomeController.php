<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinary;
use App\Slider;
use App\Card;

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
               return view('web.template.index',compact('veterinary','slider','cards'));
        /*return view('home');*/
        //return view('web.index');
    }
}
