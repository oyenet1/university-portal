<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['state_id', 'state'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // profile of a user
    function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    static function scopeSearch($query, $term)
    {
        $query->where('firstname', 'like', "%{$term}%")
            ->orWhere('surname', 'like', "%{$term}%")
            ->orWhere('email', 'like', "%{$term}%");
            // $query->where('current_role', 'admin');
    }
}