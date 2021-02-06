<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoutuberModel extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table='youtubers';
    public $timestamps = false;
    protected $fillable = [
        'name', 'id'
    ];
}
