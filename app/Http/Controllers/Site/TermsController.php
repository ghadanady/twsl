<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Condition;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function getIndex()
    {
        // $rows = Condition::latest()->get()->filter(function ($row)
        // {
        //     return $row->active;
        // });
        return view('site.pages.terms');
    }
}
