<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function music(){
        return $this->hasMany(Music::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
