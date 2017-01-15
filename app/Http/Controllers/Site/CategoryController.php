<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
    * Render The Main or Sub Categories Page
    * @return View
    */
    public function getIndex($id){




    }

    public function getProducts($id)
    {




    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $category = Category::find($id);
        $category->img = $category->image ? $category->image->name : 'default.jpg';

        if($category->parent_id==0)
        {
            //main category
            $sub_categories_ids = Category::where('parent_id' , $id)->pluck('id');
            $products=Product::whereIn('category_id', $sub_categories_ids)->paginate(6);
            $sub_categories = Category::where('parent_id' , $id)->get();

        }else if($category->parent_id!=0){

            //sub_catergory  category
            $products = Product::where('category_id', $id)->paginate(6);
            $sub_categories = Category::where('parent_id' , $category->parent_id)->get();

        }
        else{
            abort(404);
        }
        return view('site.pages.category' , compact('categories',
        'products',
        'sub_categories',
        'category'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }
}
