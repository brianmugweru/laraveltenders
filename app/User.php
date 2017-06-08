<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'firstname','lastname','phonenumber','email','password','companyname','address','city','province','country','activationCode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $login_validation_rules = [
      'email' => 'required|exists:users',
      'password' => 'required'
    ];

    public function tender()
    {
        return $this->belongsToMany('App\Tender')->using('App\Bid');
    }

}
