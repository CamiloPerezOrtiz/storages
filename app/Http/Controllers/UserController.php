<?php

namespace App\Http\Controllers;
use DB;
use App\Company;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users($id)
    {
        $id_company=Company::find($id);
        
        $company_users=DB::select('SELECT c.name AS nombre_company, c.id as id_company,u.id, u.name, u.lastname, u.email, u.space, u.role
        FROM companies AS c, users AS u
        WHERE c.id=u.company_id
        AND c.id = ? ORDER BY u.id',[$id]);
        return view('users.users',compact('company_users','id_company'));
    }
    public function addUser($id)
    {
        return view('users.add_user');
    }
}
