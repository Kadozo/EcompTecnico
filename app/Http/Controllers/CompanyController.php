<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Company;

class CompanyController extends Controller
{
 
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
        ]);

        $verify = Company::all()->where('name',$request->name)->first();
        
        if ($verify === null) {
            $company = new Company;
            $company->name = $request->name;
            $company->federation_id = $request->federation_id;
            $company->save();
            return redirect('/');
        }
    }
}
