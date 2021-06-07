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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringPrecisionTrait;

/**
 * String précision trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringPrecisionTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrecision() method().
     *
     * @return void
     */
    public function testSetPrecision(): void {

        $obj = new TestStringPrecisionTrait();

        $obj->setPrecision("precision");
        $this->assertEquals("precision", $obj->getPrecision());
    }
}