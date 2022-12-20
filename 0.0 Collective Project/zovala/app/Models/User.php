<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primarykey = "id";
    protected $fillable = ['surname','other_names','username','gender','phone','email','password','otp','role_id','town_id'];


    //Juma, customer
    public function role(){
        $this->belongsTo(Role::class);
    }
}
