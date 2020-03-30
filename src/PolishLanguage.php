<?php

namespace Oblik\Pluralization;

class PolishLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f, int $t)
    {
        $imod10 = $i % 10;
        $imod100 = $i % 100;
        
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        elseif ($v == 0 && self::inRange($imod10, [2, 4]) && !self::inRange($imod100, [12, 14])) {
            return FEW;
        }
        elseif (
            ($v == 0 && $i != 1 && self::inRange($imod10, [0, 1]))
            || ($v == 0 && self::inRange($imod10, [5, 9]))
            || ($v == 0 && self::inRange($imod100, [12, 14]))
        ) {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . FEW => FEW,
        ONE . MANY => MANY,
        ONE . OTHER => OTHER,
        FEW . FEW => FEW,
        FEW . MANY => MANY,
        FEW . OTHER => OTHER,
        MANY . ONE => ONE,
        MANY . FEW => FEW,
        MANY . MANY => MANY,
        MANY . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . FEW => FEW,
        OTHER . MANY => MANY,
        OTHER . OTHER => OTHER,
    ];
}
