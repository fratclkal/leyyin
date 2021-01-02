<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.anasayfa');
    }

    public function products(){
        return view('front.products');
    }

    public function products_detail(){
        return view('front.products-detail');
    }

    public function contact(){
        return view('front.contact');
    }

    public function about(){
        return view('front.about');
    }



}
