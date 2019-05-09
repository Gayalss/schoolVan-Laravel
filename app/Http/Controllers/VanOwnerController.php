<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanOwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vanOwner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('vanOwner');
    }
}
