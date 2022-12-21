<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\brand;
use App\Models\category;
use App\Models\condition;
use App\Models\product;
use App\Models\Banner;

class pageController extends Controller
{

    public function HomePage() {

        $pej = app()->make('stdClass');

        $pej->name = 'All Cars';
        $pej->link = 'car';

        $pej->car = app()->make('stdClass');

        $pej->car->new = DB::table('products')
            ->where('condition_id','=',1)
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('conditions', 'products.condition_id', '=', 'conditions.id')
            ->select('products.*', 'brands.name AS brand', 'brands.logo AS logo', 'categories.name AS category', 'conditions.name AS condition')
            ->get();

        if (!is_null($pej->car->new)) {
            foreach ($pej->car->new as $k => $v) {
                $img = explode('|',$v->img);
                $v->img = $img;
            }
        }

        $pej->car->used = DB::table('products')
            ->where('condition_id','=',2)
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('conditions', 'products.condition_id', '=', 'conditions.id')
            ->select('products.*', 'brands.name AS brand', 'brands.logo AS logo', 'categories.name AS category', 'conditions.name AS condition')
            ->get();

        if (!is_null($pej->car->used)) {
            foreach ($pej->car->used as $k => $v) {
                $img = explode('|',$v->img);
                $v->img = $img;
            }
        }

        $pej->car->indent = DB::table('products')
            ->where('condition_id','=',3)
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('conditions', 'products.condition_id', '=', 'conditions.id')
            ->select('products.*', 'brands.name AS brand', 'brands.logo AS logo', 'categories.name AS category', 'conditions.name AS condition')
            ->get();

        if (!is_null($pej->car->indent)) {
            foreach ($pej->car->indent as $k => $v) {
                $img = explode('|',$v->img);
                $v->img = $img;
            }
        }


        $pej->banner = Banner::all();
        $pej->brand = Brand::all();
        $pej->category = Category::all();
        $pej->con = Condition::all();
        $pej->pro = Product::all();

        return view('index')->with('data',$pej);
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

        // $res = Product::find($id);

        $res = DB::table('products')
            ->select('products.*', 'brands.name AS brand', 'brands.logo AS logo', 'categories.name AS category', 'conditions.name AS condition','conditions.link AS link')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('conditions', 'products.condition_id', '=', 'conditions.id')
            ->where('products.id','=',$id)
            ->first();

        if (!is_null($res)) {
            $img = explode('|',$res->img);
            array_pop($img);
            $res->img = $img;
        }

        return (is_null($res) ? view('errors.404') : view('product')->with('product',$res));

        // return view('test')->with('product',$res);
    }

}
