<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pack extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'for_participants',
        'room_type',
        'hotel_badge',
        'with_bus',
        'amount',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'pack_id', 'id');
    }
}
