<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers;
use App\Models\About;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\MiniSlider;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{

    public function index(){
        return view('panel.admin-panel');
    }

    public function menu(){
        return view('panel.menu.menu');
    }

    public function createMenu(Request $request){
        $menu = new Menu();
        $menu -> title = $request -> title;
        $menu -> save();
        return redirect()->route('menu-list');
    }

    public function listMenu(){
        $menu = Menu::where('is_deleted',0)->get();
        return view('panel.menu.menu-list',compact('menu'));
    }

    public function deleteMenu($id){
        $menu = Menu::find($id);
        $menu -> update([
           'is_deleted' => 1
        ]);
        return redirect()->route('menu-list');
    }

    public function updateMenu(Request $request, $id){
        Menu::find($id)->update([
           'title' => $request -> title
        ]);
        return redirect()->route('menu-list');
    }

    public function updateShow($id){
        $menu = Menu::find($id);
        return view('panel.menu.menu-update',compact('menu'));
    }

    public function contact(){
        return view('panel.contact.contact');
    }

    public function createContact(Request $request){
        $contact = new Contact();
        $contact -> tel_no = $request -> tel_no;
        $contact -> email = $request -> email;
        $contact -> address = $request -> address;
        $contact -> save();

        return redirect()->route('contact-list');
    }

    public function listContact(){
        $contact = Contact::where('is_deleted',0)->get();
        return view('panel.contact.contact-list',compact('contact'));
    }

    public function updateContact(Request $request, $id){
        Contact::find($id) -> update([
            'tel_no' => $request -> tel_no,
            'email' => $request -> email,
            'address' => $request -> address,
        ]);

        return redirect()->route('contact-list');
    }

    public function updateshowContact($id){
        $contact = Contact::find($id);
        return view('panel.contact.contact-update',compact('contact'));
    }

    public function slider(){
        return view('panel.slider.slider');
    }

    public function createSlider(Request $request){
        $slider = new Slider();
        if ($file = $request->file('path')) {
            $name = $file->getClientOriginalName();
            $file->move('slider/', $name);
            $slider->path = $name;
        }
        $slider->save();

        return redirect()->route('slider-list');
    }

    public function listSlider(){
        $slider = Slider::where('is_deleted',0) -> get();
        return view('panel.slider.slider-list',compact('slider'));
    }

    public function updateSlider(Request $request, $id){
        $slider = Slider::find($id);
        if($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('slider/',$name);
            $slider -> path = $name;
        }
        $slider -> save();

        return redirect()->route('slider-list');
    }

    public function updateshowSlider($id){
        $slider = Slider::find($id);
        return view('panel.slider.slider-update',compact('slider'));
    }

    public function deleteSlider($id){
        Slider::find($id) -> update([
            'is_deleted' => 1
        ]);

        return redirect()->route('slider-list');
    }

    public function about(){
        return view('panel.about.about');
    }

    public function createAbout(Request $request){
        $about = $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        About::create($about);

        return redirect()->route('about-list');
    }

    public function listAbout(){
        $about = About::all();
        return view('panel.about.about-list',compact('about'));
    }

    public function updateAbout(Request $request, $id){
        $about = $request -> validate([
           'title' => 'nullable',
           'content' => 'nullable'
        ]);
        About::find($id)->update($about);

        return redirect()-> route('about-list');
    }

    public function updateshowAbout($id){
        $about = About::find($id);
        return view('panel.about.about-update',compact('about'));
    }

    public function product(){
        return view('panel.product.product');
    }

    public function createProduct(Request $request){
        $product = new Product();
        $product -> title = $request -> title;
        $product -> content = $request -> content;
        $product -> is_popular = $request -> is_popular;

        if($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('urunler/',$name);
            $product -> path = $name;
        }
        $product -> save();

        return redirect() -> route('product-list');
    }

    public function listProduct(){
        $product = Product::where('is_deleted',0)->get();
        return view('panel.product.product-list',compact('product'));
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product -> update([
           'is_deleted' => 1,
        ]);

        return redirect() -> route('product-list');
    }

    public function updateProduct(Request $request,$id){
        $product = Product::find($id);
        $product -> update([
           'title' => $request -> title,
           'content' => $request -> content,
            'is_popular' => $request -> is_popular
        ]);
        if($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('urunler/',$name);
            $product -> path = $name;
        }
        $product -> save();

        return redirect() -> route('product-list');
    }

    public function updateshowProduct($id){
        $product = Product::find($id);
        return view('panel.product.product-update',compact('product'));
    }

    /*
    public function miniSlider(){
        return view('panel.minislider.minislider');
    }

    public function createMiniSlider(Request $request){
        $minislider = new MiniSlider();

        $minislider -> title = $request -> title;
        if($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('miniSlider/',$name);
            $minislider -> path = $name;
        }
        $minislider -> save();

        return redirect() -> route('minislider-list');
    }

    public function listMiniSlider(){
        $minislider = MiniSlider::where('is_deleted',0)->get();

        return view('panel.minislider.minislider-list',compact('minislider'));
    }

    public function updateMiniSlider(Request $request, $id){
        $minislider = MiniSlider::find($id);
        $minislider -> update([
            'title' => $request -> title
        ]);

        if($file = $request -> file('path')){
            $name = $file ->getClientOriginalName();
            $file -> move('miniSlider/',$name);
            $minislider -> path = $name;
        }
        $minislider -> save();

        return redirect() -> route('minislider-list');

    }

    public function showMiniSlider($id){
        $minislider = MiniSlider::find($id);
        return view('panel.minislider.minislider-update',compact('minislider'));
    }

    public function deleteMiniSlider($id){
        $minislider = MiniSlider::find($id);
        $minislider -> update([
            'is_deleted' => 1
        ]);

        return redirect() -> route('minislider-list');
    }

    */

}


