<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('index2', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        // Validation input
        $request->validate([
            'name'  => 'required|unique:users,name,' . $user->id,
            'email'      => 'required|unique:users,email,'.$user->id,
            // 'password'    => 'required',
            'address'  => 'required',
            'city'   => 'required',
            'phone'   => 'required',
            'gambar'     => 'mimes:jpg,png,jpeg|max:2048',
        ]);
        
        // Update data to database 
        User::where('id', $user->id)
            ->update([
                'name'      => $request->input('name'),
                'email'    => $request->input('email'),
                'city'  => $request->input('city'),
                'address'   => $request->input('address'),
                'phone'   => $request->input('phone'),
            ]);
        // Image proccessing
        if ($request->gambar != null) {
            if ($user->gambar != null) {
                File::delete(public_path('image/simpan/' . $user->gambar));
            }
            $imageName = time() . '-' . $request->input('name') . '.' . $request->gambar->extension();
            $imageName = Str::of($imageName)->replace(' ', '');
            $request->gambar->move(public_path('image/simpan'), $imageName);
            User::where('id', $user->id)
                ->update(['gambar' => $imageName]);
        }
      
        // Change foreign
        // if ($request->input('username') != $user->email) {
        //     User::where('id', $user->id)
        //         ->update(['username' => $request->input('name')]);
        //     // User::where('id', $user->id)
        //     //     ->update(['nis' => $request->input('name')]);
        // }
        // Change password
        if ($request->input('password') != null) {
            User::where('id', $user->id)
                ->update(['password' => Hash::make($request->input('password'))]);
        }
        // Return view
        Session::flash('success', 'Akun sudah di update "' . ($request->input('name') == null ? $request->input('name') : $request->input('name') . ' ' . $request->input('name')) . '" berhasil diedit.');
        return redirect()->route('landinglogin');
    }
}
