<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisitor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|min:10',
            'province' => 'required|exists:districts,id',
            'district' => 'required|exists:districts,id',
            'car_type' => 'required|in:Palisade,Kona Electric,Ioniq Electric,H-1,Santa Fe',
            'car_color' => 'required|string',
            'no_polisi' => 'required|string',
        ];
    }
}
