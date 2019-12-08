<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\EmployeeRequest;
use Validator;

class EmployeeController extends Controller
{

    function index(Request $request){

        if($request->session()->has('uname')){
            
            $stds = \App\User::all();
            // $stds = DB::table('users')->get();
            return view('employee.index')->with('users', $stds);

        }else{
            return redirect()->route('login.index');
        }
    }

    function delete($id){

        $std = ['id'=>'124', 'username'=>'alamin', 'password'=>2223];
        return view('student.delete')->with('std', $std);
    }

    function destroy(Request $request, $id){

        return redirect()->route('student.index');
    }

    function show($id){
        //search student from array by ID
        //$std = $this->getStudentList();
        
        $std = ['username'=>'test', 'password'=>'123'];
        return view('student.details')->with('user', $std);        

    }

    function add(){

    	return view('employee.add');
    }

    function store(Request $request){
    
      
            // echo "File Name: ".$file->getClientOriginalName()."<br>";
            // echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "File Size: ".$file->getSize()."<br>";
            // echo "File Type: ".$file->getMimeType();

           
      





        /*        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);*/

        /*        $validator = $this->validate($request, [

            'username'=>'required',
            'password'=>'required'
        ])->validate();
        //$validator->validate();*/

        /*        $validation = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required'
        ]);

        if($validation->fails()){
            //return back()->with('errors', $validation->errors())->withInput();
            return redirect()->route('student.add')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }*/

    	$user = new User();
        $user->username = $request->username;
        $user->password =$request->password;
        $user->name =$request->name;
        $user->contactno =$request->contactno;
        

        if($user->save()){
            return redirect()->route('employee.index');
        }else{
            return redirect()->route('employee.add');
        }
    }

    function edit($id){
    	$user = User::find($id);
    	return view('student.edit')->with('user', $user);
    }


    function update(Request $request, $id){

        $user = User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
    	return redirect()->route('student.index');
    }

}



