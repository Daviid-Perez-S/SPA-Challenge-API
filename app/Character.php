<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'species', 'type', 'gender', 'origin', 'location', 'image', 'episode'
    ];
}
