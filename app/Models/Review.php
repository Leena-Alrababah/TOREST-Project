<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Restaurant;


class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'restaurant_id', 'review_text', 'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }




    ////////////////////////////////// Rating as Stars ////////////////////////////////////
    public function getRatingStarsAttribute()
    {
        $rating = $this->rating;
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

}
