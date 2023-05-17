<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageWithness extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function marriage()
    {
        return $this->belongsTo(Marriage::class);
    }
}
