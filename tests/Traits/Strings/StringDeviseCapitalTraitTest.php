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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDeviseCapitalTrait;

/**
 * String devise capital trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDeviseCapitalTraitTest extends AbstractTestCase {

    /**
     * Test setDeviseCapital() method().
     *
     * @return void
     */
    public function testSetDeviseCapital(): void {

        $obj = new TestStringDeviseCapitalTrait();

        $obj->setDeviseCapital("deviseCapital");
        $this->assertEquals("deviseCapital", $obj->getDeviseCapital());
    }
}
