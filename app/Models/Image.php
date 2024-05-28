<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Don't forget to import the User model

class Image extends Model
{
    protected $fillable = ['name', 'path', 'description', 'user_id', 'location']; 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
    
}
