<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masterliga extends Model
{
    //
    protected $table='mst_liga';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []
    
    protected $guarded = []; //blacklist
}
