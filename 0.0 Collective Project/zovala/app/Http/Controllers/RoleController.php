<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
    //showing all the roles
    public function all(){
       // call the Role model
       $allRoles = Role::all();
        
       //dd($allRoles);
       //pass this data to the view file
       return view('role.all',['roles' => $allRoles]);
    }

    //showing one roles
    public function one (){}

    //showing  the form to add a roles
    public function add(){
        echo 'add method';
    }

    //process  new role data
    public function save(){}

    //show edit form
    public function edit(){
        echo 'edit method';
    } 

    //process edits
    public function saveChanges(){}

    //destroy a role
    public function delete(){}
}
