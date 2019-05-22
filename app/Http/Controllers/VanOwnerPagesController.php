<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanOwnerPagesController extends Controller
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
    public function manage()
    {
        return view('vanOwnerManage');
    }

    public function payment()
    {
        return view('vanOwnerPayment');
    }

    public function reports()
    {
        return view('vanOwnerReports');
    }
}
