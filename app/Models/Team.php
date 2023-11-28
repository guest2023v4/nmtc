<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'logo',
        'capacity',
        'is_all_paid',
        'code',
        'team_leader_id',
    ];

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'team_id', 'id');
    }


   public function joinTeamRequests(): BelongsToMany
   {
       return $this->belongsToMany(User::class, 'join_team_requests', 'team_id', 'user_id')->using(JoinTeamRequest::class);
   }


}
