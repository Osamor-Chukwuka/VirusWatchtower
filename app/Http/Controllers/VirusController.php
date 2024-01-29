<?php

namespace App\Http\Controllers;

use App\Models\Virus;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class VirusController extends Controller
{
    //
    public function index(){
        
        return view('dashboard', [
            'viruses' => Virus::all()
        ]);
    }


    public function create(){
        if (auth()->user()->email != 'admin@gmail.com'){ 
            return redirect(Route('dashboard'));
        }
        return view('addVirus');
    }

    public function store(Request $request){
        $form = $request->validate([
            'name' =>'required',
            'type' =>'required',
            'danger_level' =>'required',
            'affected_platform' =>'required',
            'symptoms' =>'required',
            'distribution_method' =>'required',
            'prevention' =>'required',
            'removal' =>'required',
        ]);
        Virus::create($form);
        return redirect(Route('addVirus'))->with('status', 'Virus added to Database');
    }
}
