<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;


class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'restaurant_id', 'reservation_date', 'reservation_time', 'table_id', 'reservation_status', 'name', 'email', 'phone',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }


    public function payment()
    {
        return $this->hasOne(Payment::class, 'reservation_id');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

}
