<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $fillable = ['paciente', 'exame_id', 'tipo', 'data_coleta', 'laudo'];

}
