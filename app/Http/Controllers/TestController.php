<?php

namespace App\Http\Controllers;

use App\titulodocente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class TestController extends Controller
{
    /**
     * @return string
     */
//    public function view($id)
//    {
//        $user= User::find($id);
//
//            $user->User;
//        dd($user);
//    }
    public function view($name)
    {
        $titulo= titulodocente::find($name);


        $titulo->titulodocente;
        $titulo->User;


        return view('test.index',['titulo'=> $titulo]);
    }
}
