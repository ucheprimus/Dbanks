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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function summary()
    {
        return view('client.summary');
    }
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function history()
    {
        return view('client.history');
    }
    public function account()
    {
        return view('client.add-account');
    }
    public function card()
    {
        return view('client.add-card');
    }

    public function intransfer()
    {
        return view('client.intransfer');
    }

    public function extransfer()
    {
        return view('client.extransfer');
    }

    public function savings()
    {
        return view('client.savings');
    }

    public function investments()
    {
        return view('client.investments');
    }

    public function loans()
    {
        return view('client.loans');
    }
}
