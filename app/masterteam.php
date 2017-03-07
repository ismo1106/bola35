<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masterteam extends Model
{
    //
    protected $table='mst_team';

    public $timestamps = false; //buat created_at updated_at gak ada

    //protected $fillable = []
    
    protected $guarded = []; //blacklist
}
