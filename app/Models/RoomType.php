<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class RoomType extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'rooms_nb',
    ];
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'room_type_id', 'id');
    }
}
