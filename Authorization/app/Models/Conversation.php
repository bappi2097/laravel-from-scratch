<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }
    public function replies()
    {
        return $this->hasMany(App\Models\Reply::class);
    }
}
