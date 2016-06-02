<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getPage($url = '')
    {
        $page = \App\Page::where('url', $url)->get();

        if ($page->isEmpty()) {
            $error = array(
                'status' => 'error',
                'message' => 'An error occurred!'
            );

            return response()->json($error, 404);
        }

        return response()->json($page);
    }
}
