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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringAdresseLigne1Trait;

/**
 * String adresse ligne 1 trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringAdresseLigne1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAdresseLigne1() method().
     *
     * @return void
     */
    public function testSetAdresseLigne1(): void {

        $obj = new TestStringAdresseLigne1Trait();

        $obj->setAdresseLigne1("adresseLigne1");
        $this->assertEquals("adresseLigne1", $obj->getAdresseLigne1());
    }
}
