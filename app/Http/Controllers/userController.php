<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Names;
use App\Users;

class userController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function stores(Request $request,$id)
    {
        // $students =Names::where('id',$id)->get();
        dd($request);
        $student = new Users([
            'user_id' => $id,
            
            'clock_in' => $request->get('clock_in'),
            'break_start' => $request->get('break_start'),
            'break_end' =>   $request->get('break_end'),
            'clock_out' => $request->get('clock_out'),
        ]);
        $student->save();
        dd($student);
        // Session::flash('success','Your Payment is added');

        // return view('student.message',compact('students'));
    }

    public function welcome(Request $request){
        $students = Names::all();
        // dd($students);
            return view('welcome',compact('students')); 
    }


    
}