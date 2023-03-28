<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'body',
        'image'
    ];

    public function Section(){
        return $this->belongsTo(Section::class);
    }
}
