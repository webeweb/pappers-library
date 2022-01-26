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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringAdresseTrait;

/**
 * String adresse trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringAdresseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAdresse() method().
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new TestStringAdresseTrait();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }
}
