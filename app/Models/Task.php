<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'isi',
        'deadline',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(Task::class, 'users_id');
    }
}