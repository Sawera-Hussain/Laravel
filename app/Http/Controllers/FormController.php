<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\login;

class FormController extends Controller
{
    public function index(){
        return view ('form');
        
    }
    public function store(Request $request){
        $customer_data = new login;
        $customer_data->name = $request['name'];
        $customer_data->email = $request['email'];
        $customer_data->address = $request['address'];
        $customer_data->gender = $request['gender'];
        $customer_data->points = $request['points'];
        $customer_data->password = $request['password'];
        $customer_data->save();
        return redirect()->back()->with('form');
    }
    // view
    public function view() {
       $info = login::all(); 
    
        return view('customer', compact('info'));
    }


    public function delete_record($id){
        login::destroy($id);
        // return redirect('customer');
        return back();
    }
    public function edit($id){

        $edit = login::find($id);

        return view('edit', compact('edit'));


    }

    public function update_data(Request $request , $id){

        $edit = login::find($id);

        $edit->name = $request['name'];
        $edit->email =$request['email'];
        $edit->address = $request['address'];
        $edit->gender =$request['gender'];
        $edit->points =$request['points'];
        $edit->save();

         return redirect('customer');


    }

}



