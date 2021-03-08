<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    
    public function create()
    {
        $contacts=new contact();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->tell=$request->tell;
        $contacts->message=$request->message;
        $contacts->save();
        return view('contact');
    }
    
    public function contact(){
        return view('contact');
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(User $user)
    {
        //
    }

   
    public function edit(User $user)
    {
        //
    }

   
    public function update(Request $request, User $user)
    {
        //
    }

   
    public function destroy(User $user)
    {
        //
    }
}
