<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Company;
use App\Users;

use Illuminate\Http\Request;

class UserController extends Controller
{
    #LISTAR LOS USUARIOS#
    public function users($id)
    {       
        $company_users=DB::select('SELECT c.name AS nombre_company, u.id, u.name, u.lastname, u.email, u.space, u.role
        FROM companies AS c, users AS u
        WHERE c.id=u.company_id
        AND c.id = ? ORDER BY u.id',[$id]);
        $company_users = Users::orderBy('name','Asc')->where('company_id',$id)->paginate(5);
        return view('users.users',compact('company_users','id'));
    }
    #FORMULARIO PARA AGREGAR UN NUEVO USUARIO DONDE PERTENEZCA A LA EMPRESA#
    public function addUser($id)
    {
        return view('users.add_user',compact('id'));
    }
    #METODO POST PARA INSERTAR USUARIO A LA BD#
    public function addUserPost(Request $request)
    {
        $this->validate($request,[
            'name'      => 'max:15|alpha_dash|unique:users', 
            'lastname'  => 'max:15|alpha',
            'email'     => 'max:50|email|unique:users',
            'space'     => 'numeric',
            'password'  => 'min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|confirmed|max:30'
        ]);
                
        $user=new Users;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->space = $request->space;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->company_id = $request->company;
        $user->save();

        return redirect()->route('show.users',$user->company_id)->with('agregar',"The user has been added.");
    }
    #ELIMINAR USUARIO#
    public function deleteUser($id)
    {
        $user = Users::find($id)->delete();
        return Redirect::back()->with('eliminar',"The user has been deleted.");
    }
    #FORMULARIO PARA EDITAR EL USUARIO#
    public function editUser($id)
    {
        $user = Users::find($id);
        return view('users.edit_user',compact('user'));
    }
    #EDITAR LOS CAMPOS DEL USUARIO DE LA BD#
    public function updateUserPost(Request $request,$id)
    {
        $this->validate($request,[
            'name'      => 'max:15|alpha', 
            'lastname'  => 'max:15|alpha',
            'email'     => 'max:50|email',
            'space'     => 'numeric',
        ]);
                
        $user=Users::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->space = $request->space;
        $user->role = $request->role;
        $user->company_id = $request->company;
        $user->save();

        return redirect()->route('show.users',$user->company_id)->with('editar',"The user has been updated.");
    }
}
