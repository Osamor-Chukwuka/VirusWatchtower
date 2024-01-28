<?php

namespace App\Http\Controllers;

use App\Models\Virus;
use Illuminate\Http\Request;

class VirusController extends Controller
{
    //
    public function index(){
        
        return view('dashboard', [
            'viruses' => Virus::all()
        ]);
    }


    public function create(){
        return view('addVirus');
    }
}
