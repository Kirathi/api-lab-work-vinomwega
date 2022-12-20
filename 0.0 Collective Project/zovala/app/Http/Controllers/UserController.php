<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserController extends Controller
{
    //showing all the user
     public function all(){
        echo"<h2>Within the All method</h2>";
        // call the user model
        $allUsers = User::all();
         
        dd($allUsers);
     }
    //showing one User
    public function one (){}

    //showing  the form to add a Users
    public function add(){}

    //process  new User data
    public function save(){}

    //show edit form
    public function edit(){}

    //process edits
    public function saveChanges(){}

    //destroy a User 
    public function delete(){}
}
