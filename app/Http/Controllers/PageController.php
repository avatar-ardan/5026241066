<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function halaman()
    {
        return view('halaman');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function blog()
    {
        return view('blog');
    }
    public function indexio()
    {
        return view('indexio');
    }
    public function intro()
    {
        return view('intro');
    }
    public function tugasLinktree()
    {
        return view('TugasLinktree');
    }
    public function makeoverig()
    {
        return view('makeover-ig');
    }
    public function news()
    {
        return view('news');
    }
    public function news1()
    {
        return view('news1');
    }
    public function contoh()
    {
        return view('contoh');
    }
    public function pertemuan4()
    {
        return view('pertemuan4');
    }
    public function pertemuan5()
    {
        return view('pertemuan5');
    }
    public function responsive()
    {
        return view('responsive');
    }
    public function template()
    {
        return view('template');
    }
}
