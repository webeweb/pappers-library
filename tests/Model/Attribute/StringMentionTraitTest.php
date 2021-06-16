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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringMentionTrait;

/**
 * String mention trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringMentionTraitTest extends AbstractTestCase {

    /**
     * Tests the setMention() method().
     *
     * @return void
     */
    public function testSetMention(): void {

        $obj = new TestStringMentionTrait();

        $obj->setMention("mention");
        $this->assertEquals("mention", $obj->getMention());
    }
}