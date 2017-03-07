<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    //
    protected $table='kuis';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []
    
    protected $guarded = []; //blacklist
}
