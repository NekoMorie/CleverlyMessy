<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Classnames;
use App\Models\Waktu;
use App\Models\Location;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $appends = ['image'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'image',
        'gender',
        'telp',
        'alamat',
        'fcm_token',
        'last_login',
    ];
    public function classname()
    {
        return $this->belongsTo(Classnames::class, 'classnames_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktus_id');
    }
    public function lokasi()
    {
        return $this->belongsTo(Location::class, 'locations_id');
    }

    /**
     * Accessor for 'image' attribute.
     */
    // public function getImageAttribute()
    // {
    //     $imagePath = $this->attributes['image'];

    //     // \Log::info('Image Path:', ['image' => $imagePath]);

    //     $defaultFoto = 'storage/pp/foto_default.jpg';

    //     if (!$imagePath || !file_exists(public_path($imagePath))) {
    //         return asset($defaultFoto);
    //     }

    //     return asset($imagePath);
    // }



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
    ];
}
