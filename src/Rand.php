<?php

declare(strict_types=1);
/**
 * Crystal Chess - Generate random values.
 *
 * @author Crystal Chess Contributors <https://github.com/orgs/crystal-chess/people>
 *
 * @link <https://github.com/crystal-chess/rand> Crystal Rand.
 */

namespace CrystalChess;

use function implode;
use function mb_strlen;
use function random_int;

/**
 * The rand class.
 */
class Rand implements RandInterface
{
    /**
     * Generate a random bool value.
     *
     * @return bool Returns a random bool value.
     */
    public function getBool(): bool
    {
        return (bool) random_int(0, 1);
    }

    /**
     * Generate a random string value.
     *
     * @param int    $length   The string length.
     * @param string $keyspace The list of characters allowed to use.
     *
     * @return string Returns the generated string.
     */
    public function getString(int $length = 16, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string
    {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; $i++) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }

        return implode('', $pieces);
    }

    /**
     * Generate a random two factor code.
     *
     * @param int $length The code length.
     *
     * @return int Returns the two factor code.
     *
     * @codeCoverageIgnore
     */
    public function getTwoFactorCode(int $length = 6): int
    {
        return intval($this->getString($length, '0123456789'));
    }
}
