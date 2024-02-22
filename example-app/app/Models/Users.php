<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $guarded = [];
    protected $tables = "projects";
    protected $fillable = ['name','project','date','process','status'];
    public $timestap = false;
}