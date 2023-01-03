<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\brand;
use App\Models\category;

class adminPageController extends Controller
{

    public function Index()
    {

        $pej = app()->make('stdClass');

        $pej->name = 'Dashboard';
        $pej->link = '/';

        $pej->new = Product::where('condition_id','=','0')->count();
        $pej->second = Product::where('condition_id','=','1')->count();
        $pej->indent = Product::where('condition_id','=','2')->count();
        $pej->brand = Brand::count();
        $pej->category = Category::count();

        return view('admin/index')->with('pej',$pej);
    }

    public function Car()
    {

        $pej = app()->make('stdClass');

        $data = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('conditions', 'products.condition_id', '=', 'conditions.id')
            ->select('products.*', 'brands.name AS brand', 'brands.logo AS logo', 'categories.name AS category', 'conditions.name AS condition')
            ->get();

        if (!is_null($data)) {
            foreach ($data as $k => $v) {
                $img = explode('|',$v->img);
                array_pop($img);
                $v->img = $img;
            }
        }

        $pej->name = 'All Cars';
        $pej->link = 'cars';

        return view('admin/car')->with('pej',$pej)->with('data',$data);
    }

    public function Brand()
    {

        $pej = app()->make('stdClass');

        $data = Brand::all();

        if (!is_null($data)) {
            foreach($data as $k => $v) {
                $cars = Product::where('brand_id', '=', $v->id)->get();
                $v->counts = !is_null($cars) ? count($cars) : 0;
            }
        }

        $pej->name = 'Brands';
        $pej->link = 'brands';        

        return view('admin/car')->with('pej',$pej)->with('data',$data);
    }

    public function Category()
    {

        $pej = app()->make('stdClass');

        $data = Category::all();

        if (!is_null($data)) {
            foreach($data as $k => $v) {
                $cars = Product::where('category_id', '=', $v->id)->get();
                $v->counts = !is_null($cars) ? count($cars) : 0;
            }
        }

        $pej->name = 'Categories';
        $pej->link = 'categories';

        return view('admin/car')->with('pej',$pej)->with('data',$data);
    }

    public function Banner(){
        $pej = app()->make('stdClass');

        $data = Banner::all();

        $pej->name = 'Banners';
        $pej->link = 'banners';

        return view('admin/banner')->with('pej',$pej)->with('data',$data);;
    }

    public function Sales(){
        $pej = app()->make('stdClass');

        $data = sales::all();

        $pej->name = 'Sales';
        $pej->link = 'sales';

        return view('admin/sales')->with('pej',$pej)->with('data',$data);;
    }
    
}
