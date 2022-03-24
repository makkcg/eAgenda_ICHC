<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use App\Traits\ApiResponseTrait;

/**
 * @group Languages
 */
class LanguageController extends Controller
{
    use ApiResponseTrait;

    /**
     * Languages
     *
     * Display a listing of list's languages.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->successMessage(LanguageResource::collection(Language::where('status', '1')->get()));
    }
}
