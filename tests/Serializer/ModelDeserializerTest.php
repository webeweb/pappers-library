<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Serializer;

use WBW\Library\Pappers\Serializer\ModelDeserializer;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Model deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Serializer
 */
class ModelDeserializerTest extends AbstractTestCase {

    /**
     * JSON.
     *
     * @var string
     */
    private $json;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $data = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeEntreprise.json");

        $this->json = json_decode($data, true);
    }

    /**
     * Tests the deserializeActe() method.
     *
     * @return void
     */
    public function testDeserializeActe(): void {

        $res = ModelDeserializer::deserializeActe($this->json["depots_actes"][0]["actes"][0]);

        $this->assertEquals("Décision(s) de l'associé unique", $res->getType());
        $this->assertEquals("Augmentation du capital social", $res->getDecision());
        $this->assertEquals("2020-03-04", $res->getDateActe());
        $this->assertEquals("04/03/2020", $res->getDateActeFormate());
    }

    /**
     * Tests the deserializeBeneficiaireEffectif() method.
     *
     * @return void
     */
    public function testDeserializeBeneficiaireEffectif(): void {

        $res = ModelDeserializer::deserializeBeneficiaireEffectif($this->json["beneficiaires_effectifs"][0]);

        $this->assertEquals("2019-08-24", $res->getDateGreffe());
        $this->assertEquals("string", $res->getNom());
        $this->assertEquals("string", $res->getNomUsage());
        $this->assertEquals("string", $res->getPrenom());
        $this->assertEquals("string", $res->getPseudonyme());
        $this->assertEquals("string", $res->getDateNaissanceFormate());
        $this->assertEquals("string", $res->getNationalite());
        $this->assertEquals(0, $res->getPourcentageParts());
        $this->assertEquals(0, $res->getPourcentagePartsDirectes());
        $this->assertEquals(0, $res->getPourcentagePartsIndirectes());
        $this->assertEquals(0, $res->getPourcentagePartsVocationTitulaire());
        $this->assertNotNull($res->getDetailsPartsDirectes());
        $this->assertNotNull($res->getDetailsPartsIndirectes());
        $this->assertNotNull($res->getDetailsPartsVocationTitulaire());
        $this->assertEquals(0, $res->getPourcentageVotes());
        $this->assertEquals(0, $res->getPourcentageVotesDirects());
        $this->assertEquals(0, $res->getPourcentageVotesIndirects());
        $this->assertNotNull($res->getDetailsVotesDirects());
        $this->assertNotNull($res->getDetailsVotesIndirects());
        $this->assertNotNull($res->getDetailsSocieteGestion());
        $this->assertTrue($res->getDetentionPouvoirDecisionAg());
        $this->assertTrue($res->getDetentionPouvoirNomMembreConseilAdministration());
        $this->assertTrue($res->getDetentionAutresMoyensControle());
        $this->assertTrue($res->getBeneficiaireRepresentantLegal());
        $this->assertTrue($res->getRepresentantLegalPlacementSansGestionDelegation());
    }

    /**
     * Tests the deserializeCompte() method.
     *
     * @return void
     */
    public function testDeserializeCompte(): void {

        $res = ModelDeserializer::deserializeCompte($this->json["comptes"][0]);

        $this->assertEquals("2020-07-16", $res->getDateDepot());
        $this->assertEquals("16/07/2020", $res->getDateDepotFormate());
        $this->assertEquals("2019-12-31", $res->getDateCloture());
        $this->assertEquals(2019, $res->getAnneeCloture());
        $this->assertTrue($res->getConfidentialite());
        $this->assertTrue($res->getConfidentialiteCompteResultat());
        $this->assertTrue($res->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Comptes 2019.pdf", $res->getNomFichierPdf());
        $this->assertEquals("QzQ0MzA2MTg0MTIwMjAwNzE2", $res->getToken());
    }

    /**
     * Tests the deserializeConventionCollective() method.
     *
     * @return void
     */
    public function testDeserializeConventionCollective(): void {

        $res = ModelDeserializer::deserializeConventionCollective($this->json["conventions_collectives"][0]);

        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $res->getNom());
        $this->assertEquals(1486, $res->getIdcc());
        $this->assertTrue($res->getConfirmee());
    }

    /**
     * Tests the deserializeDepotActe() method.
     *
     * @return void
     */
    public function testDeserializeDepotActe(): void {

        $res = ModelDeserializer::deserializeDepotActe($this->json["depots_actes"][0]);

        $this->assertEquals("2020-04-07", $res->getDateDepot());
        $this->assertEquals("07/04/2020", $res->getDateDepotFormate());
        $this->assertTrue($res->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Actes du 07-04-2020.pdf", $res->getNomFichierPdf());
        $this->assertEquals("QTQ0MzA2MTg0MTIwMjAwNDA3RMOpY2lzaW9uKHMpIGRlIGwnYXNzb2Npw6kgdW5pcXVl", $res->getToken());
        $this->assertCount(1, $res->getActes());
    }

    /**
     * Tests the deserializeDetailsDirects() method.
     *
     * @return void
     */
    public function testDeserializeDetailsDirects(): void {

        $res = ModelDeserializer::deserializeDetailsDirects($this->json["beneficiaires_effectifs"][0]["details_votes_directs"]);

        $this->assertEquals(0, $res->getPourcentagePleinePropriete());
        $this->assertEquals(0, $res->getPourcentageNuePropriete());
        $this->assertEquals(0, $res->getPourcentageUsufruit());
    }

    /**
     * Tests the deserializeDetailsIndirects() method.
     *
     * @return void
     */
    public function testDeserializeDetailsIndirects(): void {

        $res = ModelDeserializer::deserializeDetailsIndirects($this->json["beneficiaires_effectifs"][0]["details_votes_indirects"]);

        $this->assertEquals(0, $res->getPourcentageIndivision());
        $this->assertEquals(0, $res->getPourcentagePersonneMorale());
        $this->assertNotNull($res->getDetailsIndivision());
        $this->assertNotNull($res->getDetailsPersonneMorale());
    }

    /**
     * Tests the deserializeDetailsIndivision() method.
     *
     * @return void
     */
    public function testDeserializeDetailsIndivision(): void {

        $res = ModelDeserializer::deserializeDetailsIndivision($this->json["beneficiaires_effectifs"][0]["details_votes_indirects"]["details_en_indivision"]);

        $this->assertEquals(0, $res->getPourcentagePleinePropriete());
        $this->assertEquals(0, $res->getPourcentageNuePropriete());
        $this->assertEquals(0, $res->getPourcentageUsufruit());
    }

    /**
     * Tests the deserializeDetailsPartsVocationTitulaire() method.
     *
     * @return void
     */
    public function testDeserializeDetailsPartsVocationTitulaire(): void {

        $res = ModelDeserializer::deserializeDetailsPartsVocationTitulaire($this->json["beneficiaires_effectifs"][0]["details_parts_vocation_titulaire"]);

        $this->assertEquals(0, $res->getPourcentageDirectes());
        $this->assertEquals(0, $res->getPourcentageIndirectes());
        $this->assertNotNull($res->getDetailsDirectes());
        $this->assertNotNull($res->getDetailsIndirectes());
    }

    /**
     * Tests the deserializeDetailsPersonneMorale() method.
     *
     * @return void
     */
    public function testDeserializeDetailsPersonneMorale(): void {

        $res = ModelDeserializer::deserializeDetailsPersonneMorale($this->json["beneficiaires_effectifs"][0]["details_votes_indirects"]["details_en_personne_morale"]);

        $this->assertEquals(0, $res->getPourcentagePleinePropriete());
        $this->assertEquals(0, $res->getPourcentageNuePropriete());
        $this->assertEquals(0, $res->getPourcentageUsufruit());
    }

    /**
     * Tests the deserializeDetailsSocieteGestion() method.
     *
     * @return void
     */
    public function testDeserializeDetailsSocieteGestion(): void {

        $res = ModelDeserializer::deserializeDetailsSocieteGestion($this->json["beneficiaires_effectifs"][0]["details_societe_de_gestion"]);

        $this->assertEquals("string", $res->getNom());
        $this->assertEquals("string", $res->getSiren());
        $this->assertEquals("string", $res->getGreffe());
        $this->assertEquals("string", $res->getAdresse());
        $this->assertEquals("string", $res->getCodePostal());
        $this->assertEquals("string", $res->getVille());
    }

    /**
     * Tests the deserializeEntreprise() method.
     *
     * @return void
     */
    public function testDeserializeEntreprise(): void {

        $res = ModelDeserializer::deserializeEntreprise($this->json);

        $this->assertEquals("443061841", $res->getSiren());
        $this->assertEquals("443 061 841", $res->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getNomEntreprise());
        $this->assertTrue($res->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getDenomination());
        $this->assertNull($res->getNom());
        $this->assertNull($res->getPrenom());
        $this->assertNull($res->getSexe());
        $this->assertEquals("70.10Z", $res->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getDomaineActivite());
        $this->assertCount(1, $res->getConventionCollectives());
        $this->assertEquals("2002-05-16", $res->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getDateCreationFormate());
        $this->assertFalse($res->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getDateCessation());
        $this->assertTrue($res->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getEffectif());
        $this->assertEquals(500, $res->getEffectifMin());
        $this->assertEquals(999, $res->getEffectifMax());
        $this->assertEquals("41", $res->getTrancheEffectif());
        $this->assertEquals(2017, $res->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getDernierTraitement());
        $this->assertNotNull($res->getSiege());
        $this->assertEquals("Fourniture de services et/ou conseils relatifs aux logiciels au réseau internet aux réseaux télématiques ou en ligne notamment L'intermediation en matière de vente de publicité en ligne la promotion sous toutes ses formes de la publicité en ligne la promotion directe de produits et services et la mise en oeuvre de centres de traitement de l'information", $res->getObjetSocial());
        $this->assertEquals(464884017, $res->getCapital());
        $this->assertEquals("464 884 017,00 €", $res->getCapitalFormate());
        $this->assertNull($res->getCapitalActuelVariable());
        $this->assertEquals("Euros", $res->getDeviseCapital());
        $this->assertEquals("464884017 R.C.S. Paris", $res->getNumeroRcs());
        $this->assertNull($res->getDateClotureExercice());
        $this->assertNull($res->getDateClotureExerciceExceptionnelle());
        $this->assertNull($res->getDateClotureExerciceExceptionnelleFormate());
        $this->assertNull($res->getProchaineDateClotureExercice());
        $this->assertNull($res->getProchaineDateClotureExerciceFormate());
        $this->assertTrue($res->getEconomieSocialeSolidaire());
        $this->assertNull($res->getDureePersonneMorale());
        $this->assertEquals("2020-08-13", $res->getDerniereMiseJourSirene());
        $this->assertEquals("2020-06-25", $res->getDerniereMiseJourRcs());
        $this->assertEquals("Inscrit", $res->getStatutRcs());
        $this->assertNull($res->getDateImmatriculationRcs());
        $this->assertNull($res->getDatePremiereImmatriculationRcs());
        $this->assertNull($res->getDateRadiationRcs());
        $this->assertEquals("FR64443061841", $res->getNumeroTvaIntracommunautaire());
        $this->assertTrue($res->getAssocieUnique());
        $this->assertCount(1, $res->getEtablissements());
        $this->assertCount(1, $res->getFinances());
        $this->assertCount(1, $res->getRepresentants());
        $this->assertCount(1, $res->getBeneficiairesEffectifs());
        $this->assertCount(1, $res->getDepotsActes());
        $this->assertCount(1, $res->getComptes());
        $this->assertCount(1, $res->getPublicationsBodacc());
        $this->assertCount(1, $res->getProceduresCollectives());
        $this->assertTrue($res->getProcedureCollectiveExiste());
        $this->assertTrue($res->getProcedureCollectiveEnCours());
        $this->assertNotNull($res->getDerniersStatuts());
        $this->assertNotNull($res->getExtraitImmatriculation());
    }

    /**
     * Tests the deserializeEtablissement() method.
     *
     * @return void
     */
    public function testDeserializeEtablissement(): void {

        $res = ModelDeserializer::deserializeEtablissement($this->json["siege"]);

        $this->assertEquals("44306184100047", $res->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getSiretFormate());
        $this->assertEquals("00047", $res->getNic());
        $this->assertEquals("75009", $res->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getVille());
        $this->assertEquals(48.876947, $res->getLatitude());
        $this->assertEquals(2.329981, $res->getLongitude());
        $this->assertTrue($res->getEtablissementCesse());
        $this->assertTrue($res->getSiege());
        $this->assertTrue($res->getEtablissementEmployeur());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getEffectif());
        $this->assertEquals(500, $res->getEffectifMin());
        $this->assertEquals(999, $res->getEffectifMax());
        $this->assertEquals("41", $res->getTrancheEffectif());
        $this->assertEquals(2017, $res->getAnneeEffectif());
        $this->assertEquals("70.10Z", $res->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getLibelleCodeNaf());
        $this->assertEquals("2011-05-12T22:00:00.000Z", $res->getDateCreation());
        $this->assertEquals(8, $res->getNumeroVoie());
        $this->assertNull($res->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getLibelleVoie());
        $this->assertNull($res->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getAdresseLigne1());
        $this->assertNull($res->getAdresseLigne2());
    }

    /**
     * Tests the deserializeExtraitImmatriculation() method.
     *
     * @return void
     */
    public function testDeserializeExtraitImmatriculation(): void {

        $res = ModelDeserializer::deserializeExtraitImmatriculation($this->json["extrait_immatriculation"]);

        $this->assertEquals("SzQ0MzA2MTg0MQ", $res->getToken());
    }

    /**
     * Tests the deserializeFinance() method.
     *
     * @return void
     */
    public function testDeserializeFinance(): void {

        $res = ModelDeserializer::deserializeFinance($this->json["finances"][0]);

        $this->assertEquals(2018, $res->getAnnee());
        $this->assertEquals("2018-12-31", $res->getDateClotureExercice());
        $this->assertEquals(12, $res->getDureeExercice());
        $this->assertEquals(411016329, $res->getChiffreAffaires());
        $this->assertEquals(29327087, $res->getResultat());
        $this->assertEquals(723, $res->getEffectif());
    }

    /**
     * Tests the deserializeProcedureCollective() method.
     *
     * @return void
     */
    public function testDeserializeProcedureCollective(): void {

        $res = ModelDeserializer::deserializeProcedureCollective($this->json["procedures_collectives"][0]);

        $this->assertEquals("Redressement judiciaire", $res->getType());
        $this->assertEquals("2020-04-16T00:00:00.000Z", $res->getDateDebut());
        $this->assertEquals("2020-08-27T00:00:00.000Z", $res->getDateFin());
        $this->assertCount(1, $res->getPublicationsBodacc());
    }

    /**
     * Tests the deserializePublicationBodacc() method.
     *
     * @return void
     */
    public function testDeserializePublicationBodacc(): void {

        $res = ModelDeserializer::deserializePublicationBodacc($this->json["publications_bodacc"][0]);

        $this->assertEquals("20200075", $res->getNumeroParution());
        $this->assertEquals("2020-04-16T00:00:00.000Z", $res->getDate());
        $this->assertEquals("670", $res->getNumeroAnnonce());
        $this->assertEquals("B", $res->getBodacc());
        $this->assertEquals("Modification", $res->getType());
    }

    /**
     * Tests the deserializeRepresentant() method.
     *
     * @return void
     */
    public function testDeserializeRepresentant(): void {

        $res = ModelDeserializer::deserializeRepresentant($this->json["representants"][0]);

        $this->assertEquals("Gérant", $res->getQualite());
        $this->assertFalse($res->getPersonneMorale());
        $this->assertEquals("2017-08-03", $res->getDatePrisePoste());
        $this->assertEquals("Yi", $res->getNom());
        $this->assertEquals("Kenneth H.", $res->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getDateNaissanceFormate());
        $this->assertEquals(50, $res->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getNationalite());
        $this->assertEquals("Séoul", $res->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getPaysNaissance());
        $this->assertEquals("1600 Amphitheatre Parkway Mountain View CA 94043", $res->getAdresseLigne1());
        $this->assertNull($res->getAdresseLigne2());
        $this->assertNull($res->getAdresseLigne3());
        $this->assertNull($res->getCodePostal());
        $this->assertNull($res->getVille());
        $this->assertEquals("Etats-Unis", $res->getPays());
    }

    /**
     * Tests the deserializeStatuts() method.
     *
     * @return void
     */
    public function testDeserializeStatuts(): void {

        $res = ModelDeserializer::deserializeStatuts($this->json["derniers_statuts"]);

        $this->assertEquals("2020-04-07", $res->getDateDepot());
        $this->assertEquals("07/04/2020", $res->getDateDepotFormate());
        $this->assertTrue($res->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Actes du 07-04-2020.pdf", $res->getNomFichierPdf());
        $this->assertEquals("QTQ0MzA2MTg0MTIwMjAwNDA3RMOpY2lzaW9uKHMpIGRlIGwnYXNzb2Npw6kgdW5pcXVl", $res->getToken());
        $this->assertEquals("Statuts mis à jour", $res->getType());
        $this->assertNull($res->getDecision());
        $this->assertEquals("2020-03-04", $res->getDateActe());
        $this->assertEquals("04/03/2020", $res->getDateActeFormate());
    }
}