<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail):void
    {

        if ( ! preg_match('/^@[a-zA-Z0-9_-]+$/', $value)) {
            $fail('Deve conter apenas letras, números e underscores após o @. Ah, e sem espaços!');
        }
        
    }
}