<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image1', 'image2', 'image3', 'image4', 'opening_hours_from', 'opening_hours_to', 'address', 'location', 'description', 'discount_percentage', 'dishes_type'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'restaurant_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'restaurant_id');
    }

    public function menu()
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



    //////////////////////////////////////////  Count Reviews  //////////////////////////////////////////

    public function reviewsCount()
    {
        return $this->reviews()->count();
    }

    public function getReviewsCountAttribute()
    {
        return $this->reviewsCount();
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
        // $currentDateTime = Carbon::now();
        // echo $currentDateTime;
        $now = now(); // Current time
        $openingHour = $this->opening_hour; // Retrieve from the model
        $closingHour = $this->closing_hour; // Retrieve from the model

        return $now >= $openingHour && $now <= $closingHour;
    }
}
