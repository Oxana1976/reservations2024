<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function represenations(): BelongsToMany
    {
        return $this->belongsToMany(Representation::class);
    }
}
