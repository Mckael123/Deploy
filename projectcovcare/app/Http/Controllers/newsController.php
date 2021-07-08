<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class newsController extends Controller
{
    public function home()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        // Return view
        return view('index', [
            'news'   => $news,
        ]);
    }

    public function home2()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        // Return view
        return view('index2', [
            'news'   => $news,
        ]);
    }
    public function index()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        // Return view
        return view('news', [
            'news'   => $news,
        ]);
    }
    public function index2()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        // Return view
        return view('news2', [
            'news'   => $news,
        ]);
    }
    public function berita(news $news)
    {
        // dd($news);
        // Return view
        return view('berita', [
            'news'   => $news,
        ]);
    }
    public function berita2(news $news)
    {

        
        // Return view
        return view('berita2', [
            'news'   => $news,
        ]);
    }

    public function create(Request $request)
    {
        // Validation input
        $request->validate([
            'title'  => 'required',
            'date'     => 'required',
            'content'   => 'required',
            'image'   => 'mimes:jpg,png,jpeg|max:2048',
        ]);
        // Image proccessing
        if ($request->image != null) {
            $imageName = time() . '-' . $request->input('title') . '.' . $request->image->extension();
            $imageName = Str::of($imageName)->replace(' ', '');
            $request->image->move(public_path('image/simpan'), $imageName);
            
        }

        // Store to database 
        news::create([
            'title'   => $request->input('title'),
            'date'       => $request->input('date'),
            'content'      => $request->input('content'),
            'image'     => isset($imageName) ? $imageName : null,
            'pembuat' => Auth::user()->name,
        ]);

        // Return view
        Session::flash('success', 'edit news');
        return redirect()->route('landingadmin');
    }
}
