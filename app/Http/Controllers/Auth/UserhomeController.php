<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;;
use Illuminate\Http\Request;

class UserhomeController extends Controller
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
        echo 'user-home!';
    }
}