<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Models\Upi;
use DB;

class UpiController extends Controller
{
    public function listshow()
    {
        // dd("sasa");

        $listData  = DB::table('upis')->get();        
        return view('admin/upi/list',compact('listData'));
    }

    public function addShow(){
                return view('admin/upi/add');


    }
    public function create(Request $request)
    {
        
        $validatedData = $request->validate([
                'upi_number' => 'required',
                'status' => 'required',
               
            ]);

        $product = new Upi;
        // dd($request->product_price);
        $product->upi_number = $request->upi_number;
        $product->status = $request->status;
       


        $product->save();
// dd($product);
        $listData  = DB::table('upis')->get();        
        // dd('hii');
        return view('admin/upi/list',compact('listData'));
    }
    public function showdata()
    {
        $addcash = Upi::all();
        return view('admin/upi/list', compact('addcash'));
    }
    public function edit($id)
    {
        $product = Upi::find($id);
        return view('admin/upi/edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Upi::find($id);
        // dd($product);
        $product->upi_number = $request->upi_number;
        $product->status = $request->status;
         $product->update();
            // dd($photo);
         $listData  = DB::table('upis')->get();        
        return view('admin/upi/list',compact('listData'));
    }
    public function delete($id)
    {
        $product = Upi::find($id);
        $product->delete();
        return redirect()->back();
    }
}
