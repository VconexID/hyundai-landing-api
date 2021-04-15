<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class DistrictController extends Controller
{
    use ResponseTrait;

    public function byProvince($id)
    {
        $data = District::where('province_id', $id)->get();
        return $this->returnData($data);
    }
}
