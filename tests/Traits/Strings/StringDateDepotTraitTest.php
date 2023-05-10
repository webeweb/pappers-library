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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDateDepotTrait;

/**
 * String date dépôt trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDateDepotTraitTest extends AbstractTestCase {

    /**
     * Test setDateDepot() method().
     *
     * @return void
     */
    public function testSetDateDepot(): void {

        $obj = new TestStringDateDepotTrait();

        $obj->setDateDepot("dateDepot");
        $this->assertEquals("dateDepot", $obj->getDateDepot());
    }
}
