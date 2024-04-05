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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDateActeTrait;

/**
 * String date acte trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDateActeTraitTest extends AbstractTestCase {

    /**
     * Test setDateActe() method().
     *
     * @return void
     */
    public function testSetDateActe(): void {

        $obj = new TestStringDateActeTrait();

        $obj->setDateActe("dateActe");
        $this->assertEquals("dateActe", $obj->getDateActe());
    }
}
