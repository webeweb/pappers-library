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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringSiretFormateTrait;

/**
 * String SIRET formaté trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringSiretFormateTraitTest extends AbstractTestCase {

    /**
     * Tests the setSiretFormate() method().
     *
     * @return void
     */
    public function testSetSiretFormate(): void {

        $obj = new TestStringSiretFormateTrait();

        $obj->setSiretFormate("siretFormate");
        $this->assertEquals("siretFormate", $obj->getSiretFormate());
    }
}