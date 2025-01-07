<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    use HasFactory;
    protected $table = 'kategori';

    public $timestamps = true;

    protected $primaryKey = 'id';


    protected $fillable = [
        'nama',
    ];

    public function posts()
    {
        return $this->hasMany(Blog::class, 'id_kategori');
    }
}
