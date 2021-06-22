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

use WBW\Library\Pappers\Model\Etablissement;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Etablissement test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class EtablissementTest extends AbstractTestCase {

    /**
     * Tests the setComplementAdresse() method.
     *
     * @return void
     */
    public function testSetComplementAdresse(): void {

        $obj = new Etablissement();

        $obj->setComplementAdresse("complementAdresse");
        $this->assertEquals("complementAdresse", $obj->getComplementAdresse());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     */
    public function testSetDateCreation(): void {

        $obj = new Etablissement();

        $obj->setDateCreation("dateCreation");
        $this->assertEquals("dateCreation", $obj->getDateCreation());
    }

    /**
     * Tests the setDomiciliation() method.
     *
     * @return void
     */
    public function testSetDomiciliation(): void {

        $obj = new Etablissement();

        $obj->setDomiciliation("domiciliation");
        $this->assertEquals("domiciliation", $obj->getDomiciliation());
    }

    /**
     * Tests the setEtablissementCesse() method.
     *
     * @return void
     */
    public function testSetEtablissementCesse(): void {

        $obj = new Etablissement();

        $obj->setEtablissementCesse(true);
        $this->assertTrue($obj->getEtablissementCesse());
    }

    /**
     * Tests the setEtablissementEmployeur() method.
     *
     * @return void
     */
    public function testSetEtablissementEmployeur(): void {

        $obj = new Etablissement();

        $obj->setEtablissementEmployeur(true);
        $this->assertTrue($obj->getEtablissementEmployeur());
    }

    /**
     * Tests the setIndiceRepetition() method.
     *
     * @return void
     */
    public function testSetIndiceRepetition(): void {

        $obj = new Etablissement();

        $obj->setIndiceRepetition("indiceRepetition");
        $this->assertEquals("indiceRepetition", $obj->getIndiceRepetition());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Etablissement();

        $obj->setLatitude(0.1);
        $this->assertEquals(0.1, $obj->getLatitude());
    }

    /**
     * Tests the setLibelleCodeNaf() method.
     *
     * @return void
     */
    public function testSetLibelleCodeNaf(): void {

        $obj = new Etablissement();

        $obj->setLibelleCodeNaf("libelleCodeNaf");
        $this->assertEquals("libelleCodeNaf", $obj->getLibelleCodeNaf());
    }

    /**
     * Tests the setLibelleVoie() method.
     *
     * @return void
     */
    public function testSetLibelleVoie(): void {

        $obj = new Etablissement();

        $obj->setLibelleVoie("libelleVoie");
        $this->assertEquals("libelleVoie", $obj->getLibelleVoie());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Etablissement();

        $obj->setLongitude(0.1);
        $this->assertEquals(0.1, $obj->getLongitude());
    }

    /**
     * Tests the setNumeroVoie() method.
     *
     * @return void
     */
    public function testSetNumeroVoie(): void {

        $obj = new Etablissement();

        $obj->setNumeroVoie(1);
        $this->assertEquals(1, $obj->getNumeroVoie());
    }

    /**
     * Tests the setSiege() method.
     *
     * @return void
     */
    public function testSetSiege(): void {

        $obj = new Etablissement();

        $obj->setSiege(true);
        $this->assertTrue($obj->getSiege());
    }

    /**
     * Tests the setTypeVoie() method.
     *
     * @return void
     */
    public function testSetTypeVoie(): void {

        $obj = new Etablissement();

        $obj->setTypeVoie("typeVoie");
        $this->assertEquals("typeVoie", $obj->getTypeVoie());
    }

    /**
     * Tests the set() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Etablissement();

        $this->assertNull($obj->getAdresseLigne1());
        $this->assertNull($obj->getAdresseLigne2());
        $this->assertNull($obj->getAnneeEffectif());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDateCessation());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifMax());
        $this->assertNull($obj->getEffectifMin());
        $this->assertNull($obj->getNic());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSiretFormate());
        $this->assertNull($obj->getTrancheEffectif());
        $this->assertNull($obj->getVille());

        $this->assertNull($obj->getComplementAdresse());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDomiciliation());
        $this->assertNull($obj->getEtablissementCesse());
        $this->assertNull($obj->getEtablissementEmployeur());
        $this->assertNull($obj->getIndiceRepetition());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLibelleCodeNaf());
        $this->assertNull($obj->getLibelleVoie());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getNumeroVoie());
        $this->assertNull($obj->getSiege());
        $this->assertNull($obj->getTypeVoie());
    }
}
