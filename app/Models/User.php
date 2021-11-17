<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Searchable;

    public function __construct()
    {
        parent::boot();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

}
/*
 * Searchable Elastik Search kullanımı için eklenmiş Trait'dir.
 * use Laravel\Scout\Searchable; şeklinde dahil edilir.
 * toSearchableArray() 'metodu da Scout 'a ait metoddur. aranabilir arraylari tanımlar.
 *
 *
 * */
