<?php

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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDateActeFormateeTrait;

/**
 * String date acte formatée trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDateActeFormateeTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateActeFormate() method().
     *
     * @return void
     */
    public function testSetDateActeFormate(): void {

        $obj = new TestStringDateActeFormateeTrait();

        $obj->setDateActeFormatee("dateActeFormatee");
        $this->assertEquals("dateActeFormatee", $obj->getDateActeFormatee());
    }
}
