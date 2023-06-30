<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use OwnDeveloper\NumberMask;

final class NumberMaskTest extends TestCase
{
    #[DataProvider('maskNumberDataset')]
    public function test_mask_number($data,$expected)
    {
        $numberMask = new NumberMask();
        // act on data
        $number = $numberMask->masking($data,$expected);
        // assert the response
        $this->assertSame($expected, $number);
    }

    public static function maskNumberDataset()
    {
        yield [9876543210, '987-654-3210'];
        yield [9876543210, '9876-543-210'];
        yield [9876543210, '987-6543-210'];
        yield [987654321, '987-6543-210'];
    }
}