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

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\ProcedureCollective;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Procédure collective test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class ProcedureCollectiveTest extends AbstractTestCase {

    /**
     * Test setDateDebut()
     *
     * @return void
     */
    public function testSetDateDebut(): void {

        $obj = new ProcedureCollective();

        $obj->setDateDebut("dateDebut");
        $this->assertEquals("dateDebut", $obj->getDateDebut());
    }

    /**
     * Test setDateFin()
     *
     * @return void
     */
    public function testSetDateFin(): void {

        $obj = new ProcedureCollective();

        $obj->setDateFin("dateFin");
        $this->assertEquals("dateFin", $obj->getDateFin());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProcedureCollective();

        $this->assertNull($obj->getType());

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertEquals([], $obj->getPublicationsBodacc());
    }
}
