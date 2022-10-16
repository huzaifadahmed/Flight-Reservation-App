<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use App\Models\Flight;

class AircraftRule implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {

        $count = Flight::where(['date'=>request('date')])->where(['aircraft'=>$value])->count();
        if($count >= 1){
            $fail('This aircraft already has a flight on that date.');
        }
    }
}
