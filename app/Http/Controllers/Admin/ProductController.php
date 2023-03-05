<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Models\Product;

use DB;

class ProductController extends Controller
{
    public function info()
    {
        // return "sas";
        $listData  = DB::table('products')->get();        
        return view('admin/product/list',compact('listData'));
    }

    public function addShow(){
                return view('admin/product/add');


    }
    public function create(Request $request)
    {
        
        $validatedData = $request->validate([
                'product_price' => 'required',
                'daily_inclome' => 'required',
                'total_income' => 'required',
                'complite' => 'required',
                'image' => 'required',
            ]);

        $product = new Product;
        // dd($request->product_price);
        $product->product_price = $request->product_price;
        $product->daily_inclome = $request->daily_inclome;
        $product->total_income = $request->total_income;
        $product->complite = $request->complite;


   
        if ($request->hasFile('image')) {
            $photo = $request->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/img';
            $request->file('image')->move($destination, $photo);
            }
            $product->image = $photo;


        $product->save();
// dd($product);
        $listData  = DB::table('products')->get();        
        // dd('hii');
        return view('admin/product/list',compact('listData'));
    }
    public function showdata()
    {
        $addcash = addcash::all();
        return view('admin/addcase/list', compact('addcash'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin/product/edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // dd($product);
        $product->product_price = $request->product_price;
        $product->daily_inclome = $request->daily_inclome;
        $product->total_income = $request->total_income;
        $product->complite = $request->complite;

         if ($request->hasFile('image')) {
            $photo = $request->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/img';
            $request->file('image')->move($destination, $photo);
            }
            $product->image = $photo;
         $product->update();
            // dd($photo);
         $listData  = DB::table('products')->get();        
        return view('admin/product/list',compact('listData'));
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
