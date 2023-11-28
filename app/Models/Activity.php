<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'date', 'responsable_name', 'room', 'start_time',
        'end_time', 'training_level', 'dedicated', 'type', 'capacity',
        'attendance_nb', 'organizer_id'
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(Participate::class);
    }
}
