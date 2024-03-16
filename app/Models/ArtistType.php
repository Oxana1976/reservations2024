<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArtistType extends Model
{
    use HasFactory;
    protected $fillable =['artist_id','type_id'];
    protected $table ='artist_type';
    public $timestamps = false;

    public function artist(): BelongsTo 
    {
        return $this->belongsTo(Artist::class);
    }

    public function type(): BelongsTo 
    {
        return $this->belongsTo(Type::class);
    }
}
