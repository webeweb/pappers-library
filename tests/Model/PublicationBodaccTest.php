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

use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Publication BODACC test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class PublicationBodaccTest extends AbstractTestCase {

    /**
     * Tests the setActivite() method.
     *
     * @return void
     */
    public function testSetActivite(): void {

        $obj = new PublicationBodacc();

        $obj->setActivite("activite");
        $this->assertEquals("activite", $obj->getActivite());
    }

    /**
     * Tests the set() method.
     *
     * @return void
     */
    public function testSetAdministration(): void {

        $obj = new PublicationBodacc();

        $obj->setAdministration("administration");
        $this->assertEquals("administration", $obj->getAdministration());
    }

    /**
     * Tests the setBodacc() method.
     *
     * @return void
     */
    public function testSetBodacc(): void {

        $obj = new PublicationBodacc();

        $obj->setBodacc("bodacc");
        $this->assertEquals("bodacc", $obj->getBodacc());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate(): void {

        $obj = new PublicationBodacc();

        $obj->setDate("date");
        $this->assertEquals("date", $obj->getDate());
    }

    /**
     * Tests the setDateDebutActivite() method.
     *
     * @return void
     */
    public function testSetDateDebutActivite(): void {

        $obj = new PublicationBodacc();

        $obj->setDateDebutActivite("dateDebutActivite");
        $this->assertEquals("dateDebutActivite", $obj->getDateDebutActivite());
    }

    /**
     * Tests the setDenomination() method.
     *
     * @return void
     */
    public function testSetDenomination(): void {

        $obj = new PublicationBodacc();

        $obj->setDenomination("denomination");
        $this->assertEquals("denomination", $obj->getDenomination());
    }

    /**
     * Tests the setNomEntreprise() method.
     *
     * @return void
     */
    public function testSetNomEntreprise(): void {

        $obj = new PublicationBodacc();

        $obj->setNomEntreprise("nomEntreprise");
        $this->assertEquals("nomEntreprise", $obj->getNomEntreprise());
    }

    /**
     * Tests the setNumeroAnnonce() method.
     *
     * @return void
     */
    public function testSetNumeroAnnonce(): void {

        $obj = new PublicationBodacc();

        $obj->setNumeroAnnonce("numeroAnnonce");
        $this->assertEquals("numeroAnnonce", $obj->getNumeroAnnonce());
    }

    /**
     * Tests the setNumeroParution() method.
     *
     * @return void
     */
    public function testSetNumeroParution(): void {

        $obj = new PublicationBodacc();

        $obj->setNumeroParution("numeroParution");
        $this->assertEquals("numeroParution", $obj->getNumeroParution());
    }

    /**
     * Tests the setRcs() method.
     *
     * @return void
     */
    public function testSetRcs(): void {

        $obj = new PublicationBodacc();

        $obj->setRcs("rcs");
        $this->assertEquals("rcs", $obj->getRcs());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PublicationBodacc();

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCapital());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPersonneMorale());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getActivite());
        $this->assertNull($obj->getAdministration());
        $this->assertNull($obj->getBodacc());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateDebutActivite());
        $this->assertNull($obj->getDenomination());
        $this->assertNull($obj->getNomEntreprise());
        $this->assertNull($obj->getNumeroAnnonce());
        $this->assertNull($obj->getNumeroParution());
        $this->assertNull($obj->getRcs());
    }
}
