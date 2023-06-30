<?php

namespace OwnDeveloper;

use InvalidArgumentException;

class NumberMask
{

    public function masking($number, $pattern)
    {
        if (strlen($number) != 10 || !$this->isNumeric($number)) {
            throw new InvalidArgumentException("Please enter a valid number");
        }

        $patternParts = str_split($pattern);
        $maskedNumber = '';
        $j = 0;

        foreach ($patternParts as $part) {
            if ($part === '-') {
                $maskedNumber .= '-';
            } elseif ($part === 'x') {
                $maskedNumber .= $number[$j];
                $j++;
            } else {
                $maskedNumber .= $part;
            }
        }
        return $maskedNumber;
    }

    private function isNumeric($number): bool
    {
        return is_numeric($number);
    }
}
