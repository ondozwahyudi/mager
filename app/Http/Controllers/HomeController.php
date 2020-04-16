<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use App\User;

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
        $kelas = self::guru();
        return view('home', compact('kelas'));
    }

    protected function guru()
    {
        $kelas = User::where('id', auth()->user()->id)->with(['kelas' => function ($query) {
            return $query->with('user')->get();
        }])->get();
        return $kelas;
    }
}
