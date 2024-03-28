<?php

namespace App\Http\Controllers\Api;


trait apiResponseTrait
{
    public function apiResponse($data,$msg,$status)
    {
        $array  = [
            'data'=> $data,
            'Message' => $msg,
            'status' => $status
        ];
        return response($array,200);
    }
}
