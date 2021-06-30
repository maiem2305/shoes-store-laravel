<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WishlistController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.wishlist.index');
    }

    /**
     * Change language.
     */
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return back();
    }
}