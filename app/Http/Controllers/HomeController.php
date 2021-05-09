<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Company;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nUser = User::count();
        $nCompany = Company::count();
        return view('home',compact('nUser','nCompany'));
        //return view('layouts.template');
    }
    public function login(){
        return view('login');
    }
    
    public function logged(Request $request){
        
        $verify = User::all()->where('email',$request->email)->first();
        if($verify != null){
            if($verify->password == $request->password){
                $federations = Federation::orderby('name')->get();
                return view('register_company',compact('federations'));
            }
            else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/login');
        }
    }


    public function search(){
        $federations = Federation::orderBy('name')->get();
        return view('search', compact('federations',));
    }
    

    public function searchCompanies($federation_id){
        $companies = Company::orderBy('name')->where('federation_id',$federation_id)->get();
        return view('search_company',compact('companies'));
    }
   
}
