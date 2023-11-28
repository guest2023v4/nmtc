<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cin',
        'phone',
        'role',
        'password',
        'reg_step',
        'birthday',
        'city',
        'gender',
        'level_of_study',
        'university',
        'cin_front',
        'cin_back',
        'picture',
        'bank_transfer',
        'pay_status_pack',
        'pay_status_bus',
        'pay_amount_total',
        'pack_valid',
        'madhmoun',
        'github',
        'linkedin',
        'cv',
        'transport',
    ];

    public function pack(): BelongsTo
    {
        return $this->belongsTo(Pack::class);
    }
    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class)->using(Participate::class);
    }
    public function joinRoomRequests(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'join_room_requests', 'user_id', 'room_id')->withPivot('status')->using(JoinRoomRequest::class);
    }
    public function joinTeamRequests(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'join_team_requests', 'user_id', 'team_id')->withPivot('status')->using(JoinTeamRequest::class);
    }
    public function adminCollects()
    {
       return $this->belongsToMany(User::class, 'collects', 'admin_id', 'payagent_id')->using(Collect::class);
    }

    public function payagentCollects()
    {
        return $this->belongsToMany(User::class, 'collects', 'payagent_id', 'admin_id')->using(Collect::class);
    }
    public function getPictureAttribute($value){
        if($value){
            return asset('users/images/'.$value);
        }else{
            return asset('users/images/no-image.jpg');
        }
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
}
