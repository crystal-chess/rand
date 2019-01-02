<?php

declare(strict_types=1);
/**
 * Crystal Chess - Generate random values.
 *
 * @author Crystal Chess Contributors <https://github.com/orgs/crystal-chess/people>
 *
 * @link <https://github.com/crystal-chess/hasher> Crystal Hasher.
 */

namespace CrystalChess;

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
     * @return bool Returns true if the hash needs a rehash and false if not.
     */
    public function getString(int $length = 16, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): bool
    {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; $i++) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }

        return implode('', $pieces);
    }
}
