<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\carts;
use App\Models\order;
use App\Models\product;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
    // 
    public function buy(Request $request, product $product,carts $carts)
    {
        //buynow
        if ($request->input('tipe') == '0') {
            $request->validate([
                'quantity'  => 'required',
            ]);
            // Return view
            // Store to database 
            carts::create([
                'quantity'   => $request->input('quantity'),
                'subprice'       => $product->hargaProduct * $request->input('quantity'),
                'buyer'      => Auth::user()->name,
                'idProduct'     => $product->id,
                // 'orderId'       =>  Str::random(5),
            ]);
            order::create([
                'cost' => $product->hargaProduct * $request->input('quantity'), 
                'buyer'      => Auth::user()->name,
            ]);
            // update stock shoe
            product::where('id', $product->id)
                ->update(['stock' => $product->stock - $request->input('quantity')]);

            return redirect('paymentinfo');
        } 
        else {
            $request->validate([
                'quantity'  => 'required',
            ]);
            // Return view
            // Store to database 
            carts::create([
                'quantity'   => $request->input('quantity'),
                'subprice'       => $product->hargaProduct * $request->input('quantity'),
                'buyer'      => Auth::user()->name,
                'idProduct'     => $product->id,
                // 'orderId'       =>  Str::random(5),
            ]);
            // update stock shoe
            return redirect('cart');
        }
    }
    public function viewcartinfo()
    {
        $carts= carts::orderBy('created_at', 'desc')->get();
        $order= order::orderBy('created_at', 'desc')->get();
        return view('paymentinfo', compact('carts','order'));
    }
    
    public function viewcart()
    {
        $carts= carts::orderBy('created_at', 'desc')->get();
        
        return view('cart', [
            'carts'   => $carts,
        ]);
    }
    public function buycart(Request $request,product $product){
        
        $request->validate([
            'quantity'  => 'required',
            'sumprice'=> 'required',
        ]);
    
        // Return view
        // Store to database 
        order::create([
            'cost'       =>$request->input('sumprice') ,
            'buyer'      => Auth::user()->name,

        ]);
        // update stock shoe
        product::where('id', $product->id)
            ->update(['stock' => $product->stock - $request->input('quantity')]);

        return redirect('paymentinfo',);
    }
}
