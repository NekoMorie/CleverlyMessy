<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    use HasFactory;

    protected $table = 'institusi';

    protected $primaryKey = 'id_perusahaan';

    public $timestamps = true;

    protected $fillable = [
        'logo',
        'nama_perusahaan',
        'alamat_perusahaan',
        'no_telp_perusahaan',
        'jenis',
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class, 'id_perusahaan', 'id_perusahaan');
    }
}
