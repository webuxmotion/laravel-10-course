<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
    // get all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()
          ]);
    }

    // get single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
          ]);
    }
}
