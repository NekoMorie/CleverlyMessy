<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\KategoriBlog;
use App\Models\Paket;
use App\Models\TagBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Home';

        $paketGratis = Paket::with('paketInfo')->where('nama_paket', 'GRATIS')->first();
        $paketBasic = Paket::with('paketInfo')->where('nama_paket', 'BASIC')->first();
        $paketSilver = Paket::with('paketInfo')->where('nama_paket', 'SILVER')->first();

        // \dd($user);
        return view('profile/home', compact('title', 'user', 'paketGratis', 'paketBasic', 'paketSilver'));
    }
    public function about()
    {
        $user = Auth::guard('admin')->user();

        $title = 'About Us';
        return view('profile/about', compact('title', 'user'));
    }
    public function contact()
    {
        $user = Auth::guard('admin')->user();

        $title = 'Contact Us';
        return view('profile/contact', compact('title', 'user'));
    }
    public function layanan()
    {
        $user = Auth::guard('admin')->user();

        $title = 'Our Services';
        return view('profile/layanan', compact('title', 'user'));
    }
    public function blog()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Blog';
        $blogs = DB::table('post')
            ->select('post.*', 'admin.nama as admin', 'kategori.nama as kategori')
            ->join('admin', 'post.id_admin', '=', 'admin.id_admin')
            ->join('kategori', 'post.id_kategori', '=', 'kategori.id')
            ->where('post.status', 'publish')
            ->orderBy('post.publish_at', 'DESC')
            ->get();
        return view('profile/blog', compact('title', 'user', 'blogs'));
    }
    public function blogDetail($slug)
    {
        $user = Auth::guard('admin')->user();
        $posts = Blog::orderBy('publish_at', 'ASC')->limit(4)->where('status', 'publish')->get();
        $blogs = DB::table('post')
            ->select('post.*', 'admin.nama as admin', 'kategori.nama as kategori')
            ->join('admin', 'post.id_admin', '=', 'admin.id_admin')
            ->join('kategori', 'post.id_kategori', '=', 'kategori.id')
            ->where('post.slug', $slug)
            ->first();
        // Previous Post (publish_at lebih kecil dari post saat ini)
        $previousPost = Blog::where('publish_at', '<', $blogs->publish_at)
            ->orderBy('publish_at', 'desc')
            ->first();

        // Next Post (publish_at lebih besar dari post saat ini)
        $nextPost = Blog::where('publish_at', '>', $blogs->publish_at)
            ->orderBy('publish_at', 'asc')
            ->first();
        $title = $blogs->title;
        $tag = BlogTags::where('post_id', $blogs->id)
            ->select('tags.*', 'post_tags.*')
            ->join('tags', 'tags.id', '=', 'post_tags.tag_id')
            ->get();
        $kategori = KategoriBlog::withCount('posts')->get();

        $banyakKat = KategoriBlog::where('nama')->count();
        // \dd($tag);
        return view('profile/blogDetail', compact('title', 'user', 'blogs', 'tag', 'posts', 'kategori', 'previousPost', 'nextPost'));
    }
    public function harga()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Harga';
        $paket = Paket::with('paketInfo')->orderBy('harga', 'ASC')->get();
        return view('profile/harga', \compact('title', 'user', 'paket'));
    }
    public function beli(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $title = 'Harga';
        $paket = Paket::with('paketInfo')->orderBy('harga', 'ASC')->get();
        return view('profile/beli', \compact('title', 'user', 'paket'));
    }
}
