<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::with('user')->get();
    }

    public function store(Request $request)
    {
        return Blog::create($request->all());
    }

    public function show(Blog $blog)
    {
        return $blog;
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());

        return $blog;
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return $blog;
    }
}
