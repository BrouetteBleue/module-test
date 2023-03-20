<?php

use PHPUnit\Framework\TestCase;
require('src/hippopotamus.php');

class HippopotamusTest extends TestCase
{
    public function testFight()
    {
        $hippo1 = new Hippopotamus("Hippo1", 1500, 50);
        $hippo2 = new Hippopotamus("Hippo2", 1400, 40);
        $hippo3 = new Hippopotamus("Hippo3", 1600, 55);

        // Test when the first hippopotamus has bigger tusks
        $winner = $hippo1->fight($hippo2);
        $this->assertSame($hippo1, $winner);

        // Test when the second hippopotamus has bigger tusks
        $winner = $hippo1->fight($hippo3);
        $this->assertSame($hippo3, $winner);

        // Test when both hippopotamuses have equal tusks
        $winner = $hippo1->fight($hippo1);
        $this->assertSame($hippo1, $winner);
    }
}