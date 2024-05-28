<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\Domiciliation;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Domiciliation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DomiciliationTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Domiciliation();

        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getSiren());
    }
}
