<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Get the token.
     *
     * @return string Returns the token.
     */
    public static function getToken(): string {

        $path = __DIR__ . "/../.token";

        if (true === file_exists($path)) {
            return file_get_contents($path);
        }

        return "YOUR_API_KEY";
    }
}
