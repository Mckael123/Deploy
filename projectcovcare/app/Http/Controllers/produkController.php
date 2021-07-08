<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class produkController extends Controller
{
    public function product(product $product)
    {
        return view('produk', [
            'product'   => $product,
        ]);
    }
    public function product2(product $product)
    {
        
        return view('produk2', [
            'product'   => $product,
        ]);
    }
    public function prevention(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPencegahan', [
            'product'   => $product,
        ]);
    }
    public function prevention2(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPencegahan2', [
            'product'   => $product,
        ]);
    }
    public function positif(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPositif', [
            'product'   => $product,
        ]);
    }
    public function positif2(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPositif2', [
            'product'   => $product,
        ]);
    }
    public function recovery(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPascapositif', [
            'product'   => $product,
        ]);
    }
    public function recovery2(product $product)
    {
        $product = product::orderBy('created_at', 'desc')->get();
        return view('KitPascapositif2', [
            'product'   => $product,
        ]);
    }
    public function create(Request $request)
    {
        // Validation input
        $request->validate([
            'namaProduct'  => 'required',
            'hargaProduct'     => 'required',
            // 'expired'   => 'required',
            'stock'  => 'required',
            'description' => 'required',
            'image'   => 'mimes:jpg,png,jpeg|max:2048',
        ]);
        // Image proccessing
        if ($request->image != null) {
            $imageName = time() . '-' . $request->input('namaProduct') . '.' . $request->image->extension();
            $imageName = Str::of($imageName)->replace(' ', '');
            $request->image->move(public_path('image/simpan'), $imageName);
        }
        // Store to database 
        product::create([
            'email' => Auth::user()->email,
            'namaProduct'       => $request->input('namaProduct'),
            'hargaProduct'       => $request->input('hargaProduct'),
            'expired'       => $request->input('expired'),
            'stock'       => $request->input('stock'),
            'description'      => $request->input('description'),
            'image'     => isset($imageName) ? $imageName : null,
        ]);
       
        // Return view
        Session::flash('success', 'payment verification');
        return redirect()->route('landingadmin');
    }
}
