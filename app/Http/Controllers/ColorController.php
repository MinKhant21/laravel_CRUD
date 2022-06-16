<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $color = Color::all();
        return view('all',compact('color'));
    }

    public function create(){
        return view('create');
    }
    public function store(){
        $name =  request()->name;
        Color::create([
            'name' => $name
        ]);
        return redirect('/');
    }

    public function edit($id){
        $color = Color::where('id',$id)->first();
        return view('edit',compact('color'));
    }

    public function update($id){
        $name = request()->name;
        Color::where('id',$id)->update([
            'name' => $name
        ]);
        return redirect('/');
    }
}
