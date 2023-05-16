<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Rules\NepaliDate;
use Nette\Utils\DateTime;

class Death extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function age($dob)
    // {
    //     $today = new DateTime(date('Y-m-d'));
    //     $new_dob = new DateTime(bs_to_ad($dob));
    //     $diff = $today->diff($new_dob);
    //     return $diff->y;
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
