<?php

namespace App\Http\Controllers;


use App\Models\humans;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    // public function register(){
        // return view('patient_register');

    // }
    public function login(){
        return view('patient_login');
    }


    public function retrieve(){
        $humans = humans::all();
        return view('layout', compact('humans'));
    }

    public function addHuman(){
        return view('add_human');
    }

    public function add(Request $request){

        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $data = new humans();
        $data->first_name = request('first_name');
        $data->middle_name = request('middle_name');
        $data->last_name = request('last_name');
        $data->email = request('email');
        $data->password = request('password');
        $data->age = request('age');
        $data->gender = request('gender');
        $data->address = request('address');

        $data->save();
        return redirect('/view-humans');
            
        
    }

    public function delete($id){
        $human = humans::find($id);
        $human->delete();
        return redirect('/view-humans');
    }

    public function edit($id){
        $human = humans::find($id);
        return view('update_human', compact('human'));
    }

    public function update(Request $request){
        $human = humans::find($request->id);
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $human->first_name = $request->first_name;
        $human->middle_name = $request->middle_name;
        $human->last_name = $request->last_name;
        $human->email = $request->email;
        $human->password = $request->password;
        $human->age = $request->age;
        $human->gender = $request->gender;
        $human->address = $request->address;

        $human->save();
        return redirect('/view-humans');

    }


    public function register(){  
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $data = new humans();
        $data->first_name = request('first_name');
        $data->middle_name = request('middle_name');
        $data->last_name = request('last_name');
        $data->email = request('email');
        $data->password = request('password');
        $data->age = request('age');
        $data->gender = request('gender');
        $data->address = request('address');

        $data->save();
        return redirect('/login')->with('success', 'Human Created!');
    }
   
}

