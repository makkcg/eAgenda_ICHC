<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function successMessage($data, $message = '', $statusCode = 200)
    {
        return response()->json([
            "message" => $message,
            "data" => $data,
        ], $statusCode);
    }

    public function failureMessage($errors, $message = '', $statusCode = 400)
    {
        return response()->json([
            "message" => $message,
            "errors" => $errors,
        ], $statusCode);
    }
}
