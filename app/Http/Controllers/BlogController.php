<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\KategoriBlog;
use App\Models\TagBlog;
use Illuminate\Cache\TagSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Blog';
        $blog = DB::table('post')
            ->join('kategori', 'post.id_kategori', '=', 'kategori.id')
            ->select('post.*', 'kategori.nama as kategori')
            ->get();
        return view('admin/blog/index', compact('title', 'user', 'blog'));
    }

    public function create(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $title = 'Tambah Blog';
        $kategori = KategoriBlog::get();
        $tag = TagBlog::get();

        return view('admin/blog/add', compact('title', 'user', 'kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:post',
            'kontent' => 'required|string',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'files' => 'nullable|file|max:10240',
            'publish_at' => 'required|date',
            'kategori' => 'required',
            'tag' => 'required|array', // Banyak tags
            'tag.*' => 'required|integer|exists:tags,id',
        ]);

        $user = Auth::guard('admin')->user();
        // \dd($request->tag);
        $tags = $request->input('tag');

        // Cek isi array tag
        Log::info('Tags:', $tags);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Blog', 'public');
        } else {
            $imagePath = 'Blog/defaultBlog.jpg';
        }

        $blog = new Blog();
        $blog->id_admin = $user->id_admin;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->content = $request->kontent;
        $blog->status = $request->status;
        $blog->image = $imagePath;
        $blog->publish_at = $request->publish_at;
        $blog->id_kategori = $request->kategori;
        $blog->save();

        foreach ($tags as $tag) {
            BlogTags::create([
                'post_id' => $blog->id,
                'tag_id' => $tag,
            ]);
        }

        return redirect()->route('blog')->with('success', 'Blog berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $user = Auth::guard('admin')->user();
        $title = 'Edit Blog';
        $blog = Blog::findOrFail($id);
        $kategori = KategoriBlog::all();
        $tag = TagBlog::all();
        $selectedTags = BlogTags::where('post_id', $id)->pluck('tag_id')->toArray();

        return view('admin/blog/edit', compact('title', 'user', 'blog', 'kategori', 'tag', 'selectedTags'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:post,slug,' . $id,
            'kontent' => 'required|string',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'files' => 'nullable|file|max:10240',
            'publish_at' => 'required|date',
            'kategori' => 'required',
            'tag' => 'required|array', // Banyak tags
            'tag.*' => 'required|integer|exists:tags,id',
        ]);

        $user = Auth::guard('admin')->user();
        $tags = $request->input('tag');

        $blog = Blog::findOrFail($id);
        $blog->id_admin = $user->id_admin;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->content = $request->kontent;
        $blog->status = $request->status;
        $blog->publish_at = $request->publish_at;
        $blog->id_kategori = $request->kategori;

        if ($request->hasFile('image')) {
            if ($blog->image !== 'Blog/defaultBlog.jpg') {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('Blog', 'public');
        }

        $blog->save();

        BlogTags::where('post_id', $id)->delete();

        foreach ($tags as $tag) {
            BlogTags::create([
                'post_id' => $blog->id,
                'tag_id' => $tag,
            ]);
        }

        return redirect()->route('blog')->with('success', 'Blog berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = Blog::findOrFail($id);
        if ($find->image != 'Blog/defaultBlog.jpg') {
            Storage::disk('public')->delete($find->image);
        }
        Blog::destroy($id);
        return redirect()->route('blog')->with('success', 'Blog berhasil dihapus.');
    }

    public function kategoriTag()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Kategori Tag';
        $kategori = KategoriBlog::get();
        $tag = TagBlog::get();

        return view('admin/blog/kategori_tags', compact('title', 'user', 'kategori', 'tag'));
    }
    public function kategoriStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $kategori = new KategoriBlog();
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }
    public function kategoriUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $kategori = KategoriBlog::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->back()->with('success', 'Kategori berhasil diubah.');
    }
    public function kategoriDelete($id)
    {
        $kategori = KategoriBlog::findOrFail($id);
        $kategori->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');
    }
    public function tagStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $tag = new TagBlog();
        $tag->nama = $request->nama;
        $tag->save();

        return redirect()->back()->with('success', 'Tag berhasil ditambahkan.');
    }
    public function tagUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $tag = TagBlog::findOrFail($id);
        $tag->nama = $request->nama;
        $tag->save();

        return redirect()->back()->with('success', 'Tag berhasil diubah.');
    }
    public function tagDelete($id)
    {
        $tag = TagBlog::findOrFail($id);
        $tag->delete();

        return redirect()->back()->with('success', 'Tag berhasil dihapus.');
    }
}
