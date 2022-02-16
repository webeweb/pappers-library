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

use WBW\Library\Pappers\Model\Compte;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Compte test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class CompteTest extends AbstractTestCase {

    /**
     * Tests setAnneeCloture()
     *
     * @return void
     */
    public function testSetAnneeCloture(): void {

        $obj = new Compte();

        $obj->setAnneeCloture(1);
        $this->assertEquals(1, $obj->getAnneeCloture());
    }

    /**
     * Tests setConfidentialite()
     *
     * @return void
     */
    public function testSetConfidentialite(): void {

        $obj = new Compte();

        $obj->setConfidentialite(true);
        $this->assertTrue($obj->getConfidentialite());
    }

    /**
     * Tests setConfidentialiteCompteResultat()
     *
     * @return void
     */
    public function testSetConfidentialiteCompteResultat(): void {

        $obj = new Compte();

        $obj->setConfidentialiteCompteResultat(true);
        $this->assertTrue($obj->getConfidentialiteCompteResultat());
    }

    /**
     * Tests setDateCloture()
     *
     * @return void
     */
    public function testSetDateCloture(): void {

        $obj = new Compte();

        $obj->setDateCloture("dateCloture");
        $this->assertEquals("dateCloture", $obj->getDateCloture());
    }

    /**
     * Tests setTypeComptes()
     *
     * @return void
     */
    public function testSetTypeComptes(): void {

        $obj = new Compte();

        $obj->setTypeComptes("typeComptes");
        $this->assertEquals("typeComptes", $obj->getTypeComptes());
    }

    /**
     * Tests set()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Compte();

        $this->assertNull($obj->getDateDepot());
        $this->assertNull($obj->getDateDepotFormatee());
        $this->assertNull($obj->getDisponible());
        $this->assertNull($obj->getNomFichierPdf());
        $this->assertNull($obj->getToken());

        $this->assertNull($obj->getAnneeCloture());
        $this->assertNull($obj->getConfidentialite());
        $this->assertNull($obj->getConfidentialite());
        $this->assertNull($obj->getDateCloture());
        $this->assertNull($obj->getTypeComptes());
    }
}
