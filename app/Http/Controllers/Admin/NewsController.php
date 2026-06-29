<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'title' => 'required|max:255',
    'content' => 'required',
    'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
]);
        $imagePath = null;

if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('news', 'public');
}

News::create([
    'title' => $request->title,
    'content' => $request->content,
    'image' => $imagePath,
]);

        return redirect('/admin/news')
            ->with('success', 'Haber başarıyla eklendi.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

   public function update(Request $request, News $news)
{
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $news->title = $request->title;
    $news->content = $request->content;

    if ($request->hasFile('image')) {

        // Eski resmi sil
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        // Yeni resmi yükle
        $news->image = $request->file('image')->store('news', 'public');
    }

    $news->save();

    return redirect('/admin/news')
        ->with('success', 'Haber güncellendi.');
}

    public function destroy(News $news)
    {
        $news->delete();

        return redirect('/admin/news')
            ->with('success', 'Haber silindi.');
    }
}