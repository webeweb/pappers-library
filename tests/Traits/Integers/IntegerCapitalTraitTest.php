<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Integers;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Integers\TestIntegerCapitalTrait;

/**
 * Integer capital trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Integers
 */
class IntegerCapitalTraitTest extends AbstractTestCase {

    /**
     * Test setCapital() method().
     *
     * @return void
     */
    public function testSetCapital(): void {

        $obj = new TestIntegerCapitalTrait();

        $obj->setCapital(1);
        $this->assertEquals(1, $obj->getCapital());
    }
}
