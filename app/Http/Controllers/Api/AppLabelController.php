<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppLabelResource;
use App\Models\AppLabel;
use App\Traits\ApiResponseTrait;

/**
 * @group App Labels
 */
class AppLabelController extends Controller
{
    use ApiResponseTrait;

    /**
     * App Labels
     *
     * Display a listing of the App Labels.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successMessage(AppLabelResource::collection(AppLabel::all()));
    }
}
