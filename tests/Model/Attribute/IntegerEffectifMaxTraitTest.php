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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestIntegerEffectifMaxTrait;

/**
 * Integer effectif max trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class IntegerEffectifMaxTraitTest extends AbstractTestCase {

    /**
     * Tests the setEffectifMax() method().
     *
     * @return void
     */
    public function testSetEffectifMax(): void {

        $obj = new TestIntegerEffectifMaxTrait();

        $obj->setEffectifMax(1);
        $this->assertEquals(1, $obj->getEffectifMax());
    }
}
