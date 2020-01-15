<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        $pets = [
            'Gatinho',
            'Gatinho 2',
            'Gatinho 3',
            'Gatinho 4'
        ];

        return view('petsIndex', compact('pets'));
    }
}
