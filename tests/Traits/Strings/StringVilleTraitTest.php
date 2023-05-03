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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringVilleTrait;

/**
 * String ville trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringVilleTraitTest extends AbstractTestCase {

    /**
     * Test the setVille() method().
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new TestStringVilleTrait();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }
}
