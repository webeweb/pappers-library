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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestIntegerParPageTrait;

/**
 * Integer par page trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class IntegerParPageTraitTest extends AbstractTestCase {

    /**
     * Tests the setParPage() method().
     *
     * @return void
     */
    public function testSetParPage(): void {

        $obj = new TestIntegerParPageTrait();

        $obj->setParPage(1);
        $this->assertEquals(1, $obj->getParPage());
    }
}