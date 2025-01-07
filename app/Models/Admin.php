<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';

    protected $primaryKey = 'id_admin';

    public $timestamps = true;

    protected $fillable = [
        'google_id',
        'id_perusahaan',
        'nama',
        'email',
        'password',
        'foto',
        'role',
        'phone_number',
        'google_photo',
        'no_telp',
        'status',
        'last_login',
    ];

    public function institusi()
    {
        return $this->belongsTo(Institusi::class, 'id_perusahaan', 'id_perusahaan');
    }
}
