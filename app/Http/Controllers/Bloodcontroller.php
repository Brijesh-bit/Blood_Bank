<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\blood;
use App\hospital;
use Barryvdh\Debugbar\Facade;
use DB;
use Importer;
use Session;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Crypt; 


class Bloodcontroller extends Controller
{
    function addData(Request $req)
    {
        $user=new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->contact=$req->contact;
        $user->organization=$req->organization;
        $user->password=$req->password;
        $user->save();
        return redirect("login");  
    }
    function addData1(Request $req)
    {
        $hospital=new hospital;
        $hospital->hospital_name=$req->hospital_name;
        $hospital->email=$req->email;
        $hospital->address=$req->address;
        $hospital->pincode=$req->pincode;
        $hospital->contact=$req->contact;
        $hospital->organization=$req->organization;
        $hospital->password=$req->password;
        $hospital->save();
        return redirect("login_hospital");  
    }

    function addblood(Request $req)
    {
        $blood=new blood;
        $blood->hospital=$req->hospital;
        $blood->blood_group=$req->blood_group;
        $blood->unit=$req->unit;
        $blood->save();
        return redirect("mainPage");
    }

    function loggedIn(Request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $type=$req->input('type');
        $loginsuccess = 0;
        if($email !=null && $password != null && $type !=null){
            $data=DB::table('users')->where('email', $email)->first();
            if($data!=null){
                $pwd=$data->password;
                $mail=$data->email;
                $type1=$data->organization;
                if($pwd==$password && $mail==$email && $type==$type1){
                        return redirect("receiver");
                }else{
                     echo '<script> innerHTML("Please Enter Valid Credentials."); 
                    </script>';
                    return redirect('login'); 
                }
            }
        }else{
            echo '<script> alert("Please Enter Valid Credentials."); 
            </script>'; 
            return redirect('login')->with('Please Enter Valid Credentials.');
        }
        if($loginsuccess == 1){
            session(['type' => $type]);
            // return response()->json(['success'=>true,'userrole'=>$userrole,'detailsfilled'=>$detailsfilled]);
        }
    }

    function logged(Request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $type=$req->input('hospital_name');
        $loginsuccess = 0;
        if($email !=null && $password != null && $type !=null){
            $data=DB::table('hospitals')->where('email', $email)->first();
            if($data!=null){
                $pwd=$data->password;
                $mail=$data->email;
                $type1=$data->hospital_name;
                if($pwd==$password && $mail==$email && $type==$type1){
                        session(['hospital_name' => $type1]);
                        return redirect("mainPage");
                    }
                    else{
                        echo '<script> innerHTML("Please Enter Valid Credentials."); 
                        </script>';
                        return redirect('login_hospital'); 
                    }
                }
            }
        
        else{
            echo '<script> alert("Please Enter Valid Credentials."); 
            </script>'; 
            return redirect('login')->with('Please Enter Valid Credentials.');
        }
    }


    function list()
    {
        $viewdata=DB::table('bloods')->get();
        return view('welcome')->with(compact('viewdata'));
    }
    function listview()
    {
        $hospital_name=Session::get('hospital_name');
        $viewdata1=DB::table('bloods')->where('hospital',$hospital_name)->get();
        $hospitaldata=DB::table('hospitals')->where('hospital_name',$hospital_name)->first();
        // return view('mainPage')->with(compact('viewdata1'))->with(compact('hospitaldata'));
        return view('mainPage',compact('viewdata1','hospitaldata'));
    }
    function listview1()
    {
        $hospital=Session::get('type');
        $viewdata2=DB::table('bloods')->get();
        return view('receiver')->with(compact('viewdata2'));
    }
    function view($id)
    {
        $data=DB::table('bloods')->where('id',$id)->get();
        return view('viewdetails',compact('data'));
    }
}
