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

/**
 * The rand interface.
 */
interface RandInterface
{
    /**
     * Generate a random bool value.
     *
     * @return bool Returns a random bool value.
     */
    public function getBool(): bool;

    /**
     * Generate a random string value.
     *
     * @param int    $length   The string length.
     * @param string $keyspace The list of characters allowed to use.
     *
     * @return string Returns the generated string.
     */
    public function getString(int $length = 16, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string;

    /**
     * Generate a random two factor code.
     *
     * @param int $length The code length.
     *
     * @return int Returns the two factor code.
     */
    public function getTwoFactorCode(int $length = 6): int;
}
