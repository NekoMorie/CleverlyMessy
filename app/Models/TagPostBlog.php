<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagPostBlog extends Model
{
    use HasFactory;
    protected $table = 'tags';

    public $timestamps = true;

    protected $primaryKey = 'id';


    protected $fillable = [
        'nama',
    ];
}
