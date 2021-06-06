<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $Fillable = [
        'firstname',
        'lastname',
        'ral',
    ];
}
