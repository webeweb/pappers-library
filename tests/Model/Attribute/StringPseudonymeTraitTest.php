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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringPseudonymeTrait;

/**
 * String pseudonyme trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringPseudonymeTraitTest extends AbstractTestCase {

    /**
     * Tests the setPseudonyme() method().
     *
     * @return void
     */
    public function testSetPseudonyme(): void {

        $obj = new TestStringPseudonymeTrait();

        $obj->setPseudonyme("pseudonyme");
        $this->assertEquals("pseudonyme", $obj->getPseudonyme());
    }
}