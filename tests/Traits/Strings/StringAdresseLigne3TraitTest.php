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

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringAdresseLigne3Trait;

/**
 * String adresse ligne 3 trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringAdresseLigne3TraitTest extends AbstractTestCase {

    /**
     * Test setAdresseLigne3() method().
     *
     * @return void
     */
    public function testSetAdresseLigne3(): void {

        $obj = new TestStringAdresseLigne3Trait();

        $obj->setAdresseLigne3("adresseLigne3");
        $this->assertEquals("adresseLigne3", $obj->getAdresseLigne3());
    }
}
