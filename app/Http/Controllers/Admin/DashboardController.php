<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;

class DashboardController extends Controller
{
   public function index()
{
    return view('admin.dashboard', [
        'news' => News::count(),
        'users' => User::count(),

        'lastNews' => News::latest()->first(),
        'lastUser' => User::latest()->first(),
    ]);
}
}