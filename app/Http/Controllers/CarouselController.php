<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CarouselController extends Controller
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
    public function index()
    {
        $news = \App\Carousel::orderBy('created_at')->get();
        return response()->json($news);
    }

    public function get($id)
    {
        $newsItem = \App\Carousel::where('id', $id)->get();

        if ($newsItem->isEmpty()) {
            $error = array(
                'status' => 'error',
                'message' => 'An error occurred!'
            );

            return response()->json($error, 404);
        }

        return response()->json($newsItem);
    }
}
