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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringDateDepotFormateTrait;

/**
 * String date dépôt formaté trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringDateDepotFormateTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDepotFormate() method().
     *
     * @return void
     */
    public function testSetDateDepotFormate(): void {

        $obj = new TestStringDateDepotFormateTrait();

        $obj->setDateDepotFormate("dateDepotFormate");
        $this->assertEquals("dateDepotFormate", $obj->getDateDepotFormate());
    }
}