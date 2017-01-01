<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Keywords;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ads;
use App\SocialLinks;

class OnlyCategoryController extends Controller
{
    public function getIndex($slug)
    {
        //get the social links
        $links = SocialLinks::get();
        //get the ads
        $ads = Ads::get();
        //keyWords
        $keywords = Keywords::take(10)->get();
        foreach (explode(",",str_replace("," ," " , $keywords)) as $keyword) {

        }

        //get the news from database To Left Sid Bar
        $news = News::where('active','=','1')->orderBy('id','desc')->get();

        $cat =Category::where('slug',$slug)->first();
        $id = Category::where('slug',$slug)->value('id');

        $cat_news =News::where('category_id',$id)->orderBy('id','desc')->paginate(5);
        $cat_news_header =News::where('category_id',$id)->orderBy('id','desc')->get();


//        echo '<pre>' ;
//        var_dump($cat_comm);
//        exit;
        return view('site.pages.category.index',compact('cat_news','cat','ads','links','keywords','news','comment','cat_news_header'));
    }
}
