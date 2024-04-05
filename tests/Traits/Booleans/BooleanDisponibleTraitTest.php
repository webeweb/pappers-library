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

namespace WBW\Library\Pappers\Tests\Traits\Booleans;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Booleans\TestBooleanDisponibleTrait;

/**
 * Boolean disponible trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Booleans
 */
class BooleanDisponibleTraitTest extends AbstractTestCase {

    /**
     * Test setDisponible() method().
     *
     * @return void
     */
    public function testSetDisponible(): void {

        $obj = new TestBooleanDisponibleTrait();

        $obj->setDisponible(true);
        $this->assertTrue($obj->getDisponible());
    }
}
