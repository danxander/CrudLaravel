<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table ='cliente';

    protected $fillable =['id', 'pNombre', 'sNombre', 'pApellido', 'sApellido', 'email', 'cel', 'dir'];
}
