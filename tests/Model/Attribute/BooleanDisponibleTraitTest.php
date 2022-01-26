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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestBooleanDisponibleTrait;

/**
 * Boolean disponible trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class BooleanDisponibleTraitTest extends AbstractTestCase {

    /**
     * Tests the setDisponible() method().
     *
     * @return void
     */
    public function testSetDisponible(): void {

        $obj = new TestBooleanDisponibleTrait();

        $obj->setDisponible(true);
        $this->assertTrue($obj->getDisponible());
    }
}
