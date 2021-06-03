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

use WBW\Library\Pappers\Model\DetailsIndivision;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Détails indivision test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DetailsIndivisionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailsIndivision();

        $this->assertNull($obj->getPourcentageNuePropriete());
        $this->assertNull($obj->getPourcentagePleinePropriete());
        $this->assertNull($obj->getPourcentageUsufruit());
    }
}
