<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => null,
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
        ]);

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

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