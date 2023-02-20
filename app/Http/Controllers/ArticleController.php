<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function category()
    {
        return view('pages.article.category');
    }

    public function single()
    {
        return view('pages.article.single');
    }
}
