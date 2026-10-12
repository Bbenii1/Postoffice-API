<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class County extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'population',
        'logo_url',
    ];

    protected $casts = [
        'population' => 'integer',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'county_id', 'id');
    }
}
