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

use WBW\Library\Pappers\Model\BeneficiaireEffectif;
use WBW\Library\Pappers\Model\DetailsDirects;
use WBW\Library\Pappers\Model\DetailsIndirects;
use WBW\Library\Pappers\Model\DetailsPartsVocationTitulaire;
use WBW\Library\Pappers\Model\DetailsSocieteGestion;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Bénéficiaire effectif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class BeneficiaireEffectifTest extends AbstractTestCase {

    /**
     * Tests the setBeneficiaireRepresentantLegal() method.
     *
     * @return void
     */
    public function testSetBeneficiaireRepresentantLegal(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setBeneficiaireRepresentantLegal(true);
        $this->assertTrue($obj->getBeneficiaireRepresentantLegal());
    }

    /**
     * Tests the setDateGreffe() method.
     *
     * @return void
     */
    public function testSetDateGreffe(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setDateGreffe("dateGreffe");
        $this->assertEquals("dateGreffe", $obj->getDateGreffe());
    }

    /**
     * Tests the setDateNaissanceCompleteFormatee() method.
     *
     * @return void
     */
    public function testSetDateNaissanceCompleteFormatee(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setDateNaissanceCompleteFormatee("dateNaissanceCompleteFormatee");
        $this->assertEquals("dateNaissanceCompleteFormatee", $obj->getDateNaissanceCompleteFormatee());
    }

    /**
     * Tests the setDetailsPartsDirectes() method.
     *
     * @return void
     */
    public function testSetDetailsPartsDirectes(): void {

        // Set a Détails parts directes mock.
        $detailsPartsDirectes = new DetailsDirects();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsPartsDirectes($detailsPartsDirectes);
        $this->assertSame($detailsPartsDirectes, $obj->getDetailsPartsDirectes());
    }

    /**
     * Tests the setDetailsPartsIndirectes() method.
     *
     * @return void
     */
    public function testSetDetailsPartsIndirectes(): void {

        // Set a Détails parts indirectes mock.
        $detailsPartsIndirectes = new DetailsIndirects();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsPartsIndirectes($detailsPartsIndirectes);
        $this->assertSame($detailsPartsIndirectes, $obj->getDetailsPartsIndirectes());
    }

    /**
     * Tests the setDetailsPartsVocationTitulaire() method.
     *
     * @return void
     */
    public function testSetDetailsPartsVocationTitulaire(): void {

        // Set a Détails parts vocation titulaire mock.
        $detailsPartsVocationTitulaire = new DetailsPartsVocationTitulaire();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsPartsVocationTitulaire($detailsPartsVocationTitulaire);
        $this->assertSame($detailsPartsVocationTitulaire, $obj->getDetailsPartsVocationTitulaire());
    }

    /**
     * Tests the setDetailsSocieteGestion() method.
     *
     * @return void
     */
    public function testSetDetailsSocieteGestion(): void {

        // Set a Détails société gestion mock.
        $detailsSocieteGestion = new DetailsSocieteGestion();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsSocieteGestion($detailsSocieteGestion);
        $this->assertSame($detailsSocieteGestion, $obj->getDetailsSocieteGestion());
    }

    /**
     * Tests the setDetailsVotesDirects() method.
     *
     * @return void
     */
    public function testSetDetailsVotesDirects(): void {

        // Set a Détails votes directs mock.
        $detailsVotesDirects = new DetailsDirects();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsVotesDirects($detailsVotesDirects);
        $this->assertSame($detailsVotesDirects, $obj->getDetailsVotesDirects());
    }

    /**
     * Tests the setDetailsVotesIndirects() method.
     *
     * @return void
     */
    public function testSetDetailsVotesIndirects(): void {

        // Set a Détails votes indirects mock.
        $detailsVotesIndirects = new DetailsIndirects();

        $obj = new BeneficiaireEffectif();

        $obj->setDetailsVotesIndirects($detailsVotesIndirects);
        $this->assertSame($detailsVotesIndirects, $obj->getDetailsVotesIndirects());
    }

    /**
     * Tests the setDetentionAutresMoyensControle() method.
     *
     * @return void
     */
    public function testSetDetentionAutresMoyensControle(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setDetentionAutresMoyensControle(true);
        $this->assertTrue($obj->getDetentionAutresMoyensControle());
    }

    /**
     * Tests the setDetentionPouvoirDecisionAg() method.
     *
     * @return void
     */
    public function testSetDetentionPouvoirDecisionAg(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setDetentionPouvoirDecisionAg(true);
        $this->assertTrue($obj->getDetentionPouvoirDecisionAg());
    }

    /**
     * Tests the setDetentionPouvoirNomMembreConseilAdministration() method.
     *
     * @return void
     */
    public function testSetDetentionPouvoirNomMembreConseilAdministration(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setDetentionPouvoirNomMembreConseilAdministration(true);
        $this->assertTrue($obj->getDetentionPouvoirNomMembreConseilAdministration());
    }

    /**
     * Tests the setNomUsage() method.
     *
     * @return void
     */
    public function testSetNomUsage(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setNomUsage("nomUsage");
        $this->assertEquals("nomUsage", $obj->getNomUsage());
    }

    /**
     * Tests the setPourcentageParts() method.
     *
     * @return void
     */
    public function testSetPourcentageParts(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentageParts(1);
        $this->assertEquals(1, $obj->getPourcentageParts());
    }

    /**
     * Tests the setPourcentagePartsDirectes() method.
     *
     * @return void
     */
    public function testSetPourcentagePartsDirectes(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentagePartsDirectes(1);
        $this->assertEquals(1, $obj->getPourcentagePartsDirectes());
    }

    /**
     * Tests the setPourcentagePartsIndirectes() method.
     *
     * @return void
     */
    public function testSetPourcentagePartsIndirectes(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentagePartsIndirectes(1);
        $this->assertEquals(1, $obj->getPourcentagePartsIndirectes());
    }

    /**
     * Tests the setPourcentagePartsVocationTitulaire() method.
     *
     * @return void
     */
    public function testSetPourcentagePartsVocationTitulaire(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentagePartsVocationTitulaire(1);
        $this->assertEquals(1, $obj->getPourcentagePartsVocationTitulaire());
    }

    /**
     * Tests the setPourcentageVotes() method.
     *
     * @return void
     */
    public function testSetPourcentageVotes(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentageVotes(1);
        $this->assertEquals(1, $obj->getPourcentageVotes());
    }

    /**
     * Tests the setPourcentageVotesDirects() method.
     *
     * @return void
     */
    public function testSetPourcentageVotesDirects(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentageVotesDirects(1);
        $this->assertEquals(1, $obj->getPourcentageVotesDirects());
    }

    /**
     * Tests the setPourcentageVotesIndirects() method.
     *
     * @return void
     */
    public function testSetPourcentageVotesIndirects(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setPourcentageVotesIndirects(1);
        $this->assertEquals(1, $obj->getPourcentageVotesIndirects());
    }

    /**
     * Tests the setRepresentantLegalPlacementSansGestionDelegation() method.
     *
     * @return void
     */
    public function testSetRepresentantLegalPlacementSansGestionDelegation(): void {

        $obj = new BeneficiaireEffectif();

        $obj->setRepresentantLegalPlacementSansGestionDelegation(true);
        $this->assertTrue($obj->getRepresentantLegalPlacementSansGestionDelegation());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BeneficiaireEffectif();

        $this->assertNull($obj->getAdresseLigne1());
        $this->assertNull($obj->getAdresseLigne2());
        $this->assertNull($obj->getAdresseLigne3());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDateNaissanceFormatee());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPseudonyme());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getVille());
        $this->assertNull($obj->getVilleNaissance());

        $this->assertNull($obj->getBeneficiaireRepresentantLegal());
        $this->assertNull($obj->getDateGreffe());
        $this->assertNull($obj->getDateNaissanceCompleteFormatee());
        $this->assertNull($obj->getDetailsPartsDirectes());
        $this->assertNull($obj->getDetailsPartsIndirectes());
        $this->assertNull($obj->getDetailsPartsVocationTitulaire());
        $this->assertNull($obj->getDetailsVotesDirects());
        $this->assertNull($obj->getDetailsVotesIndirects());
        $this->assertNull($obj->getDetailsSocieteGestion());
        $this->assertNull($obj->getDetentionPouvoirDecisionAg());
        $this->assertNull($obj->getDetentionPouvoirNomMembreConseilAdministration());
        $this->assertNull($obj->getDetentionAutresMoyensControle());
        $this->assertNull($obj->getNomUsage());
        $this->assertNull($obj->getPourcentageParts());
        $this->assertNull($obj->getPourcentagePartsDirectes());
        $this->assertNull($obj->getPourcentagePartsIndirectes());
        $this->assertNull($obj->getPourcentagePartsVocationTitulaire());
        $this->assertNull($obj->getPourcentageVotes());
        $this->assertNull($obj->getPourcentageVotesDirects());
        $this->assertNull($obj->getPourcentageVotesIndirects());
        $this->assertNull($obj->getRepresentantLegalPlacementSansGestionDelegation());
    }
}
