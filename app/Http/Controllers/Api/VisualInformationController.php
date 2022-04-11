<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VisualInformationResource;
use App\Models\VisualInformation;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Visual Information
 */
class VisualInformationController extends Controller
{
    use ApiResponseTrait;

    /**
     * Information
     *
     * Get random Information
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $visualInformation = VisualInformation::inRandomOrder()->first();
        return $this->successMessage($visualInformation ? new VisualInformationResource($visualInformation) : json_decode("{}"));
    }
}
