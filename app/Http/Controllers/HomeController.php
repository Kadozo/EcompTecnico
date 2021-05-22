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
        return view('home');
    }
    public function login(){
        return view('login');
    }
    
    public function logged(Request $request){
        return view('register_company');
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
