<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'city', 'station', 'hour', 'price', 'capacity',
        'attendance_nb', 'responsable1_id', 'responsable2_id'
    ];

    public function responsable1()
    {
        return $this->belongsTo(User::class, 'responsable1_id');
    }

    public function responsable2()
    {
        return $this->belongsTo(User::class, 'responsable2_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'bus_id', 'id');
    }
}
