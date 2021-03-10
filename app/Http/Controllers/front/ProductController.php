<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\MiniSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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




}
