<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'post';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'image',
        'publish_at',
    ];

    public function admins()
    {
        return $this->hasMany(Admin::class, 'id_admin', 'id_admin');
    }
    public function kategori()
    {
        return $this->belongsTo(KategoriBlog::class, 'id_kategori', 'id');
    }
    public function tags()
    {
        return $this->belongsToMany(BlogTags::class, 'id', 'post_id', 'tag_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Blog::class, 'id', 'tag_id', 'post_id');
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'id', 'id_tag', 'id_blog');
    }
}
