<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class UserController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('users/home');
    }
    public function ride_request()
    {
        $dt = new DateTime();
        $data['date'] = $dt->format('d-m-Y H:i');
        $data['user'] = "KONE CLEMENT";
        $data['depart'] = "BUREAU";
        return view('users/ride_request',['data' => $data]);
    }

    public function historique()
    {
        return view('users/historique');
    }

}
