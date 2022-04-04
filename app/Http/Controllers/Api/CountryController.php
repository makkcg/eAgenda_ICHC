<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Countries
 */
class CountryController extends Controller
{
    use ApiResponseTrait;

    /**
     * Countries.
     *
     * Get all countries
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $this->successMessage(CountryResource::collection(Country::all()));
    }
}
