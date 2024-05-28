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

use WBW\Library\Pappers\Model\Domiciliation;
use WBW\Library\Pappers\Model\Etablissement;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Etablissement test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class EtablissementTest extends AbstractTestCase {

    /**
     * Test setComplementAdresse()
     *
     * @return void
     */
    public function testSetComplementAdresse(): void {

        $obj = new Etablissement();

        $obj->setComplementAdresse("complementAdresse");
        $this->assertEquals("complementAdresse", $obj->getComplementAdresse());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     */
    public function testSetDateCreation(): void {

        $obj = new Etablissement();

        $obj->setDateCreation("dateCreation");
        $this->assertEquals("dateCreation", $obj->getDateCreation());
    }

    /**
     * Test setDomiciliation()
     *
     * @return void
     */
    public function testSetDomiciliation(): void {

        // Set a Domiciliation mock.
        $domiciliation = new Domiciliation();

        $obj = new Etablissement();

        $obj->setDomiciliation($domiciliation);
        $this->assertSame($domiciliation, $obj->getDomiciliation());
    }

    /**
     * Test setEtablissementCesse()
     *
     * @return void
     */
    public function testSetEtablissementCesse(): void {

        $obj = new Etablissement();

        $obj->setEtablissementCesse(true);
        $this->assertTrue($obj->getEtablissementCesse());
    }

    /**
     * Test setEtablissementEmployeur()
     *
     * @return void
     */
    public function testSetEtablissementEmployeur(): void {

        $obj = new Etablissement();

        $obj->setEtablissementEmployeur(true);
        $this->assertTrue($obj->getEtablissementEmployeur());
    }

    /**
     * Test setIndiceRepetition()
     *
     * @return void
     */
    public function testSetIndiceRepetition(): void {

        $obj = new Etablissement();

        $obj->setIndiceRepetition("indiceRepetition");
        $this->assertEquals("indiceRepetition", $obj->getIndiceRepetition());
    }

    /**
     * Test setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Etablissement();

        $obj->setLatitude(0.1);
        $this->assertEquals(0.1, $obj->getLatitude());
    }

    /**
     * Test setLibelleCodeNaf()
     *
     * @return void
     */
    public function testSetLibelleCodeNaf(): void {

        $obj = new Etablissement();

        $obj->setLibelleCodeNaf("libelleCodeNaf");
        $this->assertEquals("libelleCodeNaf", $obj->getLibelleCodeNaf());
    }

    /**
     * Test setLibelleVoie()
     *
     * @return void
     */
    public function testSetLibelleVoie(): void {

        $obj = new Etablissement();

        $obj->setLibelleVoie("libelleVoie");
        $this->assertEquals("libelleVoie", $obj->getLibelleVoie());
    }

    /**
     * Test setLongitude()
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Etablissement();

        $obj->setLongitude(0.1);
        $this->assertEquals(0.1, $obj->getLongitude());
    }

    /**
     * Test setNumeroVoie()
     *
     * @return void
     */
    public function testSetNumeroVoie(): void {

        $obj = new Etablissement();

        $obj->setNumeroVoie(1);
        $this->assertEquals(1, $obj->getNumeroVoie());
    }

    /**
     * Test setSiege()
     *
     * @return void
     */
    public function testSetSiege(): void {

        $obj = new Etablissement();

        $obj->setSiege(true);
        $this->assertTrue($obj->getSiege());
    }

    /**
     * Test setTypeVoie()
     *
     * @return void
     */
    public function testSetTypeVoie(): void {

        $obj = new Etablissement();

        $obj->setTypeVoie("typeVoie");
        $this->assertEquals("typeVoie", $obj->getTypeVoie());
    }

    /**
     * Test set()
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
