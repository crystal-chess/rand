<?php

declare(strict_types=1);
/**
 * Crystal Chess - Generate random values..
 *
 * @author Crystal Chess Contributors <https://github.com/orgs/crystal-chess/people>
 *
 * @link <https://github.com/crystal-chess/hasher> Crystal Hasher.
 */

namespace CrystalChess\Chess;

use CrystalChess\Rand;
use PHPUnit\Framework\TestCase;

/**
 * Rand test case.
 */
class RandTest extends TestCase
{
    public function testRandomCases()
    {
        $rand = new Rand();
        $bool = $rand->getBool();
        $this->assertTrue(is_bool($bool));
        $str = $rand->getString();
        $this->assertTrue(is_string($str));
    }
}
