<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Auth;

class ProductController extends Controller
{
    
    
    public function product()
    {
        $nameof_User = Auth::user()->name;
        $emailof_User = Auth::user()->email;
        $data = Product::all();
        return view('product.product',compact('nameof_User','emailof_User'),['products'=>$data]);
    }

    public function showProduct($id)
    {
        $data= Product::find($id);
        return view('product.editproduct',['products'=>$data]);
    }


    public function updateProduct(Request $req)
    {

        $data= Product::find($req->id);

        $data->description=$req->description;
        $data->quantity=$req->quantity;
        $data->price=$req->price;
        $data->save();
        session()->flash('produpdate', '');
        return redirect('products');
    }

    public function addProduct(Request $req)
    {
        $product= new Product;
        
        $product->description=$req->description;
        $product->quantity=$req->quantity;
        $product->price=$req->price;
        $product->save();
        return redirect('products');
    }

    public function deleteproduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        session()->flash('prodsuccess', '');
        return redirect('/products');
    }

}
