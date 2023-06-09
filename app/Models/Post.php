<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'post_id');
    }
}
