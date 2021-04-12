<?php

namespace App\Traits;

trait ResponseTrait
{
    public function returnData($data,  $message = 'Action Successful', $status = 'success', $statusCode = 200)
    {
        if($status === 'success'){
            return response()->json([
                'errors' => [], 
                'message' => $message,
                'data' => $data, 
                'status' => $status,
                'statusCode' => $statusCode
                ], 
                $statusCode
            );
        }else{
            return response()->json([
                'errors' => $message, 
                'message' => [],
                'data' => $data, 
                'status' => $status,
                'statusCode' => $statusCode
            ], 
                $statusCode
            );
        }
    }
}