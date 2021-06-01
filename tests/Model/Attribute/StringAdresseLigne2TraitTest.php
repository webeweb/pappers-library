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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringAdresseLigne2Trait;

/**
 * String adresse ligne 2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringAdresseLigne2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAdresseLigne2() method().
     *
     * @return void
     */
    public function testSetAdresseLigne2(): void {

        $obj = new TestStringAdresseLigne2Trait();

        $obj->setAdresseLigne2("adresseLigne2");
        $this->assertEquals("adresseLigne2", $obj->getAdresseLigne2());
    }
}