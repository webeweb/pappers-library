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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Integers\TestIntegerAnneeEffectifTrait;

/**
 * Integer année effectif trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Integers
 */
class IntegerAnneeEffectifTraitTest extends AbstractTestCase {

    /**
     * Tests the setAnneeEffectif() method().
     *
     * @return void
     */
    public function testSetAnneeEffectif(): void {

        $obj = new TestIntegerAnneeEffectifTrait();

        $obj->setAnneeEffectif(1);
        $this->assertEquals(1, $obj->getAnneeEffectif());
    }
}
