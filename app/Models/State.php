<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'id',
        'name',
        'abbreviation'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the cities for the state.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
