<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Arrays;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Arrays\TestArrayMentionsTrait;

/**
 * Array mentions trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Arrays
 */
class ArrayMentionsTraitTest extends AbstractTestCase {

    /**
     * Test setMentions() method().
     *
     * @return void
     */
    public function testSetMentions(): void {

        $obj = new TestArrayMentionsTrait();

        $obj->setMentions(["mentions"]);
        $this->assertEquals(["mentions"], $obj->getMentions());
    }
}
