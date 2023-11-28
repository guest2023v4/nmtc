<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JoinRoomRequest extends Pivot
{
    use HasFactory;
    protected $table = 'join_room_requests';
    protected $fillable = [
        'user_id',
        'room_id',
        'status',
    ];
    public $incrementing = true;
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function room()
    // {
    //     return $this->belongsTo(Room::class, 'room_id');
    // }
}
