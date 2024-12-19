<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function show()
    {
        $city=DB::table('cities')->select()->get();
        return view('cities',['data'=>$city]);
        /*$student=DB::table('cities')->select('gov_name')->distinct()->get();
       
        $city=DB::table('cities')
                    ->where('name','like','a%')
                    ->get();
        $city=DB::table('cities')
                ->whereBetween('id',[2,5])
                ->get();
        $city=DB::table('cities')
                    ->orderby('name','desc')
                    ->get();
        return view('cities',['data'=>$city]);
        $student=DB::table('cities')->count();
        return $student;*/
       
    }
    public function singleuser(string $id)
    {
        $city=DB::table('cities')->where('id',$id)->get();
        return view('singlecity',['data'=>$city]);
    }
    public function deletecity(string $id)
    {
        $city=DB::table('cities')->where('id',$id)->delete();
        return view('deletecity',['data'=>$city]);
    }
    public function newcity()
    {
        $user=DB::table('cities')
                ->upsert(
                ['name'=>'Haldawani','Email'=>'auli@gmail.com','gov_name'=>'Gurmit Singh'
                ],['Email'],['name']    
            );
        if($user)
        {
            echo "<h1>Record Inserted</h1>";
        }
    }
    public function updatecity()
    {
        $city=DB::table('cities')
                ->where('id','17')
                ->update([
                    'name'=>'Rurkee',
                    'email'=>'rurkee@gmail.com'
                ]);
        if($city)
        {
            echo "<h1>Record Updated Successfully</h1>";
        }
        else
        {
            echo "<h1>Record not Updated Successfully</h1>";
        }
    }
}
