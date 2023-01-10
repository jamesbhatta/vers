<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigrationCertificate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
