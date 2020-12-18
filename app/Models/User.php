<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'account_name',
        'contact_name',
        'contact_name',
        'ssn',
        'phone1',
        'date_of_birth',
        'yrsschool',
        'dependents',
        'pstreet',
        'pcity',
        'pcity',
        'pstate',
        'pzip',
        'mcity',
        'mcity',
        'mstate',
        'mzip',
        'fcity',
        'fcity',
        'fstate',
        'fzip',
        'maritalstatus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     public function loan_application()
    {
    	return $this->hasOne('App\Loan_application','user_id','id');
    }
}
