<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{

    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function items()
    {
        return $this->belongsToMany(
            Item::class, 'user_items', 'user_id', 'item_id')->withPivot('amount');
    }

}
