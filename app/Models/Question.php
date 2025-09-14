<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function section()
    {
        return $this->belongsTo(Section::class);

    }
}
