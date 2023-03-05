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

class HomepageController extends Controller
{
    public function index()
    {
        $i=0;
        // $hotNews = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        // ->where('is_publish','1')
        // // ->where('news_id','1259')
        // ->where('publish_on','<=',date("Y-m-d H:i:s"))
        // ->orderBy('publish_on','DESC')
        // ->limit('5')
        // ->get();

        $hotNews = DB::select('SELECT n.*,b.news_type as kategori FROM news n INNER JOIN ( SELECT news_type, MAX(publish_on) AS max_publish_on FROM news WHERE is_publish = 1 GROUP BY news_type ) AS latest_news ON n.news_type = latest_news.news_type AND n.publish_on = latest_news.max_publish_on INNER JOIN news_types b on b.news_type_id=n.news_type ORDER BY n.news_type ASC, n.publish_on DESC LIMIT 5');
        $hotNews = json_decode(json_encode($hotNews),true);
        // dd($hotNews);

        $fashion = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=','4')
        ->orderBy('publish_on','DESC')
        ->limit('4')
        ->get();
        
        $news = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->orderBy('publish_on','DESC')
        ->limit('5')
        ->get();

        $beauty = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=','1')
        ->orderBy('publish_on','DESC')
        ->limit('5')
        ->get();
        
        $royal = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=','8')
        ->orderBy('publish_on','DESC')
        ->limit('7')
        ->get();
        
        $food = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=','6')
        ->orderBy('publish_on','DESC')
        ->limit('7')
        ->get();

        $life = News::with(['newsTypes','newsSubTypes','newsSubTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('news_type','=','2')
        ->orderBy('publish_on','DESC')
        ->limit('7')
        ->get();

        $ohmama = Vid::with(['vidTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('vid_type','=','1')
        ->orderBy('publish_on','DESC')
        ->limit('5')
        ->get();

        $selera = Vid::with(['vidTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('vid_type','=','3')
        ->orderBy('publish_on','DESC')
        ->limit('5')
        ->get();

        $kepo = Vid::with(['vidTypes'])
        ->where('is_publish','1')
        // ->where('news_id','1259')
        ->where('publish_on','<=',date("Y-m-d H:i:s"))
        ->where('vid_type','=','2')
        ->orderBy('publish_on','DESC')
        ->limit('5')
        ->get();
        // dd($ohmama);
        // return view('pages.homepage.index');
        return view('pages.homepage.index', compact(
            // 'newsTypes',
            'hotNews',
            'fashion',
            'beauty',
            'ohmama',
            'life',
            'selera',
            'kepo',
            'royal',
            'news',
            'food',
            // 'international','home'
        ));
    }
}
