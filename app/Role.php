<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    function user(){
       return $this->hasMany(User::class);
    }
}
