<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group News
 */
class NewsController extends Controller
{
    use ApiResponseTrait;

    /**
     * News
     *
     * Display a listing of news.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $news = News::latest()->paginate($request->input('perPage', 10));

        return $this->successMessage([
            'news' => NewsResource::collection($news),
            'current_page' => $news->currentPage(),
            'pages_number' => $news->lastPage(),
        ]);
    }

    /**
     * Random
     *
     * Display random news.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRandom()
    {
        $news = News::inRandomOrder()->first();

        return $this->successMessage([
            'news' => $news ? new NewsResource($news) : json_decode("{}"),
        ]);
    }
}
