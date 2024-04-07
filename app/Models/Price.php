<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Price extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'type',
        'price',
        'start_daate',
        'end_date',
    ];
    protected $table = 'prices';
    public $timestamps = false;

    public function reservation_representations(): HasMany
    {
        return $this->hasMany(ReservationRepresentation::class);
    }
}
