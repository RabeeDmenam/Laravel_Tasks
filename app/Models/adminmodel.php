<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminmodel extends Model
{
    use HasFactory;

protected $table ="users";
protected $fillable = ['name','email','password'	,'address',	'url','created_at','updated_at'];


}
