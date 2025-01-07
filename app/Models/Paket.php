<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nama_pake',
        'harga',
        'durasi',
        'status',
        'jenis',
        'created_at',
        'updated_at',
    ];

    public function paketInfo()
    {
        return $this->hasMany(PaketInfo::class, 'id_paket', 'id');
    }
}
