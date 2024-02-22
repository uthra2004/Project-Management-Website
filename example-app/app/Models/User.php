<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //mass assigment
    // protected $fillable = ['name']

    // not for mass assignment
    protected $guarded = [];
    protected $tables = "project.users";
    protected $fillable = ["name","project","date","process","status"];
    public $timestap = false;
}