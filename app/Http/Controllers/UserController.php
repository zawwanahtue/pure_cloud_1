<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home() 
    {
        $data = new User()->all();
        return view('/home', ['data'=>$data]);
    }
}
