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

use WBW\Library\Pappers\Model\DetailsIndirects;
use WBW\Library\Pappers\Model\DetailsIndivision;
use WBW\Library\Pappers\Model\DetailsPersonneMorale;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Détails indirects test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DetailsIndirectsTest extends AbstractTestCase {

    /**
     * Test setDetailsIndivision()
     *
     * @return void
     */
    public function testSetDetailsIndivision(): void {

        // Set a Details indivision mock.
        $detailsIndivision = new DetailsIndivision();

        $obj = new DetailsIndirects();

        $obj->setDetailsIndivision($detailsIndivision);
        $this->assertSame($detailsIndivision, $obj->getDetailsIndivision());
    }

    /**
     * Test setDetailsPersonneMorale()
     *
     * @return void
     */
    public function testSetDetailsPersonneMorale(): void {

        // Set a Details personne morale mock.
        $detailsPersonneMorale = new DetailsPersonneMorale();

        $obj = new DetailsIndirects();

        $obj->setDetailsPersonneMorale($detailsPersonneMorale);
        $this->assertSame($detailsPersonneMorale, $obj->getDetailsPersonneMorale());
    }

    /**
     * Test setPourcentageIndivision()
     *
     * @return void
     */
    public function testSetPourcentageIndivision(): void {

        $obj = new DetailsIndirects();

        $obj->setPourcentageIndivision(1);
        $this->assertEquals(1, $obj->getPourcentageIndivision());
    }

    /**
     * Test setPourcentagePersonneMorale()
     *
     * @return void
     */
    public function testSetPourcentagePersonneMorale(): void {

        $obj = new DetailsIndirects();

        $obj->setPourcentagePersonneMorale(1);
        $this->assertEquals(1, $obj->getPourcentagePersonneMorale());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailsIndirects();

        $this->assertNull($obj->getDetailsIndivision());
        $this->assertNull($obj->getDetailsPersonneMorale());
        $this->assertNull($obj->getPourcentageIndivision());
        $this->assertNull($obj->getPourcentagePersonneMorale());
    }
}
