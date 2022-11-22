<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gearbox',
        'immat',
        'color',
        'door_number',
        'kilometers',
        'nb_places',
        'clim',
        'oil',
        'categories',
        'image',
        'rate',
    ];
}
