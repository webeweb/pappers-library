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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestFloatPourcentageUsufruitTrait;

/**
 * Float pourcentage usufruit trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class FloatPourcentageUsufruitTraitTest extends AbstractTestCase {

    /**
     * Tests the setPourcentageUsufruit() method().
     *
     * @return void
     */
    public function testSetPourcentageUsufruit(): void {

        $obj = new TestFloatPourcentageUsufruitTrait();

        $obj->setPourcentageUsufruit(0.1);
        $this->assertEquals(0.1, $obj->getPourcentageUsufruit());
    }
}
