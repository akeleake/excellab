<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('block');
    }

    public function admin()
    {
        $data = array();
        $data['title'] = 'Dashboard';
        return view('admin',$data);
    }
}
