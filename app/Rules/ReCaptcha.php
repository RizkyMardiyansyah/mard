<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response=Http::get("https://www.google.com/recaptcha/api/siteverify",[
            "secret" => 'RECAPTCHA_SECRET_KEY=6Lc1EOUqAAAAAIeHVEyUawbinVMogrIJ04o1LLE5',
            "response" => $value
        ])->json();
        dd($response);
        if (!$response['success']){
            $fail("ReCaptcha not Valid");
        }
    }
}
