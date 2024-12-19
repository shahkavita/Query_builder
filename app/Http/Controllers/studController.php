<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studController extends Controller
{
    //
    public function show()
    {
       $s1=DB::table('students')
                 ->paginate(5);
        return view('student',['data1'=>$s1]);
    }
    public function whendata()
    {
             $s2=DB::table('students')
            ->when(true,function($q1){
                $q1->where('age','>',20);
            })
            ->get();
            return view('whendata',['data'=>$s2]);
    }
    public function show_record()
    {
        $s1=DB::table('students')
                ->join('courses','courses.c_id','=','students.c_id')
                ->get();
                return view('student',['data'=>$s1]); 
                 // ->select(DB::raw('count(*) as count'),'courses.c_name')
                //->groupBy('c_name')
                //->having('c_name','=','Msc')
              //  return $s1;
                  
    }
    public function addstudent(Request $req)
    {
        $s1=DB::table('students')
        ->insert(
            [
                'name'=>$req->firstname,
                'email'=>$req->email,
                'age'=>$req->age,
                'city'=>$req->city
            ]
        );
       
       if($s1)
       {
         
          return redirect()->route('student');
       } 
       else
       {
        echo "<h1>Data not inserted<h1>";
       }
    }
    public function updatestudent(string $id)
    {
        $s1=DB::table('students')->where('id',$id)->get();
        return view('update_student',['data'=>$s1]);
    }
    public function update_stu(Request $req,string $id)
    {
        $s1=DB::table('students')
        ->where('id',$id)
        ->update(
            [
                'name'=>$req->firstname,
                'email'=>$req->email,
                'age'=>$req->age,
                'city'=>$req->city
            ]
        );
       
       if($s1)
       {
         
          return redirect()->route('student');
       } 
       else
       {
        echo "<h1>Data not inserted<h1>";
       }
    }
    public function viewstudent(string $id)
    {
        $s1=DB::table('students')->where('id',$id)->get();
        return view('viewstudent',['data'=>$s1]);
    }
    public function delstudent(string $id)
    {
        $s1=DB::table('students')->where('id',$id)->delete();
        if($s1)
        {
            return redirect()->route('student');
        }
       
    }
    
}
