<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SafeInput implements ValidationRule
{
    protected $forbiddenWords;
    protected $sqlInjectionPatterns;

    public function __construct(array $forbiddenWords = [], array $sqlInjectionPatterns = [])
    {
        $this->forbiddenWords = $forbiddenWords ?: ['null', 'false', 'true', 'select'];

        $this->sqlInjectionPatterns = $sqlInjectionPatterns ?: [
            '/\bSELECT\b/i', '/\bINSERT\b/i', '/\bUPDATE\b/i', '/\bDELETE\b/i', '/\bDROP\b/i', '/\bTABLE\b/i',
            '/--/', '/#/', '/\/\*/', '/\*\/', '/;/'
        ];
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        foreach ($this->forbiddenWords as $word) {
            if (stripos($value, $word) !== false) {
                $fail("The $attribute contains forbidden words.");
                return;
            }
        }

        foreach ($this->sqlInjectionPatterns as $pattern) {
            if (preg_match($pattern, $value)) {
                $fail("The $attribute contains unsafe characters.");
                return;
            }
        }
    }
}
