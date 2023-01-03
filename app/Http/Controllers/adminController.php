<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\sales;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Throwable;

class adminController extends Controller
{

    public function LogOut(Request $request)
    {
        \Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');    
    }
    
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

    public function CarUpdate(Request $req){
        $data = Product::find($req->id);

        $data->name = $req->name;
        $data->category_id = $req->category;
        $data->price = $req->price;
        $data->spec = $req->spec;
        $data->detail = $req->detail;

        try {
            $data->save();
        } catch (\Throwable $th) {
            return response(["status" => "fail", "msg" => $th]);
        }

        return response(["status" => "ok", "msg" => "Product berhasil di perbaharui"]);
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


    public function CarDel(Request $req){
        $x = Product::find($req->id);
        $name = $x->name;

        if (!is_null($x->img)) {
            $img = explode('|',$x->img);
            $x->img = $img;
        }

        try {
            foreach ($x->img as $key => $val) {
                File::delete('img/products/'.$val);
            }

            $x->delete();
        } catch (\Throwable $th) {
            return response(['status'=>'error','msg'=>"Gagal menghapus $name!"]);
        }
        
        return response(['status'=>'ok','msg'=>"$name berhasil di hapus!"]);
    }

    public function CarImgDel(Request $req)
    {
        $res = Product::find($req->id);

        try {
            File::delete('img/products/'.$req->img);
        } catch (\Throwable $th) {
            return response()->json(['success'=>'ok','msg'=>$th]);
        }


        $img = str_replace($req->img."|","",$res->img);

        $res->img = $img;

        try {
            $res->save();
        } catch (\Throwable $th) {
            return response()->json(['success'=>'ok','msg'=>$th]);
        }

        return response()->json(['success'=>'ok','msg'=>'Gambar berhasil dihapus!']);
    }

    public function CatDel(Request $req){
        $x = Category::find($req->id);
        $name = $x->name;

        try {
            $x->delete();
        } catch (\Throwable $th) {
            return response(['status'=>'error','msg'=>"Gagal menghapus $name!"]);
        }
        
        return response(['status'=>'ok','msg'=>"$name berhasil di hapus!"]);
    }

    public function Coba(Request $req){
        return view('admin/test');
    }

    public function AddImgPro(Request $req){
        $dir = "img/products/";
        $z = 0;
        $fnames = "";

        $rec = Product::find($req->id);

        $img = explode('|', $rec->img);
        array_pop($img);

        foreach ($img as $k => $v) {
            $x = explode('-', $v);
            $y = explode('.', $x[1]);
            if ($y[0] > $z) $z = $y[0];
        }
        $z++;

        try {
            $file = $req->file('img');
            if ($file != '') {
                $img = $req->file('img');
                $fext = $extension = $file->getClientOriginalExtension();
                $fname = "$req->id-$z.$fext";
                $img->move($dir, $fname);
                $fnames = $rec->img . $fname . "|";
            }

            $rec->img = $fnames;

            $rec->save();
        } catch (Throwable $th) {
            return response(['status' => 'fail', 'msg' => "Error : $th"]);
        }

        return response(['status' => 'ok', 'msg' => "Foto berhasil ditambahkan!"]);
    }

    public function GetImgPro(Request $req){

        $data = Product::find($req->id);

        if (!is_null($data)) {
            $img = explode('|',$data->img);
            array_pop($img);
            $data->img = $img;
        }

        return response(['status' => 'ok', 'msg' => $data->img]);
    }



    // ====================================== Banner ===============================

    public function AddBanner(Request $req){
        $dir = "assets/uploads/banner/";
        $title = "";
        $imgBanner = "";

        try {
            $file = $req->file('img');
            if ($file != '') {
                $img = $req->file('img');
                $fext = $file->getClientOriginalExtension();
                $id = DB::table('banners')->insertGetId([
                    'title' => $file->getClientOriginalName()
                 ]);
                $fname = "$id.$fext";
                $img->move($dir, $fname);

                $banner = Banner::find($id);
                $banner->img = $fname;
                $banner->save();
            }

        } catch (Throwable $th) {
            return response(['status' => 'fail', 'msg' => "Error : $th"]);
        }

        return response(['status' => 'ok', 'msg' => "Foto berhasil ditambahkan!"]);
    }

    public function GetBanner(Request $req){
        $data = Banner::all();

        return response(['status' => 'ok', 'msg' => $data]);


    }
 
    public function DelBanner(Request $req)
    {
        $x = Banner::find($req->id);

        try {
            File::delete('assets/uploads/banner/'.$x->img);
            $x->delete();
        } catch (\Throwable $th) {
            return response()->json(['success'=>'ok','msg'=>$th]);
        }

        return response()->json(['success'=>'ok','msg'=>'Banner berhasil dihapus!']);
    }



   // ====================================== Sales ===============================

    public function AddSales(Request $req){
        $sales = new Sales();

        try {
            $sales->name = $req->nama;
            $sales->phone = $req->phone;
            $sales->save();
        } catch (Throwable $th) {
            return response(['status' => 'fail', 'msg' => "Error : $th"]);
        }

        return response(['status' => 'ok', 'msg' => "Sales berhasil ditambahkan!"]);
    }

    public function GetSales(Request $req){
        $data = Sales::all();

        return response(['status' => 'ok', 'msg' => $data]);
    }

    public function DelSales(Request $req)
    {
        $x = Sales::find($req->id);

        try {
            $x->delete();
        } catch (\Throwable $th) {
            return response()->json(['status'=>'fail','msg'=>$th]);
        }

        return response()->json(['status'=>'ok','msg'=>'Sales berhasil dihapus!']);
    }

    public function ChSales(Request $req){
        $sales = Sales::find($req->id);

        try {
            $sales->name = $req->nama;
            $sales->phone = $req->phone;
            $sales->save();
        } catch (Throwable $th) {
            return response(['status' => 'fail', 'msg' => "Error : $th"]);
        }

        return response(['status' => 'ok', 'msg' => "Sales berhasil diubah!"]);
    }



    // =================================== Brand ======================================

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

    public function BrandDel(Request $req){
        $x = Brand::find($req->id);
        $name = $x->name;

        try {
            $x->delete();
        } catch (\Throwable $th) {
            return response(['status'=>'error','msg'=>"Gagal menghapus $name!"]);
        }
        
        return response(['status'=>'ok','msg'=>"$name berhasil di hapus!"]);
    }

    public function BrandUp(Request $req){
        $brand = Brand::find($req->id);
        $dir = "img/brand/";

        if ($_FILES['logo']["tmp_name"] != "") {
            try{
                
                $type = str_replace("image/","",$_FILES['logo']['type']);
                $name = $req->id . "." . $type;

                try {
                    move_uploaded_file($_FILES['logo']["tmp_name"], $dir.$name);
                } catch (\Throwable $th) {
                    echo $th;
                    return false;
                }

            } catch (\Throwable $e) {
                echo $e;
                return false;
            }            
        }

        $brand->name = $req->name;
        $brand->save();

        return redirect()->route('xmBrands');
    }

}