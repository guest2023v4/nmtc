<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'num',
        'gender',
        'note',
        'capacity',
        'code',
        'type',
        'is_all_paid',
        'real_num',
        'have_key',
        'room_type_id',
        'room_leader_id',
        'user_have_key_id',
    ];

    // public function roomType()
    // {
    //     return $this->belongsTo(RoomType::class, 'room_type_id')->withDefault();
    // }

    public function roomLeader()
    {
        return $this->belongsTo(User::class, 'room_leader_id');
    }

    public function userHasKey()
    {
        return $this->belongsTo(User::class, 'user_have_key_id')->withDefault();
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'room_id', 'id');
    }
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function joinRoomRequests(): BelongsToMany
   {
       return $this->belongsToMany(User::class, 'join_room_requests', 'room_id', 'user_id')->using(JoinRoomRequest::class);
   }

}
