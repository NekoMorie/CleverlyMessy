<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagBlog extends Model
{
    use HasFactory;
    protected $table = 'tags';

    public $timestamps = true;

    protected $primaryKey = 'id';


    protected $fillable = [
        'nama',
    ];
}
