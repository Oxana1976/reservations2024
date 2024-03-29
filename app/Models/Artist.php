<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
    ];

    protected $table = 'artists';
    public $timestamps = false;

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function artistTypes(): HasMany
    {
        return $this->hasMany(ArtistType::class);
    }
}
