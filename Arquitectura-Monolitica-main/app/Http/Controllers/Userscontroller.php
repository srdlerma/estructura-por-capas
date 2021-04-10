<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersmodel;

class Userscontroller extends Controller
{
    public function index(){
        $users = Usersmodel::all();
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $user=Usersmodel::create($request->all());
        return redirect(route('users.index'));
    }
}
