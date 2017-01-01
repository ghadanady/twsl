<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\_Product;
use Illuminate\Pagination\LengthAwarePaginator ;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class WishlistController extends Controller

{
   public function getIndex(Request $request)
    {
        $member = auth()->guard('members')->user();
        // if the request is ajax request
        if ($request->ajax()) {
            return $this->filterProducts($member->wishlistProducts , $request);
        }

        $max_price = $member->wishlistProducts()->max('price');
        $min_price=  $member->wishlistProducts()->min('price');
        $products = $member->wishlistProducts()->paginate(9);
        $base_url = route('site.wishlist.index');
        return view('site.pages.wishlist.index' , compact('products' , 'max_price' , 'min_price', 'base_url'));
    }

    protected function filterProducts(Collection $products, Request $request)
    {
        $per_page = $request->per_page;
        $order = $request->order;
        $first_limit = floatval(str_replace('$', '',$request->first_limit));
        $last_limit = floatval(str_replace('$', '',$request->last_limit));
        $products = $products->filter(function($product) use ($first_limit ,$last_limit){
            $price = $product->getDiscount();
            return ($price >= $first_limit && $price <= $last_limit);
        });

        switch ($order) {
            case 'price':
            $products = $products->sortBy('price');
            break;
            case 'date':
            $products = $products->sortBy('created_at');
            break;
            case 'name':
            $products = $products->sort(function($first , $last){
                return strcmp($first->translated()->name, $last->translated()->name);
            });
            break;
        }

       // $products = new LengthAwarePaginator($products, $products->count(),$per_page);
        $products = paginate($products,$per_page);

        return view('site.pages.products.templates.products' , compact('products'))->render();
    }

	/**
     * Update the Wishlist items.
     *
     * @param         $slug
     */
    public function postUpdate($slug)
    {
        $product = _Product::where('slug' , $slug)->first();

        if (!$product) {
            return [
                'status' => 'error',
                'msg' => 'You want to update non existing product "'.$slug.'"',
				'count' => 0,
            ];
        }

		$auth = auth()->guard('members');
        if (!$auth->check()) {
            return [
                'status' => 'warning',
                'msg' => 'You must loggin first, so you can add to your wishlist.',
				'count' => 0,
            ];
        }

        $product = $product->master;
		$name = $product->translated()->name;
		$member = $auth->user();

		//toggle the wishlist for given product
		if ($product->wishlistMembers()->find($member->id)){
			$product->wishlistMembers()->detach($member->id);
			$status = 'information';
			$msg = 'The product with name "'.$name.'" removed from wishlist.';
		}else {
			$product->wishlistMembers()->attach($member->id);
			$status = 'success';
			$msg = 'The product with name "'.$name.'" wishlisted successfully.';
		}

        return [
            'status' => $status,
            'msg' => $msg,
			'count' => $member->wishlistProducts->count(),
        ];
    }
}
