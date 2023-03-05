<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Helper\Helper;
use App\Models\NewsTypes;
use App\Models\VidTypes;
use App\Models\News;
use App\Models\Vid;

class ArticleController extends Controller
{
    public function category($cat, Request $request)
    {

        if($cat=="hot")
        {
            $category = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
            ->where('is_publish','1')
            // ->where('news_id','1259')
            ->where('publish_on','<=',date("Y-m-d H:i:s"))
            ->orderBy('publish_on','DESC')
            ->limit('19')
            ->get();
        }
        else{
            $getCat = NewsTypes::where('slug',$cat)->first();

            $category = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
            ->where('is_publish','1')
            // ->where('news_id','1259')
            ->where('publish_on','<=',date("Y-m-d H:i:s"))
            
            ->where('news_type','=',$getCat->news_type_id??"")
            ->orderBy('publish_on','DESC')
            ->limit('19')
            ->get();
        }

        if($category->isEmpty()) 
        {
            $category = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
            ->where('is_publish','1')
            // ->where('news_id','1259')
            ->where('publish_on','<=',date("Y-m-d H:i:s"))
            ->orderBy('publish_on','DESC')
            ->limit('19')
            ->get();
        }

        return view('pages.article.category', compact(
            'category',
            'cat',
        ));
    }

    public function single()
    {
        return view('pages.article.single');
    }

    public function detail($cat,$slug)
    {
        $getCat = NewsTypes::where('slug',$cat)->first();
        $fs = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        
        ->where('news_type','=',$getCat->news_type_id??"")
        ->where('slug','=',$slug)
        ->orderBy('publish_on','DESC')->first();

        $terbaru = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_id','!=',$fs->news_id??0)
        ->orderBy('publish_on','DESC')
        ->limit('3')
        ->get();

        $terkait = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=',$getCat->news_type_id??"")
        ->orderBy('publish_on','DESC')
        ->limit('9')
        ->get();
        
        return view('pages.article.single', compact(
            'fs',
            'cat',
            'terbaru',
            'terkait',
        ));
    }
}
