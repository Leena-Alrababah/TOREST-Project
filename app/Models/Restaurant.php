<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Reservation;


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
        return $this->hasMany(Reservation::class, 'restaurant_id');
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






    //////////////////////////////////////////  Rating  //////////////////////////////////////////
    //  Rating for each restaurant:

    public function averageRating()
    {
        return $this->reviews->avg('rating');
    }

    // Fetch as stars
    public function getRatingStarsAttribute()
    {
        $rating = $this->averageRating();
        $stars = '';

        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                $stars .= '<i class="fas fa-star text-primary"></i>';
            } else {
                $stars .= '<i class="far fa-star text-primary"></i>';
            }
        }

        return $stars;
    }


    //////////////////////////////////////////  Opening Hours  //////////////////////////////////////////

    // retrieve the opening and closing hours
    public function getOpeningHourAttribute()
    {
        return $this->opening_hours_from;
    }

    public function getClosingHourAttribute()
    {
        return $this->opening_hours_to;
    }

    // to Check Open Status
    public function isOpenNow()
    {
        $now = now(); // Current time
        $openingHour = $this->opening_hour; // Retrieve from the model
        $closingHour = $this->closing_hour; // Retrieve from the model

        return $now >= $openingHour && $now <= $closingHour;
    }
}
