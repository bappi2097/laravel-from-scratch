<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function conversation()
    {
        return $this->belongsTo(App\Models\Conversation::class);
    }
}
