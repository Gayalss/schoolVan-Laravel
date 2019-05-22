<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanDriverPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vanDriver');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manage()
    {
        return view('');
    }
}
