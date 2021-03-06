<?php

use PasswordHelper\Policy;
use PasswordHelper\StrengthChecker;
use PHPUnit\Framework\TestCase;

class StrengthCheckerTest extends TestCase
{
    public function dataProvider(): array
    {
        return [
            ['', 'Very Weak'],
            ['a', 'Very Weak'],
            ['1', 'Very Weak'],
            ['!', 'Very Weak'],
            ['Z', 'Very Weak'],
            ['a1', 'Weak'],
            ['a!', 'Weak'],
            ['aA', 'Weak'],
            ['a1!', 'Good'],
            ['a!A', 'Good'],
            ['1!A', 'Good'],
            ['a1!Az', 'Very Good'],
            ['a1!Aa1!A', 'Strong'],
            ['a1!Aa1!Azz', 'Very Strong'],
        ];
    }

    /**
     * @dataProvider dataProvider
     *
     * @param string $password
     * @param string $score
     */
    public function testMinimumLettersNeverLessThanTotalLetters(string $password, string $score): void
    {
        $checker = new StrengthChecker();

        self::assertEquals($score, $checker->checkStrength($password));
    }
}
