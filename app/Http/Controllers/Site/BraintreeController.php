<?php

namespace App\Http\Controllers;

use Braintree_ClientToken;
use Illuminate\Http\Request;

class BraintreeController extends Controller
{
    /**
	 * Generate a new BrainTree ClientToken.
	 */
    public function getToken()
    {
    	return response()->json([
    		'token' => Braintree_ClientToken::generate(),
		]);
    }
}
