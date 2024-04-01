<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'show_id',
        'review',
        'stars',
        'validated',
        
    ];
    protected $table ='reviews';
    public $timestamps = true;
}
