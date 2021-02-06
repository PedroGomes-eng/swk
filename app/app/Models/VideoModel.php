<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'videos';
    public $timestamps = false;
    protected $fillable = [
        'title', 'id' , 'id_youtuber' , 'url' , 'description'
    ];
}
