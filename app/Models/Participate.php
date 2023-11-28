<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Participate extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'activity_id', 'check_in', 'check_out', 'certification'
    ];
    public $incrementing = true;
    protected $table = 'participates';
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function activity()
    // {
    //     return $this->belongsTo(Activity::class);
    // }
}
