<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\ExtraitImmatriculation;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Extrait immatriculation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class ExtraitImmatriculationTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ExtraitImmatriculation();

        $this->assertNull($obj->getToken());
    }
}
