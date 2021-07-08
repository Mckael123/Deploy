<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == "admin") {
            return redirect()->to('admin');
        } else if ($role == "user") {
            return redirect()->to('user');
        } else {
            return redirect()->to('logout');
        }
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('index');
    }
    public function homes()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/adminhome');
        } elseif (Auth::check() && Auth::user()->role == 'user') {
            return redirect('/index2');
        }
    }
    public function landproduk()
    {
        return view('landproduk');
    }
    public function KitPencegahan()
    {
        return view('KitPencegahan');
    }
    public function KitPositif()
    {
        return view('KitPositif');
    }
    public function KitPascapositif()
    {
        return view('KitPascapositif');
    }
    public function news()
    {
        return view('news');
    }
    public function about()
    {
        return view('about');
    }
    public function covinfo()
    {
        return view('covinfo');
    }
    public function produk()
    {
        return view('produk');
    }
    // public function Login()
    // {
    //     return view('Login');
    // }
    public function berita()
    {
        return view('berita');
    }
    // =====
    public function home2()
    {
        return view('index2');
    }

    public function landproduk2()
    {
        return view('landproduk2');
    }
    public function news2()
    {
        return view('news2');
    }
    public function about2()
    {
        return view('about2');
    }
    public function covinfo2()
    {
        return view('covinfo2');
    }
    public function KitPencegahan2()
    {
        return view('KitPencegahan2');
    }
    public function KitPositif2()
    {
        return view('KitPositif2');
    }
    public function KitPascapositif2()
    {
        return view('KitPascapositif2');
    }
    public function Login2()
    {
        return view('Login2');
    }
    public function cart()
    {
        return view('cart');
    }
    public function paymentinfo()
    {
        return view('paymentinfo');
    }
    public function paymentstatus()
    {
        return view('paymentstatus');
    }
    public function produk2()
    {
        return view('produk2');
    }
    public function berita2()
    {
        return view('berita2');
    }

    public function profile()
    {
        return view('profile');
    }

    public function login()
    {
        return view('login');
    }

    public function adminhome()
    {
        return view('adminhome');
    }
    public function registrasi()
    {
        return view('registrasi');
    }
    function editnews()
    {
        return view('editnews');
    }

    function verifyadmin()
    {
        return view('verifyadmin');
    }

    function verifylist()
    {
        return view('verifylist');
    }

    function editproduct()
    {
        return view('editproduct');
    }
    function payment()
    {
        return view('payment');
    }
}
