<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function listFaixa()
    {
        return view('listFaixa');
    }

    public function listAlbum()
    {
        return view('listAlbum');
    }

    public function createAlbum(){
        return view('createAlbum');
    }
    
}
