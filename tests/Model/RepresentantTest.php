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

use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Représentant test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class RepresentantTest extends AbstractTestCase {

    /**
     * Tests the addEntreprise() method.
     *
     * @return void
     */
    public function testAddEntreprise(): void {

        // Set a Entreprise mock.
        $entreprise = new Entreprise();

        $obj = new Representant();

        $obj->addEntreprise($entreprise);
        $this->assertSame($entreprise, $obj->getEntreprises()[0]);
    }

    /**
     * Tests the setAdresseLigne3() method.
     *
     * @return void
     */
    public function testSetAdresseLigne3(): void {

        $obj = new Representant();

        $obj->setAdresseLigne3("adresseLigne3");
        $this->assertEquals("adresseLigne3", $obj->getAdresseLigne3());
    }

    /**
     * Tests the setAge() method.
     *
     * @return void
     */
    public function testSetAge(): void {

        $obj = new Representant();

        $obj->setAge(1);
        $this->assertEquals(1, $obj->getAge());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     */
    public function testSetDateNaissance(): void {

        $obj = new Representant();

        $obj->setDateNaissance("dateNaissance");
        $this->assertEquals("dateNaissance", $obj->getDateNaissance());
    }

    /**
     * Tests the setDatePrisePoste() method.
     *
     * @return void
     */
    public function testSetDatePrisePoste(): void {

        $obj = new Representant();

        $obj->setDatePrisePoste("datePrisePoste");
        $this->assertEquals("datePrisePoste", $obj->getDatePrisePoste());
    }

    /**
     * Tests the setNbEntreprisesTotal() method.
     *
     * @return void
     */
    public function testSetNbEntreprisesTotal(): void {

        $obj = new Representant();

        $obj->setNbEntreprisesTotal(1);
        $this->assertEquals(1, $obj->getNbEntreprisesTotal());
    }

    /**
     * Tests the setNomComplet() method.
     *
     * @return void
     */
    public function testSetNomComplet(): void {

        $obj = new Representant();

        $obj->setNomComplet("nomComplet");
        $this->assertEquals("nomComplet", $obj->getNomComplet());
    }

    /**
     * Tests the setPays() method.
     *
     * @return void
     */
    public function testSetPays(): void {

        $obj = new Representant();

        $obj->setPays("nom");
        $this->assertEquals("nom", $obj->getPays());
    }

    /**
     * Tests the setPaysNaissance() method.
     *
     * @return void
     */
    public function testSetPaysNaissance(): void {

        $obj = new Representant();

        $obj->setPaysNaissance("pays Naissance");
        $this->assertEquals("pays Naissance", $obj->getPaysNaissance());
    }

    /**
     * Tests the setQualite() method.
     *
     * @return void
     */
    public function testSetQualite(): void {

        $obj = new Representant();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Tests the setVilleNaissance() method.
     *
     * @return void
     */
    public function testSetVilleNaissance(): void {

        $obj = new Representant();

        $obj->setVilleNaissance("villeNaissance");
        $this->assertEquals("villeNaissance", $obj->getVilleNaissance());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Representant();

        $this->assertNull($obj->getAdresseLigne1());
        $this->assertNull($obj->getAdresseLigne2());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDateNaissanceFormate());
        $this->assertNull($obj->getMention());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPersonneMorale());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getVille());

        $this->assertNull($obj->getAdresseLigne3());
        $this->assertNull($obj->getAge());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDatePrisePoste());
        $this->assertEquals([], $obj->getEntreprises());
        $this->assertNull($obj->getNbEntreprisesTotal());
        $this->assertNull($obj->getNomComplet());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getVilleNaissance());
    }
}
