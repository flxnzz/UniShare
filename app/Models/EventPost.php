<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPost extends Model
{
    
    use HasFactory;
    protected $table = 'event_post';
    protected $fillable = ['title', 'content', 'user_id'];
}
