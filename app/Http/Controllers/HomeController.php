<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Company;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nFederation = Federation::count();
        $nCompany = Company::count();
        return view('home',compact('nFederation','nCompany'));
        //return view('layouts.template');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $federations = Federation::orderby('name')->get();
        return view("register_company",compact('federations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'federation_id' => 'required',
            'email' => ['required', 'unique:companies'],
        ]);

        $verify = Company::all()->where('name',$request->name)->first();
        if ($verify === null) {
            $company = new Company;
            $company->name = $request->name;
            $company->federation_id = $request->federation_id;
            $company->email = $request->email;
            $company->save();
            return redirect('/');
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function search(){
        $federations = Federation::orderBy('name')->get();
        return view('search', compact('federations',));
    }
    
    public function searchCompanies($federation_id){
        $companies = Company::orderBy('name')->where('federation_id',$federation_id)->get();
        return view('search_company',compact('companies'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
