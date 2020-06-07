<?php

declare(strict_types=1);

namespace PasswordHelper;

class Policy
{
    /**
     * @var int default minimum number of numbers
     */
    public const MINIMUM_DIGITS = 1;

    /**
     * @var int default minimum password length
     */
    public const MINIMUM_LENGTH = 10;

    /**
     * @var int default minimum number of letters
     */
    public const MINIMUM_LETTERS = 1;

    /**
     * @var int default minimum number of lowercase letters
     */
    public const MINIMUM_LOWERCASE = 1;

    /**
     * @var int default minimum number of special characters
     */
    public const MINIMUM_SPECIAL_CHARS = 1;

    /**
     * @var int default minimum number of uppercase letters
     */
    public const MINIMUM_UPPERCASE = 1;

    /**
     * @var int default minimum number of numbers
     */
    protected $minimumDigits;

    /**
     * @var int default minimum password length
     */
    protected $minimumLength;

    /**
     * @var int default minimum number of letters
     */
    protected $minimumLetters;

    /**
     * @var int minimum number of lowercase letters
     */
    protected $minimumLowercase;

    /**
     * @var int minimum number of special characters
     */
    protected $minimumSpecialChars;

    /**
     * @var int minimum number of uppercase letters
     */
    protected $minimumUppercase;

    public function __construct(array $config = [])
    {
        $this->minimumDigits       = abs((int) ($config['minimumDigits']       ?? self::MINIMUM_DIGITS          ));
        $this->minimumLength       = abs((int) ($config['minimumLength']       ?? self::MINIMUM_LENGTH          ));
        $this->minimumLetters      = abs((int) ($config['minimumLetters']      ?? self::MINIMUM_LETTERS         ));
        $this->minimumLowercase    = abs((int) ($config['minimumLowercase']    ?? self::MINIMUM_LOWERCASE       ));
        $this->minimumSpecialChars = abs((int) ($config['minimumSpecialChars'] ?? self::MINIMUM_SPECIAL_CHARS   ));
        $this->minimumUppercase    = abs((int) ($config['minimumUppercase']    ?? self::MINIMUM_UPPERCASE       ));
    }

    /**
     * @return int
     */
    public function getMinimumDigits(): int
    {
        return $this->minimumDigits;
    }

    /**
     * @return int
     */
    public function getMinimumLength(): int
    {
        return $this->minimumLength;
    }

    /**
     * @return int
     */
    public function getMinimumLetters(): int
    {
        return $this->minimumLetters;
    }

    /**
     * @return int
     */
    public function getMinimumLowercase(): int
    {
        return $this->minimumLowercase;
    }

    /**
     * @return int
     */
    public function getMinimumSpecialChars(): int
    {
        return $this->minimumSpecialChars;
    }

    /**
     * @return int
     */
    public function getMinimumUppercase(): int
    {
        return $this->minimumUppercase;
    }
}