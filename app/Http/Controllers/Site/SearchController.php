<?php

namespace App\Http\Controllers\Site;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    public function getIndex()
    {
        return view('site.pages.results');
    }
}
