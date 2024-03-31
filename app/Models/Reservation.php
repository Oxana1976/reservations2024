<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'booking_date',
        'status'
    ];

    protected $table = 'reservations';
    public $timestamps = false;

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
