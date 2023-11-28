<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JoinTeamRequest extends Pivot
{
    use HasFactory;
    protected $table = 'join_team_requests';
    protected $fillable = [
        'user_id',
        'team_id',
        'status',
    ];
    public $incrementing = true;

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function team()
    // {
    //     return $this->belongsTo(Team::class, 'team_id');
    // }
}
