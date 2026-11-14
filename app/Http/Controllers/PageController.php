<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Static content pages migrated from the original HTML site.
 */
class PageController extends Controller
{
    /** GET /about — formerly about.html */
    public function about(): View
    {
        return view('pages.about');
    }

    /** GET /coffee — formerly coffee.html */
    public function coffee(): View
    {
        return view('pages.coffee');
    }

    /** GET /manufacturing — formerly manufacturing.html */
    public function manufacturing(): View
    {
        return view('pages.manufacturing');
    }

    /** GET /trading — formerly trading.html */
    public function trading(): View
    {
        return view('pages.trading');
    }

    /** GET /gallery — formerly gallery.html */
    public function gallery(): View
    {
        $photos = collect(config('gallery.photos'));

        return view('pages.gallery', [
            'photos' => $photos,
            'categories' => config('gallery.categories'),
            'counts' => $photos->countBy('cat'),
        ]);
    }
}
