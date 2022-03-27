<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Models\Page;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Page
 */
class PageController extends Controller
{
    use ApiResponseTrait;

    /**
     * Page
     *
     * Show the page details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Page $page)
    {
        return $this->successMessage(new PageResource($page));
    }
}
