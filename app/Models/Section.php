<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    public function section(): HasOne
    {
        return $this->hasOne(Contact::class)->hasOne(Home::class)->hasOne(Gallery::class)->hasOne(About::class);
    }
}
