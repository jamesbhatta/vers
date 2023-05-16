<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function birth()
    {
        return $this->hasMany(Birth::class);
    }

    public function death()
    {
        return $this->hasMany(Death::class);
    }

    public function marriage()
    {
        return $this->hasMany(Marriage::class);
    }

    public function migrationCertificate()
    {
        return $this->hasMany(MigrationCertificate::class);
    }
}
