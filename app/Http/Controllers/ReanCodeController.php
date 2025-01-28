<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReanCodeController extends Controller
{
    public function HTML()
    {
        return view('portfolio.reanCode');
    }
    public function CSS()
    {
        return view('portfolio.reanCSS');
    }
    public function BootStrap()
    {
        return view('portfolio.reanBootStrap');
    }
    public function JavaScript()
    {
        return view('portfolio.reanJavaScript');
    }
    public function JQuery()
    {
        return view('portfolio.reanJQuery');
    }
    public function PHP()
    {
        return view('portfolio.reanPHP');
    }
    public function Laravel()
    {
        return view('portfolio.reanLaravel');
    }
}
