<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       if(Auth::id()){
        $userType = Auth()->user()->userType;
        if($userType == 'employe'){
             return view('dashboard');
        }else if($userType == 'responsable'){
            return view('responsable.responsableHome');
        }else{
            return redirect()->back();
        }
       }
    }

    public function post(){
        return view('post');
    }
}
