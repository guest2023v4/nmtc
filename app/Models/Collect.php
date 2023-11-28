<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    use HasFactory;
    protected $table = 'collects';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'admin_id',
        'payagent_id',
        'date',
        'amount',
    ];

    // public function admin()
    // {
    //     return $this->belongsTo(User::class, 'admin_id');
    // }

    // public function payAgent()
    // {
    //     return $this->belongsTo(User::class, 'payagent_id')->withDefault();
    // }

}
