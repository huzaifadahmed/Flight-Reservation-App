<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\AircraftRule;

class CreateFlightRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'departure'=> ['required','different:arrival'],
            'arrival'=> ['required'],
            'basePrice'=>['required'],
            'date'=>['required','after:today'],
            'aircraft'=>['required', new AircraftRule()],
        ];
    }
}
