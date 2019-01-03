<?php

namespace App;

use App\Models\TelegramChannel;
use App\Models\TwitterAccount;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function telegramChannels(){
        return $this->hasMany(TelegramChannel::class);
    }

    public function twitterAccounts(){
        return $this->hasMany(TwitterAccount::class);
    }
}
