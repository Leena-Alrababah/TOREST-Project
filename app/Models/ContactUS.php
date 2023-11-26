<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class ContactUS extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'subject', 'message',
    ];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "leenaalrababah@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
