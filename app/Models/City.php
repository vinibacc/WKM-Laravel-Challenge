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
        'name'
    ];

    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    /**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
