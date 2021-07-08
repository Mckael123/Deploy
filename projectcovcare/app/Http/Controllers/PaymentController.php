<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::payment();
        return view('index2', compact('payment'));
    }
    public function create(Request $request)
    {
        
        // Validation input
        $request->validate([
            'orderId'  => 'required|unique:payments,orderId',
            'amountPayment'     => 'required',
            'paymentDate'   => 'required',
            'bankname'  => 'required',
            'evidenceTransfer'   => 'mimes:jpg,png,jpeg|max:2048',
        ]);

        // Image proccessing
        if ($request->evidenceTransfer != null) {
            $imageName = time() . '-' . $request->input('orderId') . '.' . $request->evidenceTransfer->extension();
            $imageName = Str::of($imageName)->replace(' ', '');
            $request->evidenceTransfer->move(public_path('image/simpan'), $imageName);
        }
        // Store to database 
        payment::create([
            'users_name' => Auth::user()->name,
            'orderId'   => $request->input('orderId'),
            'amountPayment'       => $request->input('amountPayment'),
            'paymentDate'      => $request->input('paymentDate'),
            'bankname'    => $request->input('bankname'),
            'evidenceTransfer'     => isset($imageName) ? $imageName : null,
        ]);

        //Return view
        Session::flash('success', 'payment verification');
        return redirect()->route('landinglogin');
    }
    public function list()
    {
        $payment = payment::orderBy('created_at', 'asc')->get();
        $user   = User::orderBy('created_at', 'asc')->get();
        // Return view
        return view('verifylist', [
            'payment'   => $payment,
            'user' => $user,
        ]);
    }

    public function paymentinfo()
    {
        $payment = payment::orderBy('created_at', 'asc')->get();
        // Return view
        return view('paymentstatus', [
            'payment'   => $payment,
        ]);
    }
    public function listdetail(payment $payment)
    {
        // Return view
        return view('verifyadmin', [
            'payment'   => $payment,
        ]);
    }
    public function update(payment $payment)
    {
        payment::where('id', $payment->id)
            ->update([
                'status' => 1,
            ]);
            return redirect()->route('list');
    }
    public function delete(payment $payment)
    {
        // Delete whole submission including file upload
            foreach (payment::where('id', $payment->id)->get() as $key) {
                if ($key->file != null) {
                    File::delete(public_path('image/simpan/' . $key->file));
                }
            }
        // Delete room on database
        payment::destroy($payment->id);
        // Return view
        return redirect()->route('list');
    }
}
