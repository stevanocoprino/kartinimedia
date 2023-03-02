<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Helper\Helper;
use App\Models\NewsTypes;
use App\Models\News;

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
        // return view('pages.homepage.index');
        return view('pages.homepage.index', compact(
            // 'newsTypes',
            'hotNews',
            // 'terbaruNews',
            // 'terbaruNews1',
            // 'terbaruNews2',
            // 'terbaruNews3',
            // 'terbaruNews4',
            // 'sepakBola',
            // 'bolaBasket',
            // 'bolaVoli',
            // 'international','home'
        ));
    }
}
