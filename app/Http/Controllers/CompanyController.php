<?php

namespace App\Http\Controllers;
use Company;
use DB;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function Companies()
    {
        $companies=DB::select('SELECT * from companies');
        return view('company.companies',compact('companies'));
    }
}
