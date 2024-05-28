<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringAdresseLigne2Trait;

/**
 * String adresse ligne 2 trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringAdresseLigne2TraitTest extends AbstractTestCase {

    /**
     * Test setAdresseLigne2() method().
     *
     * @return void
     */
    public function testSetAdresseLigne2(): void {

        $obj = new TestStringAdresseLigne2Trait();

        $obj->setAdresseLigne2("adresseLigne2");
        $this->assertEquals("adresseLigne2", $obj->getAdresseLigne2());
    }
}
