<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Imagenes extends Model
{
    protected $table="imagen";
    protected $fillable=['titulo','nombre'];
}