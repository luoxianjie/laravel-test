<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

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
        Redis::tags('test4')->put('test4','test4');
    }


    /**
     * test
     */
    public function test()
    {
        dd(Redis::get('test4'));
    }

}
