<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use SoftDeletes,HasFactory;

    protected $fillable = [
        'id',
        'name',
        'state_id'
    ];

    protected $hidden = ['state_id','created_at', 'updated_at','deleted_at'];

    /**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }
}
