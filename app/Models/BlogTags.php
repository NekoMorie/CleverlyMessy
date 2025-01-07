<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
    use HasFactory;
    protected $table = 'post_tags';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'id_post', 'id');
    }
    public function tag()
    {
        return $this->belongsTo(TagBlog::class, 'id_tag', 'id');
    }
}
