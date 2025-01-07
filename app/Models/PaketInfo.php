<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketInfo extends Model
{
    use HasFactory;
    protected $table = 'paket_info';

    public $timestamps = false;


    protected $fillable = [
        'paket_aktif',
        'list_paket',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id');
    }
}
