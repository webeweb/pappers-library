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

use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Serializer\ResponseDeserializer;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Response serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeDocumentTelechargementResponse() method.
     *
     * @return void
     */
    public function testDeserializeDocumentTelechargementResponse(): void {

        $arg = "application/pdf";

        $res = ResponseDeserializer::deserializeDocumentTelechargementResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
    }

    /**
     * Tests the deserializeEntrepriseResponse() method.
     *
     * @return void
     */
    public function testDeserializeEntrepriseResponse(): void {

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeEntrepriseResponse.json");

        $res = ResponseDeserializer::deserializeEntrepriseResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals("443061841", $res->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getEntreprise()->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getDenomination());
        $this->assertNull($res->getEntreprise()->getNom());
        $this->assertNull($res->getEntreprise()->getPrenom());
        $this->assertNull($res->getEntreprise()->getSexe());
        $this->assertEquals("70.10Z", $res->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getEntreprise()->getDomaineActivite());
        $this->assertCount(1, $res->getEntreprise()->getConventionCollectives());
        $this->assertEquals("2002-05-16", $res->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getEntreprise()->getDateCreationFormate());
        $this->assertFalse($res->getEntreprise()->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getEntreprise()->getDateCessation());
        $this->assertTrue($res->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getEntreprise()->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getEntreprise()->getEffectifMax());
        $this->assertEquals("41", $res->getEntreprise()->getTrancheEffectif());
        $this->assertEquals(2017, $res->getEntreprise()->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getEntreprise()->getDernierTraitement());
        $this->assertNotNull($res->getEntreprise()->getSiege());
        $this->assertEquals("Fourniture de services et/ou conseils relatifs aux logiciels au réseau internet aux réseaux télématiques ou en ligne notamment L'intermediation en matière de vente de publicité en ligne la promotion sous toutes ses formes de la publicité en ligne la promotion directe de produits et services et la mise en oeuvre de centres de traitement de l'information", $res->getEntreprise()->getObjetSocial());
        $this->assertEquals(464884017, $res->getEntreprise()->getCapital());
        $this->assertEquals("464 884 017,00 €", $res->getEntreprise()->getCapitalFormate());
        $this->assertNull($res->getEntreprise()->getCapitalActuelVariable());
        $this->assertEquals("Euros", $res->getEntreprise()->getDeviseCapital());
        $this->assertEquals("464884017 R.C.S. Paris", $res->getEntreprise()->getNumeroRcs());
        $this->assertNull($res->getEntreprise()->getDateClotureExercice());
        $this->assertNull($res->getEntreprise()->getDateClotureExerciceExceptionnelle());
        $this->assertNull($res->getEntreprise()->getDateClotureExerciceExceptionnelleFormate());
        $this->assertNull($res->getEntreprise()->getProchaineDateClotureExercice());
        $this->assertNull($res->getEntreprise()->getProchaineDateClotureExerciceFormate());
        $this->assertTrue($res->getEntreprise()->getEconomieSocialeSolidaire());
        $this->assertNull($res->getEntreprise()->getDureePersonneMorale());
        $this->assertEquals("2020-08-13", $res->getEntreprise()->getDerniereMiseJourSirene());
        $this->assertEquals("2020-06-25", $res->getEntreprise()->getDerniereMiseJourRcs());
        $this->assertEquals("Inscrit", $res->getEntreprise()->getStatutRcs());
        $this->assertNull($res->getEntreprise()->getDateImmatriculationRcs());
        $this->assertNull($res->getEntreprise()->getDatePremiereImmatriculationRcs());
        $this->assertNull($res->getEntreprise()->getDateRadiationRcs());
        $this->assertEquals("FR64443061841", $res->getEntreprise()->getNumeroTvaIntracommunautaire());
        $this->assertTrue($res->getEntreprise()->getAssocieUnique());
        $this->assertCount(1, $res->getEntreprise()->getEtablissements());
        $this->assertCount(1, $res->getEntreprise()->getFinances());
        $this->assertCount(1, $res->getEntreprise()->getRepresentants());
        $this->assertCount(1, $res->getEntreprise()->getBeneficiairesEffectifs());
        $this->assertCount(1, $res->getEntreprise()->getDepotsActes());
        $this->assertCount(1, $res->getEntreprise()->getComptes());
        $this->assertCount(1, $res->getEntreprise()->getPublicationsBodacc());
        $this->assertCount(1, $res->getEntreprise()->getProceduresCollectives());
        $this->assertTrue($res->getEntreprise()->getProcedureCollectiveExiste());
        $this->assertTrue($res->getEntreprise()->getProcedureCollectiveEnCours());
        $this->assertNotNull($res->getEntreprise()->getDerniersStatuts());
        $this->assertNotNull($res->getEntreprise()->getExtraitImmatriculation());
    }

    /**
     * Tests the deserializeEntrepriseResponse() method.
     *
     * @return void
     */
    public function testDeserializeEntrepriseResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeEntrepriseResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertNull($res->getEntreprise());
    }

    /**
     * Tests the deserializeRechercheDirigeantsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheDirigeantsResponse(): void {

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheDirigeantsResponse.json");

        $res = ResponseDeserializer::deserializeRechercheDirigeantsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
        $this->assertEquals(100, $res->getTotal());
        $this->assertEquals(1, $res->getPage());

        $this->assertEquals("Gérant", $res->getResultats()[0]->getQualite());
        $this->assertFalse($res->getResultats()[0]->getPersonneMorale());
        $this->assertEquals("2017-08-03", $res->getResultats()[0]->getDatePrisePoste());
        $this->assertEquals("Yi", $res->getResultats()[0]->getNom());
        $this->assertEquals("Kenneth H.", $res->getResultats()[0]->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getResultats()[0]->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getResultats()[0]->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getResultats()[0]->getDateNaissanceFormate());
        $this->assertEquals(50, $res->getResultats()[0]->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getResultats()[0]->getNationalite());
        $this->assertEquals("Séoul", $res->getResultats()[0]->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getResultats()[0]->getPaysNaissance());
        $this->assertEquals("1600 Amphitheatre Parkway Mountain View CA 94043", $res->getResultats()[0]->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getAdresseLigne2());
        $this->assertNull($res->getResultats()[0]->getAdresseLigne3());
        $this->assertNull($res->getResultats()[0]->getCodePostal());
        $this->assertNull($res->getResultats()[0]->getVille());
        $this->assertEquals("Etats-Unis", $res->getResultats()[0]->getPays());

        $this->assertEquals("443061841", $res->getResultats()[0]->getEntreprises()[0]->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getEntreprises()[0]->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprises()[0]->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getEntreprises()[0]->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprises()[0]->getDenomination());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSexe());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getEntreprises()[0]->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getEntreprises()[0]->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getEntreprises()[0]->getDomaineActivite());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getConfirmee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprises()[0]->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getEntreprises()[0]->getDateCreationFormate());
        $this->assertFalse($res->getResultats()[0]->getEntreprises()[0]->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprises()[0]->getDateCessation());
        $this->assertTrue($res->getResultats()[0]->getEntreprises()[0]->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getResultats()[0]->getEntreprises()[0]->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getResultats()[0]->getEntreprises()[0]->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEntreprises()[0]->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEntreprises()[0]->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEntreprises()[0]->getEffectifMax());
        $this->assertEquals("41", $res->getResultats()[0]->getEntreprises()[0]->getTrancheEffectif());
        $this->assertEquals(2017, $res->getResultats()[0]->getEntreprises()[0]->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getResultats()[0]->getEntreprises()[0]->getDernierTraitement());
        $this->assertEquals("44306184100047", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getSiretFormate());
        $this->assertEquals("00047", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getNic());
        $this->assertEquals(8, $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getNumeroVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLibelleVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getAdresseLigne2());
        $this->assertEquals("75009", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getVille());
        $this->assertEquals(48.876947, $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLatitude());
        $this->assertEquals(2.329981, $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLongitude());
        $this->assertEquals("MONTPELLIER", $res->getResultats()[0]->getEntreprises()[0]->getVilles()[0]);
        $this->assertEquals(411016329, $res->getResultats()[0]->getEntreprises()[0]->getChiffreAffaires());
        $this->assertEquals(29327087, $res->getResultats()[0]->getEntreprises()[0]->getResultat());
        $this->assertEquals(723, $res->getResultats()[0]->getEntreprises()[0]->getEffectifsFinances());
        $this->assertEquals("2018", $res->getResultats()[0]->getEntreprises()[0]->getAnneeFinances());

        $this->assertEquals(0, $res->getResultats()[0]->getNbEntreprisesTotal());
    }

    /**
     * Tests the deserializeRechercheDirigeantsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheDirigeantsResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeRechercheDirigeantsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Tests the deserializeRechercheDocumentsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheDocumentsResponse(): void {

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheDocumentsResponse.json");

        $res = ResponseDeserializer::deserializeRechercheDocumentsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
        $this->assertEquals(100, $res->getTotal());
        $this->assertEquals(1, $res->getPage());

        $this->assertEquals("acte", $res->getResultats()[0]->getType());
        $this->assertEquals("2020-08-04T00:00:00.000Z", $res->getResultats()[0]->getDateDepot());
        $this->assertEquals([], $res->getResultats()[0]->getTitres());
        $this->assertNull($res->getResultats()[0]->getSiren());
        $this->assertNull($res->getResultats()[0]->getNumChrono());
        $this->assertNull($res->getResultats()[0]->getIdFichier());
        $this->assertNull($res->getResultats()[0]->getToken());

        $this->assertEquals("443061841", $res->getResultats()[0]->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getEntreprise()->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getDenomination());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSexe());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getEntreprise()->getDomaineActivite());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getConfirmee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getEntreprise()->getDateCreationFormate());
        $this->assertFalse($res->getResultats()[0]->getEntreprise()->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCessation());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getResultats()[0]->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getResultats()[0]->getEntreprise()->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEntreprise()->getEffectifMax());
        $this->assertEquals("41", $res->getResultats()[0]->getEntreprise()->getTrancheEffectif());
        $this->assertEquals(2017, $res->getResultats()[0]->getEntreprise()->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getResultats()[0]->getEntreprise()->getDernierTraitement());
        $this->assertEquals("44306184100047", $res->getResultats()[0]->getEntreprise()->getSiege()->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getResultats()[0]->getEntreprise()->getSiege()->getSiretFormate());
        $this->assertEquals("00047", $res->getResultats()[0]->getEntreprise()->getSiege()->getNic());
        $this->assertEquals(8, $res->getResultats()[0]->getEntreprise()->getSiege()->getNumeroVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getResultats()[0]->getEntreprise()->getSiege()->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getResultats()[0]->getEntreprise()->getSiege()->getLibelleVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getResultats()[0]->getEntreprise()->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getAdresseLigne2());
        $this->assertEquals("75009", $res->getResultats()[0]->getEntreprise()->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getResultats()[0]->getEntreprise()->getSiege()->getVille());
        $this->assertEquals(48.876947, $res->getResultats()[0]->getEntreprise()->getSiege()->getLatitude());
        $this->assertEquals(2.329981, $res->getResultats()[0]->getEntreprise()->getSiege()->getLongitude());
        $this->assertEquals("MONTPELLIER", $res->getResultats()[0]->getEntreprise()->getVilles()[0]);
        $this->assertEquals(411016329, $res->getResultats()[0]->getEntreprise()->getChiffreAffaires());
        $this->assertEquals(29327087, $res->getResultats()[0]->getEntreprise()->getResultat());
        $this->assertEquals(723, $res->getResultats()[0]->getEntreprise()->getEffectifsFinances());
        $this->assertEquals("2018", $res->getResultats()[0]->getEntreprise()->getAnneeFinances());
    }

    /**
     * Tests the deserializeRechercheDocumentsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheDocumentsResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeRechercheDocumentsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Tests the deserializeRecherchePublicationsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRecherchePublicationsResponse(): void {

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRecherchePublicationsResponse.json");

        $res = ResponseDeserializer::deserializeRecherchePublicationsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
        $this->assertEquals(100, $res->getTotal());
        $this->assertEquals(1, $res->getPage());

        $this->assertEquals("acte", $res->getResultats()[0]->getType());
        $this->assertEquals("2020-08-04T00:00:00.000Z", $res->getResultats()[0]->getDate());
        $this->assertEquals("string", $res->getResultats()[0]->getContenu());

        $this->assertEquals("443061841", $res->getResultats()[0]->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getEntreprise()->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getDenomination());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSexe());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getEntreprise()->getDomaineActivite());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getConfirmee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getEntreprise()->getDateCreationFormate());
        $this->assertFalse($res->getResultats()[0]->getEntreprise()->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCessation());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getResultats()[0]->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getResultats()[0]->getEntreprise()->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEntreprise()->getEffectifMax());
        $this->assertEquals("41", $res->getResultats()[0]->getEntreprise()->getTrancheEffectif());
        $this->assertEquals(2017, $res->getResultats()[0]->getEntreprise()->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getResultats()[0]->getEntreprise()->getDernierTraitement());
        $this->assertEquals("44306184100047", $res->getResultats()[0]->getEntreprise()->getSiege()->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getResultats()[0]->getEntreprise()->getSiege()->getSiretFormate());
        $this->assertEquals("00047", $res->getResultats()[0]->getEntreprise()->getSiege()->getNic());
        $this->assertEquals(8, $res->getResultats()[0]->getEntreprise()->getSiege()->getNumeroVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getResultats()[0]->getEntreprise()->getSiege()->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getResultats()[0]->getEntreprise()->getSiege()->getLibelleVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getResultats()[0]->getEntreprise()->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getAdresseLigne2());
        $this->assertEquals("75009", $res->getResultats()[0]->getEntreprise()->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getResultats()[0]->getEntreprise()->getSiege()->getVille());
        $this->assertEquals(48.876947, $res->getResultats()[0]->getEntreprise()->getSiege()->getLatitude());
        $this->assertEquals(2.329981, $res->getResultats()[0]->getEntreprise()->getSiege()->getLongitude());
        $this->assertEquals("MONTPELLIER", $res->getResultats()[0]->getEntreprise()->getVilles()[0]);
        $this->assertEquals(411016329, $res->getResultats()[0]->getEntreprise()->getChiffreAffaires());
        $this->assertEquals(29327087, $res->getResultats()[0]->getEntreprise()->getResultat());
        $this->assertEquals(723, $res->getResultats()[0]->getEntreprise()->getEffectifsFinances());
        $this->assertEquals("2018", $res->getResultats()[0]->getEntreprise()->getAnneeFinances());
    }

    /**
     * Tests the deserializeRecherchePublicationsResponse() method.
     *
     * @return void
     */
    public function testDeserializeRecherchePublicationsResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeRecherchePublicationsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Tests the deserializeRechercheResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheResponse(): void {

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheResponse.json");

        $res = ResponseDeserializer::deserializeRechercheResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
        $this->assertEquals(100, $res->getTotal());
        $this->assertEquals(1, $res->getPage());

        $this->assertEquals("443061841", $res->getResultats()[0]->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getDenomination());
        $this->assertNull($res->getResultats()[0]->getNom());
        $this->assertNull($res->getResultats()[0]->getPrenom());
        $this->assertNull($res->getResultats()[0]->getSexe());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getDomaineActivite());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $res->getResultats()[0]->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getConventionCollectives()[0]->getConfirmee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getDateCreationFormate());
        $this->assertFalse($res->getResultats()[0]->getEntrepriseCessee());
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getDateCessation());
        $this->assertTrue($res->getResultats()[0]->getEntrepriseEmployeuse());
        $this->assertEquals("5499", $res->getResultats()[0]->getCategorieJuridique());
        $this->assertEquals("Société à responsabilité limitée (SARL)", $res->getResultats()[0]->getFormeJuridique());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEffectifMax());
        $this->assertEquals("41", $res->getResultats()[0]->getTrancheEffectif());
        $this->assertEquals(2017, $res->getResultats()[0]->getAnneeEffectif());
        $this->assertEquals("2020-07-09", $res->getResultats()[0]->getDernierTraitement());
        $this->assertEquals("44306184100047", $res->getResultats()[0]->getSiege()->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getResultats()[0]->getSiege()->getSiretFormate());
        $this->assertEquals("00047", $res->getResultats()[0]->getSiege()->getNic());
        $this->assertEquals(8, $res->getResultats()[0]->getSiege()->getNumeroVoie());
        $this->assertNull($res->getResultats()[0]->getSiege()->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getResultats()[0]->getSiege()->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getResultats()[0]->getSiege()->getLibelleVoie());
        $this->assertNull($res->getResultats()[0]->getSiege()->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getResultats()[0]->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getSiege()->getAdresseLigne2());
        $this->assertEquals("75009", $res->getResultats()[0]->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getResultats()[0]->getSiege()->getVille());
        $this->assertEquals(48.876947, $res->getResultats()[0]->getSiege()->getLatitude());
        $this->assertEquals(2.329981, $res->getResultats()[0]->getSiege()->getLongitude());
        $this->assertEquals("MONTPELLIER", $res->getResultats()[0]->getVilles()[0]);
        $this->assertEquals(411016329, $res->getResultats()[0]->getChiffreAffaires());
        $this->assertEquals(29327087, $res->getResultats()[0]->getResultat());
        $this->assertEquals(723, $res->getResultats()[0]->getEffectifsFinances());
        $this->assertEquals("2018", $res->getResultats()[0]->getAnneeFinances());

        $this->assertEquals("Gérant", $res->getResultats()[0]->getRepresentants()[0]->getQualite());
        $this->assertFalse($res->getResultats()[0]->getRepresentants()[0]->getPersonneMorale());
        $this->assertEquals("2017-08-03", $res->getResultats()[0]->getRepresentants()[0]->getDatePrisePoste());
        $this->assertEquals("Yi", $res->getResultats()[0]->getRepresentants()[0]->getNom());
        $this->assertEquals("Kenneth H.", $res->getResultats()[0]->getRepresentants()[0]->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getResultats()[0]->getRepresentants()[0]->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getResultats()[0]->getRepresentants()[0]->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getResultats()[0]->getRepresentants()[0]->getDateNaissanceFormate());
        $this->assertEquals(50, $res->getResultats()[0]->getRepresentants()[0]->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getResultats()[0]->getRepresentants()[0]->getNationalite());
        $this->assertEquals("Séoul", $res->getResultats()[0]->getRepresentants()[0]->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getResultats()[0]->getRepresentants()[0]->getPaysNaissance());
        $this->assertEquals("1600 Amphitheatre Parkway Mountain View CA 94043", $res->getResultats()[0]->getRepresentants()[0]->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getRepresentants()[0]->getAdresseLigne2());
        $this->assertNull($res->getResultats()[0]->getRepresentants()[0]->getAdresseLigne3());
        $this->assertNull($res->getResultats()[0]->getRepresentants()[0]->getCodePostal());
        $this->assertNull($res->getResultats()[0]->getRepresentants()[0]->getVille());
        $this->assertEquals("Etats-Unis", $res->getResultats()[0]->getRepresentants()[0]->getPays());

        $this->assertEquals(0, $res->getResultats()[0]->getNbDirigeantsTotal());
        $this->assertEquals(0, $res->getResultats()[0]->getNbDocumentsAvecMentions());
        $this->assertEquals(0, $res->getResultats()[0]->getNbDocumentsTotal());
        $this->assertEquals(0, $res->getResultats()[0]->getNbPublicationsAvecMentions());
        $this->assertEquals(0, $res->getResultats()[0]->getNbPublicationsTotal());
    }

    /**
     * Tests the deserializeRechercheResponse() method.
     *
     * @return void
     */
    public function testDeserializeRechercheResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeRechercheResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Tests the deserializeSuggestionsResponse() method.
     *
     * @return void
     */
    public function testDeserializeSuggestionsResponse(): void {

        $assertions = function(Entreprise $obj, AbstractTestCase $test) {
            $test->assertEquals("string", $obj->getMention());
            $test->assertEquals("443061841", $obj->getSiren());
            $test->assertEquals("443 061 841", $obj->getSirenFormate());
            $test->assertEquals("GOOGLE FRANCE", $obj->getNomEntreprise());
            $test->assertTrue($obj->getPersonneMorale());
            $test->assertEquals("GOOGLE FRANCE", $obj->getDenomination());
            $test->assertNull($obj->getNom());
            $test->assertNull($obj->getPrenom());
            $test->assertNull($obj->getSexe());
            $test->assertEquals("70.10Z", $obj->getCodeNaf());
            $test->assertEquals("Activités des sièges sociaux", $obj->getLibelleCodeNaf());
            $test->assertEquals("Activités des sièges sociaux ; conseil de gestion", $obj->getDomaineActivite());

            $test->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET SYNTEC)", $obj->getConventionCollectives()[0]->getNom());
            $test->assertEquals(1486, $obj->getConventionCollectives()[0]->getIdcc());
            $test->assertTrue($obj->getConventionCollectives()[0]->getConfirmee());

            $test->assertEquals("2002-05-16", $obj->getDateCreation());
            $test->assertEquals("16/05/2002", $obj->getDateCreationFormate());
            $test->assertFalse($obj->getEntrepriseCessee());
            $test->assertEquals("2002-05-16", $obj->getDateCessation());
            $test->assertTrue($obj->getEntrepriseEmployeuse());
            $test->assertEquals("5499", $obj->getCategorieJuridique());
            $test->assertEquals("Société à responsabilité limitée (SARL)", $obj->getFormeJuridique());
            $test->assertEquals("Entre 500 et 999 salariés", $obj->getEffectif());
            $test->assertEquals(500, $obj->getEffectifMin());
            $test->assertEquals(999, $obj->getEffectifMax());
            $test->assertEquals("41", $obj->getTrancheEffectif());
            $test->assertEquals(2017, $obj->getAnneeEffectif());
            $test->assertEquals("2020-07-09", $obj->getDernierTraitement());

            $test->assertEquals("44306184100047", $obj->getSiege()->getSiret());
            $test->assertEquals("443 061 841 00047", $obj->getSiege()->getSiretFormate());
            $test->assertEquals("00047", $obj->getSiege()->getNic());
            $test->assertEquals(8, $obj->getSiege()->getNumeroVoie());
            $test->assertNull($obj->getSiege()->getIndiceRepetition());
            $test->assertEquals("RUE", $obj->getSiege()->getTypeVoie());
            $test->assertEquals("DE LONDRES", $obj->getSiege()->getLibelleVoie());
            $test->assertNull($obj->getSiege()->getComplementAdresse());
            $test->assertEquals("8 RUE DE LONDRES", $obj->getSiege()->getAdresseLigne1());
            $test->assertNull($obj->getSiege()->getAdresseLigne2());
            $test->assertEquals("75009", $obj->getSiege()->getCodePostal());
            $test->assertEquals("PARIS 9", $obj->getSiege()->getVille());
            $test->assertEquals(48.876947, $obj->getSiege()->getLatitude());
            $test->assertEquals(2.329981, $obj->getSiege()->getLongitude());

            $test->assertEquals("MONTPELLIER", $obj->getVilles()[0]);
            $test->assertEquals(411016329, $obj->getChiffreAffaires());
            $test->assertEquals(29327087, $obj->getResultat());
            $test->assertEquals(723, $obj->getEffectifsFinances());
            $test->assertEquals("2018", $obj->getAnneeFinances());
        };

        $arg = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeSuggestionsResponse.json");

        $res = ResponseDeserializer::deserializeSuggestionsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        // Résultats nom entreprise
        $assertions($res->getResultatsNomEntreprise()[0], $this);

        // Résultats dénomination
        $assertions($res->getResultatsDenomination()[0], $this);

        // Résultats nom complet
        $assertions($res->getResultatsNomComplet()[0], $this);

        // Résultats représentant
        $this->assertEquals("string", $res->getResultatsRepresentant()[0]->getMention());
        $this->assertEquals("Gérant", $res->getResultatsRepresentant()[0]->getQualite());
        $this->assertFalse($res->getResultatsRepresentant()[0]->getPersonneMorale());
        $this->assertEquals("2017-08-03", $res->getResultatsRepresentant()[0]->getDatePrisePoste());
        $this->assertEquals("Yi", $res->getResultatsRepresentant()[0]->getNom());
        $this->assertEquals("Kenneth H.", $res->getResultatsRepresentant()[0]->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getResultatsRepresentant()[0]->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getResultatsRepresentant()[0]->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getResultatsRepresentant()[0]->getDateNaissanceFormate());
        $this->assertEquals(50, $res->getResultatsRepresentant()[0]->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getResultatsRepresentant()[0]->getNationalite());
        $this->assertEquals("Séoul", $res->getResultatsRepresentant()[0]->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getResultatsRepresentant()[0]->getPaysNaissance());
        $this->assertEquals("1600 Amphitheatre Parkway Mountain View CA 94043", $res->getResultatsRepresentant()[0]->getAdresseLigne1());
        $this->assertNull($res->getResultatsRepresentant()[0]->getAdresseLigne2());
        $this->assertNull($res->getResultatsRepresentant()[0]->getAdresseLigne3());
        $this->assertNull($res->getResultatsRepresentant()[0]->getCodePostal());
        $this->assertNull($res->getResultatsRepresentant()[0]->getVille());
        $this->assertEquals("Etats-Unis", $res->getResultatsRepresentant()[0]->getPays());

        // Résultats SIREN
        $assertions($res->getResultatsSiren()[0], $this);

        // Résultats SIRET
        $assertions($res->getResultatsSiret()[0], $this);
    }

    /**
     * Tests the deserializeSuggestionsResponse() method.
     *
     * @return void
     */
    public function testDeserializeSuggestionsResponseWithBadRawResponse(): void {

        $arg = "";

        $res = ResponseDeserializer::deserializeSuggestionsResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());

        $this->assertEquals([], $res->getResultatsNomEntreprise());
        $this->assertEquals([], $res->getResultatsDenomination());
        $this->assertEquals([], $res->getResultatsNomComplet());
        $this->assertEquals([], $res->getResultatsRepresentant());
        $this->assertEquals([], $res->getResultatsSiren());
        $this->assertEquals([], $res->getResultatsSiret());
    }
}