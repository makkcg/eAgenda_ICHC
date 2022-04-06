<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InformationResource;
use App\Models\Information;
use App\Traits\ApiResponseTrait;

/**
 * @group Information
 */
class InformationController extends Controller
{
    use ApiResponseTrait;

    /**
     * Information
     *
     * Get random Information
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $information = Information::inRandomOrder()->first();
        return $this->successMessage($information ? new InformationResource($information) : json_decode("{}"));
    }
}
