<?php

namespace wetop\helpers;

class StringHelper
{
    const SYMBOLS = [' ', '(', ')', '-'];

    public static function cut($str, $symbols = self::SYMBOLS): string
    {
        return str_replace($symbols, '', $str);
    }
}
