<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Cashier\Billable;
use App\Events\NewUserRegistredEvent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable , SoftDeletes , Billable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'img_uri',
        'active',
        'email_verified_at',
        'remember_token',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isOnline(){

            return Cache::has('user-online'.$this->id);
        }

    public function lastSeen(){

    // 'locale' => 'fr_FR',
    // 'timezone' => 'Europe/Paris',

    // 'locale' => 'en_US',
    // 'timezone' => 'America/Chicago',

    // 'locale' => 'ar_AR',
    // 'timezone' => 'Africa/Tunis',

        Carbon::now()->settings([
            'locale' => 'en_US',
            'timezone' => 'America/Chicago',
        ]);

        $date = Cache::get('last-seen'.$this->id);

        return Carbon::parse($date)->diffForHumans();
    }

   // relation
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    //local scope
    public function scopeUserStatus($query, $value){

        return $query->where('active', $value);

    }

    //User::userStatus('1')->get()
    //User::userStatus('0')->first()
    //local scope
    //we can use it for product bestseller or complex query

}




