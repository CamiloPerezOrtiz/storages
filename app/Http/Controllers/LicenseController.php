<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\License;

class LicenseController extends Controller
{
    #MOSTRAR TODAS LAS LICENCIAS#
    public function licenses()
    {
        $licenses=DB::select("SELECT companies.id, licenses.id as license_id,companies.name,licenses.serial,  
                                    licenses.type, licenses.time, licenses.status, licenses.end_date,licenses.total_space,
                                    licenses.total_license, licenses.free_space, licenses.free_license
                            FROM licenses
                            INNER JOIN companies USING (id);");
        return view('license.licenses',compact('licenses'));
    }
    #ELIMINAR UNA LICENCIA#
    public function deleteLicense($id)
    {
        $license = License::find($id)->delete();
        return Redirect::back()->with('eliminar',"The license has been deleted");
    }
    #EDITAR CAMPOS DE LA LICENCIA EN LA BD#
    public function editLicense($id)
    {
        $license = License::find($id);
        return view('license.edit_license',compact('license'));
    }
}
