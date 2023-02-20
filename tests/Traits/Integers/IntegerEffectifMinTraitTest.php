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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Integers\TestIntegerEffectifMinTrait;

/**
 * Integer effectif min trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Integers
 */
class IntegerEffectifMinTraitTest extends AbstractTestCase {

    /**
     * Tests the setEffectifMin() method().
     *
     * @return void
     */
    public function testSetEffectifMin(): void {

        $obj = new TestIntegerEffectifMinTrait();

        $obj->setEffectifMin(1);
        $this->assertEquals(1, $obj->getEffectifMin());
    }
}
