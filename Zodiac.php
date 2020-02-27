<?php

namespace App\Services;

/**
 * Class Zodiac
 * Pass in a date (YYYY-MM-DD) and returns the associated star sign
 * @package App\Services
 */
class Zodiac
{
    /** @var array $offset There are two zodiac per month, define the cut-off point */
    private $offset = [
        20,19,21,20,21,21,23,23,23,23,22,22
    ];

    const CAPRICORN = 'capricorn';
    const AQUARIUS = 'aquarius';
    const PISCES = 'pisces';
    const ARIES = 'aries';
    const TAURUS = 'taurus';
    const GEMINI = 'gemini';
    const CANCER = 'cancer';
    const LEO = 'leo';
    const VIRGO = 'virgo';
    const LIBRA = 'libra';
    const SCORPIO = 'scorpio';
    const SAGITTARIUS = 'sagittarius';

    /**
     * @param string $dob
     * @return string
     */
    public function get(string $dob = null)
    {
        /* Set default date to the current date */
        if ($dob === null) {
            $dob = date('Y-m-d');
        }

        $m = (int)date('n', strtotime($dob));
        $d = (int)date('j', strtotime($dob));
        $sign = '';

        if ($m === 1) {
            $sign = ($d < $this->offset[$m-1]) ? self::CAPRICORN : self::AQUARIUS;
        } elseif ($m === 2) {
            $sign = ($d < $this->offset[$m-1]) ? self::AQUARIUS : self::PISCES;
        } elseif ($m === 3) {
            $sign = ($d < $this->offset[$m-1]) ? self::PISCES : self::ARIES;
        } elseif ($m === 4) {
            $sign = ($d < $this->offset[$m-1]) ? self::ARIES : self::TAURUS;
        } elseif ($m === 5) {
            $sign = ($d < $this->offset[$m-1]) ? self::TAURUS : self::GEMINI;
        } elseif ($m === 6) {
            $sign = ($d < $this->offset[$m-1]) ? self::GEMINI : self::CANCER;
        } elseif ($m === 7) {
            $sign = ($d < $this->offset[$m-1]) ? self::CANCER : self::LEO;
        } elseif ($m === 8) {
            $sign = ($d < $this->offset[$m-1]) ? self::LEO : self::VIRGO;
        } elseif ($m === 9) {
            $sign = ($d < $this->offset[$m-1]) ? self::VIRGO : self::LIBRA;
        } elseif ($m === 10) {
            $sign = ($d < $this->offset[$m-1]) ? self::LIBRA : self::SCORPIO;
        } elseif ($m === 11) {
            $sign = ($d < $this->offset[$m-1]) ? self::SCORPIO : self::SAGITTARIUS;
        } elseif ($m === 12) {
            $sign = ($d < $this->offset[$m-1]) ? self::SAGITTARIUS : self::CAPRICORN;
        }

        return $sign;
    }
}

