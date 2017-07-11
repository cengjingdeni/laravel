<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instalment extends Model
{
    //
    protected $table = 'sharp_instalment';

    protected $primaryKey = "instalment_id";

    public  $timestamps = false;

}
