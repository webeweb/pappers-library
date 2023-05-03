<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringGreffeTrait;

/**
 * String greffe trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringGreffeTraitTest extends AbstractTestCase {

    /**
     * Test the setGreffe() method().
     *
     * @return void
     */
    public function testSetGreffe(): void {

        $obj = new TestStringGreffeTrait();

        $obj->setGreffe("greffe");
        $this->assertEquals("greffe", $obj->getGreffe());
    }
}
