<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

protected $table = "students";
    protected $fillable = ['name', 'email', 'password', 'cv', 'created_at', 'updated_at'];


}
