<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\category;
use App\Models\condition;
use App\Models\product;

class pageController extends Controller
{

    public function HomePage() {
        $brand = Brand::all();

        return view('index');
    }

    public function Car() {
        
        $pej = app()->make('stdClass');

        $pej->name = 'All Cars';
        $pej->link = 'car';        

        $res = Product::all();

        if (!is_null($res)) {
            foreach ($res as $k => $v) {
                $img = explode('|',$v->img);
                $v->img = $img;
            }
        }
        
        return view('cars')->with('pej',$pej)->with('cars',$res);
    }

    public function Cars($slug) {
        $sub = explode('/',$slug);
        
        $pej = app()->make('stdClass');

        $pej->name = ucfirst($slug).' Cars';
        $pej->link = $slug;

        $con = Condition::where('link', $slug)->first()->id;

        $res = Product::where('condition_id', $con)->get();

        if (!is_null($res)) {
            foreach ($res as $k => $v) {
                $img = explode('|',$v->img);
                $v->img = $img;
            }
        }

        return view('cars')->with('pej',$pej)->with('cars',$res);
    }

    public function Brand() {

        
        return view('cars');
    }

    public function Tag() {

        
        return view('cars');
    }

    public function Contact() {

        
        return view('contact');
    }    

    public function About() {

        
        return view('about');
    }

    public function Product($id) {

        $res = Product::find($id);

        if (!is_null($res)) {
            $img = explode('|',$res->img);
            $res->img = $img;
        }

        return (is_null($res) ? view('404') : view('product')->with('product',$res));

        // return view('test')->with('product',$res);
    }

}
