<?php

declare(strict_types = 1);

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\RepertoireNationalMetiers;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Répertoire national des métiers test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class RepertoireNationalMetiersTest extends AbstractTestCase {

    /**
     * Test setChambreMetiers()
     *
     * @return void
     */
    public function testSetChambreMetiers(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setChambreMetiers("chambreMetiers");
        $this->assertEquals("chambreMetiers", $obj->getChambreMetiers());
    }

    /**
     * Test setDateCessationActivite()
     *
     * @return void
     */
    public function testSetDateCessationActivite(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setDateCessationActivite("dateCessationActivite");
        $this->assertEquals("dateCessationActivite", $obj->getDateCessationActivite());
    }

    /**
     * Test setDateImmatriculation()
     *
     * @return void
     */
    public function testSetDateImmatriculation(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setDateImmatriculation("dateImmatriculation");
        $this->assertEquals("dateImmatriculation", $obj->getDateImmatriculation());
    }

    /**
     * Test setDateRadiation()
     *
     * @return void
     */
    public function testSetDateRadiation(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setDateRadiation("dateRadiation");
        $this->assertEquals("dateRadiation", $obj->getDateRadiation());
    }

    /**
     * Test setDerniereMiseJour()
     *
     * @return void
     */
    public function testSetDerniereMiseJour(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setDerniereMiseJour("derniereMiseJour");
        $this->assertEquals("derniereMiseJour", $obj->getDerniereMiseJour());
    }

    /**
     * Test setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new RepertoireNationalMetiers();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepertoireNationalMetiers();

        $this->assertNull($obj->getDateDebutActivite());

        $this->assertNull($obj->getDateCessationActivite());
        $this->assertNull($obj->getDateImmatriculation());
        $this->assertNull($obj->getDateRadiation());
        $this->assertNull($obj->getChambreMetiers());
        $this->assertNull($obj->getDerniereMiseJour());
        $this->assertNull($obj->getQualification());
    }
}
