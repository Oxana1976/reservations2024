<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReservationRepresentation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'representation_id',
        'price_id',
        'quantity',
    ];

    protected $table = 'reservation_representation';
    public $timestamps = false;
    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);

    }
    public function representation(): BelongsTo
    {
        return $this->belongsTo(Representation::class);
        
    }
    public function price(): BelongsTo 
    {
        return $this->belongsTo(Price::class, 'price_id');
    }
    
}
