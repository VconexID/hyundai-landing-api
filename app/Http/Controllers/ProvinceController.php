<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class ProvinceController extends Controller
{   
    use ResponseTrait;

    public function all()
    {
        $data = Province::all();
        return $this->returnData($data);
    }

    public function onlyJabodetabek()
    {
        $data = Province::where(function($q) {
            $q->where('name', 'DKI Jakarta')
                ->orWhere('name', 'Jawa Barat')
                ->orWhere('name', 'Banten');
        })->get();

        return $this->returnData($data);
    }
}
