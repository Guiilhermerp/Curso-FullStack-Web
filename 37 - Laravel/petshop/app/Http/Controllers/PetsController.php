<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        // $pets = [
        //     'Gatinho',
        //     'Gatinho 2',
        //     'Gatinho 3',
        //     'Gatinho 4'
        // ];

        $pets = \App\Pet::All();
        return view('petsIndex', compact('pet'));
    }
}
