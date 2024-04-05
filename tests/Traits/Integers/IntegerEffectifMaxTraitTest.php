<?php

declare(strict_types = 1);

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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Integers\TestIntegerEffectifMaxTrait;

/**
 * Integer effectif max trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Integers
 */
class IntegerEffectifMaxTraitTest extends AbstractTestCase {

    /**
     * Test setEffectifMax() method().
     *
     * @return void
     */
    public function testSetEffectifMax(): void {

        $obj = new TestIntegerEffectifMaxTrait();

        $obj->setEffectifMax(1);
        $this->assertEquals(1, $obj->getEffectifMax());
    }
}
