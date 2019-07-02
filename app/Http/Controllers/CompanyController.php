<?php

namespace App\Http\Controllers;
use App\Company;
use DB;
use Redirect;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    #LISTAR TODAS LAS EMPRESAS#
    public function Companies()
    {
        $companies=DB::select('SELECT * from companies order by name asc');
        return view('company.companies',compact('companies'));
    }
    #FORMULARIO PARA EDITAR LA EMPRESA#
    public function editCompany($id)
    {
        $company = Company::find($id);
        return view('company.edit_company',compact('company'));
    }
    #ACTUALIZAR CAMPOS DE LA EMPRESA A LA BD3
    public function updateCompanyPost(Request $request,$id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->rfc = $request->rfc;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('show.companies')->with('editar',"La información de la empresa se ha actualizado.");
    }
    #ELIMINAR UNA EMPRESA#
    public function deleteCompany($id)
    {
        $company = Company::find($id)->delete();
        return redirect()->route('show.companies')->with('eliminar',"La empresa se ha eliminado.");
    }
    
}
