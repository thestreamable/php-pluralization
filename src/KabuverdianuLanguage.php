<?php

namespace Oblik\Pluralization;

class KabuverdianuLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        OTHER . OTHER => OTHER,
    ];
}
