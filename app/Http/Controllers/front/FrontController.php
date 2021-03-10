<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\MiniSlider;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    //+
    public function products(){
        $product = Product::all()->where('is_deleted',0);
        return view('front.products',compact('product'));
    }

    //+
    public function products_detail($id){
        $product = Product::find($id);
        return view('front.products-detail',compact('product'));
    }

    //+
    public function contact(){
        $contact = Contact::all();
        return view('front.contact',compact('contact'));
    }

    //+
    public function about(){
        $about = About::all();
        return view('front.about',compact('about'));
    }

    //+
    public function slider(){
        $slider = Slider::where('is_deleted',0) -> get();
        $headslider = Slider::where('is_deleted',0) -> orderBy('id','DESC') -> first();
        $is_popular = Product::where('is_popular',1) -> where('is_deleted',0) -> get();
       // $minislider = MiniSlider::where('is_deleted',0) -> get();
        return view('front.anasayfa',compact('slider','is_popular','headslider'));
    }





    /*
    //Product give data
    public function index(){

        $product = Product::all()->where('is_deleted',0);
        return view('front.index',compact('product'));
    }

    //Product content give data
    public function deneme($id){
        $product = Product::find($id);
        return view('front.deneme',compact('product'));
    }


    //Contact give data
    public function contact(){
        $contact = Contact::all();
        return view('front.contact',compact('contact'));
    }

    //Menu give data
    public function menublade(){
        $menu = Menu::all()->where('is_deleted',0);
        return view('front.menu',compact('menu'));
    }

     */


}
