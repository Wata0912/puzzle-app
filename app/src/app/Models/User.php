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


    //保護
    protected $guarded = [
        'id',
    ];

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function items()
    {
        return $this->belongsToMany(
            Item::class, 'get_item_logs', 'user_id', 'item_id');
    }

}
