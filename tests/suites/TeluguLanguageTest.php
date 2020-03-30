<?php

namespace Oblik\Pluralization;

final class TeluguLanguageTest extends LanguageTestCase
{
    static $class = TeluguLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, '1.0', '1.00', '1.000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 0.9, 1], [1.1, 1.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
