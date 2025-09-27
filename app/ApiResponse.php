<?php

namespace App;

trait ApiResponse
{
    protected function successResponse($data = [], $message = 'Success', $code = 200)
    {
        return response()->json([
            'status'  => 'success',
            'data' => $data,
            'message' => $message,
        ], $code);
    }
    protected function errorResponse($message = 'Error', $code = 400, $errors = [])
    {
        return response()->json([
            'status'  => 'error',
            'message' => $message,
            'errors'  => $errors,
        ], $code);
    }
}
