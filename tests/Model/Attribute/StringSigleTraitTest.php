<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model\Attribute;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringSigleTrait;

/**
 * String sigle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringSigleTraitTest extends AbstractTestCase {

    /**
     * Tests the setSigle() method().
     *
     * @return void
     */
    public function testSetSigle(): void {

        $obj = new TestStringSigleTrait();

        $obj->setSigle("sigle");
        $this->assertEquals("sigle", $obj->getSigle());
    }
}