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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringNicTrait;

/**
 * String NIC trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringNicTraitTest extends AbstractTestCase {

    /**
     * Tests the setNic() method().
     *
     * @return void
     */
    public function testSetNic(): void {

        $obj = new TestStringNicTrait();

        $obj->setNic("nic");
        $this->assertEquals("nic", $obj->getNic());
    }
}
