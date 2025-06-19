<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPhoneFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         if(!preg_match('/^\+38\(\d{3}\) \d{2} \d{2} \d{3}$/', $value)){
            $fail('The :attribute format must be: +38(XXX) XX XX XXX');
         };
    }
}
