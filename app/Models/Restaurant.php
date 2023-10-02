<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'phone', 'cuisine_type', 'opening_hours', 'location', 'description', 'discount_percentage',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'restaurant_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'restaurant_id');
    }

    public function tables()
    {
        return $this->hasMany(Table::class, 'restaurant_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
