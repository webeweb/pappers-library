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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringDateActeFormateTrait;

/**
 * String Date acte formaté trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringDateActeFormateTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateActeFormate() method().
     *
     * @return void
     */
    public function testSetDateActeFormate(): void {

        $obj = new TestStringDateActeFormateTrait();

        $obj->setDateActeFormate("dateActeFormate");
        $this->assertEquals("dateActeFormate", $obj->getDateActeFormate());
    }
}