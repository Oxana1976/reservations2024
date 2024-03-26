<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Show extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'poster_url',
        'location_id',
        'bookable',
        'price',
    ];
    protected $table ='shows';
    public $timestamps = true;

    public function location(): BelongsTo 
    {
        return $this->belongsTo(Location::class);
    }

    public function artistTypes(): BelongsToMany
    {
        return $this->belongsToMany(ArtistType::class);
    }
    
    public function representations(): HasMany
    {
        return $this->hasMany(Representation::class);
    }
}
