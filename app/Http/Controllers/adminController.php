<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function CarIn(Request $req){
        $dir = "img/products/";
        $img = "";


        try {
            $id = Product::insertGetId([
                'brand_id'=>$req->brand,
                'category_id'=>$req->category,
                'condition_id'=>$req->condition,
                'name'=>$req->name,
                'price'=>str_replace(',','',$req->price),
                'img'=>'',
                'spec'=>$req->spec,
                'detail'=>$req->detail
            ]);

            foreach ($_FILES['pict']['tmp_name'] as $k => $v) {
                $type = str_replace("image/","",$_FILES['pict']['type'][$k]);
                $name = $id . "-" . $k . "." . $type;

                try {
                    move_uploaded_file($_FILES['pict']["tmp_name"][$k], $dir.$name);
                } catch (\Throwable $th) {
                    echo $th;
                    return false;
                }

                $img = $img . $name . "|";
            }

            Product::where('id',$id)->update(['img'=>$img]);
        } catch(\Throwable $e) {
            echo $e;
            return false;
        }

        return redirect()->route('xmCars');
    }

    public function CategoryIn(Request $req){
        if (count((array)Category::where('name', '=', $req->name)->first()) > 0 ) {
            return response(['status' => 'fail', 'data' => $req->name]);
        } else {
            $cat = new Category;
            $cat->name = $req->name;

            try{
                $cat->save();
            } catch (\Throwable $e) {
                return response(['status' => 'fail', 'data' => $e]);
            }

            return response(['status' => 'ok', 'data' => $req->name]);
        }
    }


    public function BrandIn(Request $req){

        if (count((array)Brand::where('name', '=', $req->name)->first()) > 0 ) {
            return response(['status' => 'fail', 'data' => $req->name]);
        } else {
            $brand = new Brand;
            $brand->name = $req->name;
            $dir = "img/brand/";

            try{
                $id = DB::table('brands')->insertGetId([
                    'name'=>$req->name,
                    'logo'=>''
                ]);
                
                $type = str_replace("image/","",$_FILES['logo']['type']);
                $name = $id . "." . $type;


                try {
                    move_uploaded_file($_FILES['logo']["tmp_name"], $dir.$name);
                } catch (\Throwable $th) {
                    echo $th;
                    return false;
                }

                DB::table('brands')->where('id',$id)->update(['logo'=>$name]);

            } catch (\Throwable $e) {
                echo $e;
                return false;
            }

        }

        return redirect()->route('xmBrands');
    }

    public function Coba(Request $req){
        return view('admin/test');
    }

}