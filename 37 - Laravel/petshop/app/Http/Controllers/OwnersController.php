<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ownersController extends Controller
{
    public function index(){

        $owners = \App\Owner::All();
        return view('index2', compact('owner'));
    }
}
