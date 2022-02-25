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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestIntegerResultatTrait;

/**
 * Integer résultat trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class IntegerResultatTraitTest extends AbstractTestCase {

    /**
     * Tests the setResultat() method().
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new TestIntegerResultatTrait();

        $obj->setResultat(1);
        $this->assertEquals(1, $obj->getResultat());
    }
}
