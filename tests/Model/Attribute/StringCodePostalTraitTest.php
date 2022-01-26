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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringCodePostalTrait;

/**
 * String code postal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringCodePostalTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePostal() method().
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new TestStringCodePostalTrait();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }
}
