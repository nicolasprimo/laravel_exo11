<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $datas = [(object)['id'=>1, "nom" => "nicolas", "age" => 14, "email" => "nico@email.com"],(object)['id'=>2, "nom" => "fati", "age" => 18, "email" => "fati@email.com"]];
        return view('users',compact('datas'));
    }
}
