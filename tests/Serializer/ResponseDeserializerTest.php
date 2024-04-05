<?php

declare(strict_types = 1);

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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeDocumentTelechargementResponse()
     *
     * @return void
     */
    public function testDeserializeDocumentTelechargementResponse(): void {

        $arg = "application/pdf";

        $res = ResponseDeserializer::deserializeDocumentTelechargementResponse($arg);
        $this->assertEquals($arg, $res->getRawResponse());
    }

    /**
     * Test deserializeEntrepriseResponse()
     *
     * @return void
     */
    public function testDeserializeEntrepriseResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeEntrepriseResponse.json");

        $res = ResponseDeserializer::deserializeEntrepriseResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        // Entreprise
        $this->assertEquals("443061841", $res->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getEntreprise()->getSirenFormate());
        $this->assertTrue($res->getEntreprise()->getDiffusable());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getDenomination());
        $this->assertNull($res->getEntreprise()->getSigle());
        $this->assertNull($res->getEntreprise()->getNom());
        $this->assertNull($res->getEntreprise()->getPrenom());
        $this->assertNull($res->getEntreprise()->getSexe());

        // Entreprise > siège
        $this->assertEquals("44306184100047", $res->getEntreprise()->getSiege()->getSiret());
        $this->assertEquals("443 061 841 00047", $res->getEntreprise()->getSiege()->getSiretFormate());
        $this->assertEquals("00047", $res->getEntreprise()->getSiege()->getNic());
        $this->assertEquals(8, $res->getEntreprise()->getSiege()->getNumeroVoie());
        $this->assertNull($res->getEntreprise()->getSiege()->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getEntreprise()->getSiege()->getTypeVoie());
        $this->assertEquals("DE LONDRES", $res->getEntreprise()->getSiege()->getLibelleVoie());
        $this->assertNull($res->getEntreprise()->getSiege()->getComplementAdresse());
        $this->assertEquals("8 RUE DE LONDRES", $res->getEntreprise()->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getEntreprise()->getSiege()->getAdresseLigne2());
        $this->assertEquals("75009", $res->getEntreprise()->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 9", $res->getEntreprise()->getSiege()->getVille());
        $this->assertEquals("France", $res->getEntreprise()->getSiege()->getPays());
        $this->assertNull($res->getEntreprise()->getSiege()->getLatitude());
        $this->assertNull($res->getEntreprise()->getSiege()->getLongitude());
        $this->assertEquals("70.10Z", $res->getEntreprise()->getSiege()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getEntreprise()->getSiege()->getLibelleCodeNaf());
        $this->assertEquals("2011-05-13", $res->getEntreprise()->getSiege()->getDateCreation());
        $this->assertTrue($res->getEntreprise()->getSiege()->getEtablissementEmployeur());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getEntreprise()->getSiege()->getEffectif());
        $this->assertEquals(500, $res->getEntreprise()->getSiege()->getEffectifMin());
        $this->assertEquals(999, $res->getEntreprise()->getSiege()->getEffectifMax());
        $this->assertEquals("41", $res->getEntreprise()->getSiege()->getTrancheEffectif());
        $this->assertEquals(2018, $res->getEntreprise()->getSiege()->getAnneeEffectif());
        $this->assertFalse($res->getEntreprise()->getSiege()->getEtablissementCesse());
        $this->assertNull($res->getEntreprise()->getSiege()->getDateCessation());
        $this->assertNull($res->getEntreprise()->getSiege()->getDomiciliation());
        $this->assertTrue($res->getEntreprise()->getSiege()->getSiege());

        // Entreprise
        $this->assertNull($res->getEntreprise()->getRnm());
        $this->assertEquals("70.10Z", $res->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getEntreprise()->getDomaineActivite());
        $this->assertEquals("Fourniture de services et/ou conseils relatifs aux logiciels, au réseau internet, aux réseaux télématiques ou en ligne, notamment L'intermediation en matière de vente de publicité en ligne, la promotion sous toutes ses formes de la publicité en ligne, la promotion directe de produits et services et la mise en oeuvre de centres de traitement de l'information", $res->getEntreprise()->getObjetSocial());

        // Entreprise > conventions collectives
        $this->assertCount(1, $res->getEntreprise()->getConventionCollectives());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $res->getEntreprise()->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getEntreprise()->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getEntreprise()->getConventionCollectives()[0]->getConfirmee());

        // Entreprise
        $this->assertEquals("2002-05-16", $res->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getEntreprise()->getDateCreationFormate());
        $this->assertFalse($res->getEntreprise()->getEntrepriseCessee());
        $this->assertNull($res->getEntreprise()->getDateCessation());
        $this->assertNull($res->getEntreprise()->getDateCessationFormatee());
        $this->assertTrue($res->getEntreprise()->getAssocieUnique());
        $this->assertEquals("5498", $res->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("EURL, entreprise unipersonnelle à responsabilité limitée", $res->getEntreprise()->getFormeJuridique());
        $this->assertTrue($res->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getEntreprise()->getEffectifMax());
        $this->assertEquals("41", $res->getEntreprise()->getTrancheEffectif());
        $this->assertEquals(2018, $res->getEntreprise()->getAnneeEffectif());
        $this->assertEquals(1000000, $res->getEntreprise()->getCapital());
        $this->assertEquals("1 000 000 €", $res->getEntreprise()->getCapitalFormate());
        $this->assertNull($res->getEntreprise()->getCapitalActuelVariable());
        $this->assertEquals("Euros", $res->getEntreprise()->getDeviseCapital());
        $this->assertEquals("31 Décembre", $res->getEntreprise()->getDateClotureExercice());
        $this->assertNull($res->getEntreprise()->getDateClotureExerciceExceptionnelle());
        $this->assertEquals("2021-12-31", $res->getEntreprise()->getProchaineDateClotureExercice());
        $this->assertEquals("31/12/2021", $res->getEntreprise()->getProchaineDateClotureExerciceFormate());
        $this->assertTrue($res->getEntreprise()->getEconomieSocialeSolidaire());
        $this->assertEquals(99, $res->getEntreprise()->getDureePersonneMorale());
        $this->assertEquals("2021-06-19", $res->getEntreprise()->getDerniereMiseJourSirene());
        $this->assertNull($res->getEntreprise()->getDerniereMiseJourRcs());
        $this->assertEquals("2021-01-06", $res->getEntreprise()->getDernierTraitement());
        $this->assertEquals("Inscrit", $res->getEntreprise()->getStatutRcs());
        $this->assertEquals("PARIS", $res->getEntreprise()->getGreffe());
        $this->assertEquals("443 061 841 R.C.S. Paris", $res->getEntreprise()->getNumeroRcs());
        $this->assertEquals("2002-08-14", $res->getEntreprise()->getDateImmatriculationRcs());
        $this->assertNull($res->getEntreprise()->getDatePremiereImmatriculationRcs());
        $this->assertNull($res->getEntreprise()->getDateRadiationRcs());
        $this->assertEquals("FR64443061841", $res->getEntreprise()->getNumeroTvaIntracommunautaire());

        // Entreprise > établissements
        $this->assertCount(12, $res->getEntreprise()->getEtablissements());
        $this->assertEquals("44306184100013", $res->getEntreprise()->getEtablissements()[0]->getSiret());
        $this->assertEquals("443 061 841 00013", $res->getEntreprise()->getEtablissements()[0]->getSiretFormate());
        $this->assertEquals("00013", $res->getEntreprise()->getEtablissements()[0]->getNic());
        $this->assertEquals(126, $res->getEntreprise()->getEtablissements()[0]->getNumeroVoie());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getIndiceRepetition());
        $this->assertEquals("RUE", $res->getEntreprise()->getEtablissements()[0]->getTypeVoie());
        $this->assertEquals("GALLIENI", $res->getEntreprise()->getEtablissements()[0]->getLibelleVoie());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getComplementAdresse());
        $this->assertEquals("126 RUE GALLIENI", $res->getEntreprise()->getEtablissements()[0]->getAdresseLigne1());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getAdresseLigne2());
        $this->assertEquals("92100", $res->getEntreprise()->getEtablissements()[0]->getCodePostal());
        $this->assertEquals("BOULOGNE-BILLANCOURT", $res->getEntreprise()->getEtablissements()[0]->getVille());
        $this->assertEquals("France", $res->getEntreprise()->getEtablissements()[0]->getPays());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getLatitude());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getLongitude());
        $this->assertEquals("72.4Z", $res->getEntreprise()->getEtablissements()[0]->getCodeNaf());
        $this->assertEquals("Activités de banques de données", $res->getEntreprise()->getEtablissements()[0]->getLibelleCodeNaf());
        $this->assertTrue($res->getEntreprise()->getEtablissements()[0]->getEtablissementEmployeur());
        $this->assertEquals("Au moins 1 salarié", $res->getEntreprise()->getEtablissements()[0]->getEffectif());
        $this->assertEquals(1, $res->getEntreprise()->getEtablissements()[0]->getEffectifMin());
        $this->assertEquals(500000, $res->getEntreprise()->getEtablissements()[0]->getEffectifMax());
        $this->assertEquals("NN", $res->getEntreprise()->getEtablissements()[0]->getTrancheEffectif());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getAnneeEffectif());
        $this->assertEquals("2002-05-16", $res->getEntreprise()->getEtablissements()[0]->getDateCreation());
        $this->assertTrue($res->getEntreprise()->getEtablissements()[0]->getEtablissementCesse());
        $this->assertEquals("2003-12-31", $res->getEntreprise()->getEtablissements()[0]->getDateCessation());
        $this->assertNull($res->getEntreprise()->getEtablissements()[0]->getDomiciliation());
        $this->assertFalse($res->getEntreprise()->getEtablissements()[0]->getSiege());

        // Entreprise > finances
        $this->assertCount(5, $res->getEntreprise()->getFinances());
        $this->assertEquals(2019, $res->getEntreprise()->getFinances()[0]->getAnnee());
        $this->assertEquals("2019-12-31", $res->getEntreprise()->getFinances()[0]->getDateClotureExercice());
        $this->assertEquals(12, $res->getEntreprise()->getFinances()[0]->getDureeExercice());
        $this->assertEquals(483033598, $res->getEntreprise()->getFinances()[0]->getChiffreAffaires());
        $this->assertEquals(-539868050, $res->getEntreprise()->getFinances()[0]->getResultat());
        $this->assertEquals(859, $res->getEntreprise()->getFinances()[0]->getEffectif());

        // Entreprise > représentants
        $this->assertCount(4, $res->getEntreprise()->getRepresentants());
        $this->assertEquals("Gérant", $res->getEntreprise()->getRepresentants()[0]->getQualite());
        $this->assertFalse($res->getEntreprise()->getRepresentants()[0]->getPersonneMorale());
        $this->assertEquals("2017-08-03", $res->getEntreprise()->getRepresentants()[0]->getDatePrisePoste());
        $this->assertEquals("Yi", $res->getEntreprise()->getRepresentants()[0]->getNom());
        $this->assertEquals("Kenneth H.", $res->getEntreprise()->getRepresentants()[0]->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getEntreprise()->getRepresentants()[0]->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getEntreprise()->getRepresentants()[0]->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getEntreprise()->getRepresentants()[0]->getDateNaissanceFormatee());
        $this->assertEquals(51, $res->getEntreprise()->getRepresentants()[0]->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getEntreprise()->getRepresentants()[0]->getNationalite());
        $this->assertEquals("Séoul", $res->getEntreprise()->getRepresentants()[0]->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getEntreprise()->getRepresentants()[0]->getPaysNaissance());
        $this->assertEquals("1600 Amphitheatre Parkway Mountain View CA 94043", $res->getEntreprise()->getRepresentants()[0]->getAdresseLigne1());
        $this->assertNull($res->getEntreprise()->getRepresentants()[0]->getAdresseLigne2());
        $this->assertNull($res->getEntreprise()->getRepresentants()[0]->getAdresseLigne3());
        $this->assertNull($res->getEntreprise()->getRepresentants()[0]->getCodePostal());
        $this->assertNull($res->getEntreprise()->getRepresentants()[0]->getVille());
        $this->assertEquals("Etats-Unis", $res->getEntreprise()->getRepresentants()[0]->getPays());

        // Entreprise > bénéficiaires effectifs
        $this->assertCount(2, $res->getEntreprise()->getBeneficiairesEffectifs());
        $this->assertEquals("2018-09-04", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDateGreffe());
        $this->assertEquals("SOC_DBE", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getType());
        $this->assertEquals("PAGE", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getNom());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getNomUsage());
        $this->assertEquals("LARRY", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPrenom());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPseudonyme());
        $this->assertEquals("AMERICAINE", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getNationalite());
        $this->assertEquals("03/1973", $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDateNaissanceFormatee());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDateNaissanceCompleteFormatee());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getVilleNaissance());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPaysNaissance());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getAdresseLigne1());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getAdresseLigne2());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getAdresseLigne3());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getCodePostal());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getVille());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPays());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentageParts());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentagePartsDirectes());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentagePartsIndirectes());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentagePartsVocationTitulaire());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsPartsDirectes());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsPartsIndirectes());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsPartsVocationTitulaire());
        $this->assertEquals(25.9, $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentageVotes());
        $this->assertEquals(25.9, $res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentageVotesDirects());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getPourcentageVotesIndirects());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsVotesDirects());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsVotesIndirects());
        $this->assertNull($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetailsSocieteGestion());
        $this->assertFalse($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetentionPouvoirDecisionAg());
        $this->assertFalse($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetentionPouvoirNomMembreConseilAdministration());
        $this->assertFalse($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getDetentionAutresMoyensControle());
        $this->assertFalse($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getBeneficiaireRepresentantLegal());
        $this->assertFalse($res->getEntreprise()->getBeneficiairesEffectifs()[0]->getRepresentantLegalPlacementSansGestionDelegation());

        // Entreprise > dépôts actes
        $this->assertCount(24, $res->getEntreprise()->getDepotsActes());
        $this->assertEquals("2021-01-04", $res->getEntreprise()->getDepotsActes()[0]->getDateDepot());
        $this->assertEquals("04/01/2021", $res->getEntreprise()->getDepotsActes()[0]->getDateDepotFormatee());
        $this->assertTrue($res->getEntreprise()->getDepotsActes()[0]->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Actes du 04-01-2021.pdf", $res->getEntreprise()->getDepotsActes()[0]->getNomFichierPdf());
        $this->assertEquals("QTQ0MzA2MTg0MTIwMjEwMTA0MzR8RXh0cmFpdCBkZSBwcm9jw6hzLXZlcmJhbHw", $res->getEntreprise()->getDepotsActes()[0]->getToken());

        // Entreprise > dépots actes > Actes
        $this->assertCount(1, $res->getEntreprise()->getDepotsActes()[0]->getActes());
        $this->assertEquals("Extrait de procès-verbal", $res->getEntreprise()->getDepotsActes()[0]->getActes()[0]->getType());
        $this->assertEquals("Poursuite d'activité malgré un actif net devenu inférieur à la moitié du capital social", $res->getEntreprise()->getDepotsActes()[0]->getActes()[0]->getDecision());
        $this->assertEquals("2020-07-07", $res->getEntreprise()->getDepotsActes()[0]->getActes()[0]->getDateActe());
        $this->assertEquals("07/07/2020", $res->getEntreprise()->getDepotsActes()[0]->getActes()[0]->getDateActeFormatee());

        // Entreprise > comptes
        $this->assertCount(18, $res->getEntreprise()->getComptes());
        $this->assertEquals("2020-07-16", $res->getEntreprise()->getComptes()[0]->getDateDepot());
        $this->assertEquals("16/07/2020", $res->getEntreprise()->getComptes()[0]->getDateDepotFormatee());
        $this->assertEquals("2019-12-31", $res->getEntreprise()->getComptes()[0]->getDateCloture());
        $this->assertEquals(2019, $res->getEntreprise()->getComptes()[0]->getAnneeCloture());
        $this->assertEquals("CS", $res->getEntreprise()->getComptes()[0]->getTypeComptes());
        $this->assertFalse($res->getEntreprise()->getComptes()[0]->getConfidentialite());
        $this->assertFalse($res->getEntreprise()->getComptes()[0]->getConfidentialiteCompteResultat());
        $this->assertTrue($res->getEntreprise()->getComptes()[0]->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Comptes sociaux 2019.pdf", $res->getEntreprise()->getComptes()[0]->getNomFichierPdf());
        $this->assertEquals("QzQ0MzA2MTg0MTIwMjAwNzE2MjAxOTEyMzFDUw", $res->getEntreprise()->getComptes()[0]->getToken());

        // Entreprise > publications BODACC
        $this->assertCount(19, $res->getEntreprise()->getPublicationsBodacc());
        $this->assertEquals("20210008", $res->getEntreprise()->getPublicationsBodacc()[0]->getNumeroParution());
        $this->assertEquals("2021-01-13", $res->getEntreprise()->getPublicationsBodacc()[0]->getDate());
        $this->assertEquals("1509", $res->getEntreprise()->getPublicationsBodacc()[0]->getNumeroAnnonce());
        $this->assertFalse($res->getEntreprise()->getPublicationsBodacc()[0]->getAnnonceRectificative());
        $this->assertEquals("B", $res->getEntreprise()->getPublicationsBodacc()[0]->getBodacc());
        $this->assertEquals("Modification", $res->getEntreprise()->getPublicationsBodacc()[0]->getType());
        $this->assertEquals("de Paris", $res->getEntreprise()->getPublicationsBodacc()[0]->getRcs());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getPublicationsBodacc()[0]->getNomEntreprise());
        $this->assertTrue($res->getEntreprise()->getPublicationsBodacc()[0]->getPersonneMorale());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getSigle());
        $this->assertEquals("GOOGLE FRANCE", $res->getEntreprise()->getPublicationsBodacc()[0]->getDenomination());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getNomCommercial());
        $this->assertEquals("Société à responsabilité limitée (à associé unique)", $res->getEntreprise()->getPublicationsBodacc()[0]->getFormeJuridique());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getNom());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getPrenom());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getAdministration());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getPseudonyme());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getNationalite());
        $this->assertEquals("8 rue de Londres 75009 Paris", $res->getEntreprise()->getPublicationsBodacc()[0]->getAdresse());
        $this->assertEquals(1000000, $res->getEntreprise()->getPublicationsBodacc()[0]->getCapital());
        $this->assertEquals("EUR", $res->getEntreprise()->getPublicationsBodacc()[0]->getDeviseCapital());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getActivite());
        $this->assertNull($res->getEntreprise()->getPublicationsBodacc()[0]->getDateDebutActivite());
        $this->assertEquals("modification survenue sur le capital (diminution)", $res->getEntreprise()->getPublicationsBodacc()[0]->getDescription());

        // Entreprise > procedures collectives
        $this->assertCount(0, $res->getEntreprise()->getProceduresCollectives());

        // Entreprise
        $this->assertFalse($res->getEntreprise()->getProcedureCollectiveExiste());
        $this->assertFalse($res->getEntreprise()->getProcedureCollectiveEnCours());

        // Entreprise > derniers status
        $this->assertEquals("2021-01-04", $res->getEntreprise()->getDerniersStatuts()->getDateDepot());
        $this->assertEquals("04/01/2021", $res->getEntreprise()->getDerniersStatuts()->getDateDepotFormatee());
        $this->assertTrue($res->getEntreprise()->getDerniersStatuts()->getDisponible());
        $this->assertEquals("GOOGLE FRANCE - Actes du 04-01-2021.pdf", $res->getEntreprise()->getDerniersStatuts()->getNomFichierPdf());
        $this->assertEquals("QTQ0MzA2MTg0MTIwMjEwMTA0Njh8RMOpY2lzaW9uKHMpIGRlIGwnYXNzb2Npw6kgdW5pcXVlfA", $res->getEntreprise()->getDerniersStatuts()->getToken());
        $this->assertEquals("Statuts mis à jour", $res->getEntreprise()->getDerniersStatuts()->getType());
        $this->assertNull($res->getEntreprise()->getDerniersStatuts()->getDecision());
        $this->assertEquals("2020-12-15", $res->getEntreprise()->getDerniersStatuts()->getDateActe());
        $this->assertEquals("15/12/2020", $res->getEntreprise()->getDerniersStatuts()->getDateActeFormatee());

        // Entreprise > extrait immatriculation
        $this->assertEquals("SzQ0MzA2MTg0MQ", $res->getEntreprise()->getExtraitImmatriculation()->getToken());
    }

    /**
     * Test deserializeEntrepriseResponse()
     *
     * @return void
     */
    public function testDeserializeEntrepriseResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeEntrepriseResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertNull($res->getEntreprise());
    }

    /**
     * Test deserializeRechercheDirigeantsResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheDirigeantsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheDirigeantsResponse.json");

        $res = ResponseDeserializer::deserializeRechercheDirigeantsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(1, $res->getPage());
        $this->assertEquals(1, $res->getTotal());

        $this->assertCount(1, $res->getResultats());

        // Représentants
        $this->assertNull($res->getResultats()[0]->getQualite());
        $this->assertTrue($res->getResultats()[0]->getPersonneMorale());
        $this->assertNull($res->getResultats()[0]->getDatePrisePoste());
        $this->assertTrue($res->getResultats()[0]->getActuel());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getDenomination());
        $this->assertEquals("443061841", $res->getResultats()[0]->getSiren());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getNomComplet());
        $this->assertNull($res->getResultats()[0]->getFormeJuridique());

        // Représentants > entreprises
        $this->assertCount(1, $res->getResultats()[0]->getEntreprises());
        $this->assertEquals("523968873", $res->getResultats()[0]->getEntreprises()[0]->getSiren());
        $this->assertEquals("523 968 873", $res->getResultats()[0]->getEntreprises()[0]->getSirenFormate());
        $this->assertEquals("FRANCE IX SERVICES", $res->getResultats()[0]->getEntreprises()[0]->getNomEntreprise());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSexe());

        // Représentants > entreprises > siège
        $this->assertEquals("52396887300019", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getSiret());
        $this->assertEquals("523 968 873 00019", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getSiretFormate());
        $this->assertEquals("00019", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getNic());
        $this->assertEquals(88, $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getNumeroVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getIndiceRepetition());
        $this->assertEquals("AV", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getTypeVoie());
        $this->assertEquals("DES TERNES", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLibelleVoie());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getComplementAdresse());
        $this->assertEquals("88 AV DES TERNES", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getAdresseLigne1());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getAdresseLigne2());
        $this->assertEquals("75017", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getCodePostal());
        $this->assertEquals("PARIS 17", $res->getResultats()[0]->getEntreprises()[0]->getSiege()->getVille());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLatitude());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getSiege()->getLongitude());

        // Représentants > entreprises
        $this->assertEquals(["PARIS 17", "PARIS 8", "LYON 7EME"], $res->getResultats()[0]->getEntreprises()[0]->getVilles());
        $this->assertEquals("63.11Z", $res->getResultats()[0]->getEntreprises()[0]->getCodeNaf());
        $this->assertEquals("Traitement de données, hébergement et activités connexes", $res->getResultats()[0]->getEntreprises()[0]->getLibelleCodeNaf());
        $this->assertEquals("Services d'information", $res->getResultats()[0]->getEntreprises()[0]->getDomaineActivite());

        // Représentants > entreprises > conventions collectives
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprises()[0]->getConventionCollectives()[0]->getConfirmee());

        // Représentants > entreprises
        $this->assertEquals("2010-06-30", $res->getResultats()[0]->getEntreprises()[0]->getDateCreation());
        $this->assertEquals("30/06/2010", $res->getResultats()[0]->getEntreprises()[0]->getDateCreationFormate());
        $this->assertTrue($res->getResultats()[0]->getEntreprises()[0]->getEntrepriseEmployeuse());
        $this->assertFalse($res->getResultats()[0]->getEntreprises()[0]->getEntrepriseCessee());
        $this->assertNull($res->getResultats()[0]->getEntreprises()[0]->getDateCessation());
        $this->assertEquals("5720", $res->getResultats()[0]->getEntreprises()[0]->getCategorieJuridique());
        $this->assertEquals("SASU, société par actions simplifiée unipersonnelle", $res->getResultats()[0]->getEntreprises()[0]->getFormeJuridique());
        $this->assertEquals("11", $res->getResultats()[0]->getEntreprises()[0]->getTrancheEffectif());
        $this->assertEquals("Entre 10 et 19 salariés", $res->getResultats()[0]->getEntreprises()[0]->getEffectif());
        $this->assertEquals(10, $res->getResultats()[0]->getEntreprises()[0]->getEffectifMin());
        $this->assertEquals(19, $res->getResultats()[0]->getEntreprises()[0]->getEffectifMax());
        $this->assertEquals(2018, $res->getResultats()[0]->getEntreprises()[0]->getAnneeEffectif());
        $this->assertEquals(278744, $res->getResultats()[0]->getEntreprises()[0]->getCapital());
        $this->assertEquals(4433802, $res->getResultats()[0]->getEntreprises()[0]->getChiffreAffaires());
        $this->assertEquals(16986, $res->getResultats()[0]->getEntreprises()[0]->getResultat());
        $this->assertEquals(21, $res->getResultats()[0]->getEntreprises()[0]->getEffectifsFinances());
        $this->assertEquals(2020, $res->getResultats()[0]->getEntreprises()[0]->getAnneeFinances());

        // Représentants
        $this->assertEquals(1, $res->getResultats()[0]->getNbEntreprisesTotal());
    }

    /**
     * Test deserializeRechercheDirigeantsResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheDirigeantsResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeRechercheDirigeantsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Test deserializeRechercheDocumentsResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheDocumentsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheDocumentsResponse.json");

        $res = ResponseDeserializer::deserializeRechercheDocumentsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(1, $res->getPage());
        $this->assertEquals(51, $res->getTotal());

        $this->assertCount(10, $res->getResultats());

        // Documents > titres
        $this->assertCount(1, $res->getResultats()[0]->getTitres());
        $this->assertEquals("Nomination de co-gérant", $res->getResultats()[0]->getTitres()[0]->getDecision());
        $this->assertEquals("Procès-verbal d'assemblée générale ordinaire", $res->getResultats()[0]->getTitres()[0]->getType());

        // Documents
        $this->assertEquals("443061841", $res->getResultats()[0]->getSiren());
        $this->assertEquals("42541", $res->getResultats()[0]->getNumChrono());
        $this->assertEquals("2003-07-02", $res->getResultats()[0]->getDateDepot());
        $this->assertNull($res->getResultats()[0]->getIdFichier());
        $this->assertEquals("acte", $res->getResultats()[0]->getType());
        $this->assertEquals([], $res->getResultats()[0]->getMentions());

        // Documents > entreprise
        $this->assertEquals("443061841", $res->getResultats()[0]->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getEntreprise()->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getDenomination());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSexe());

        // Documents > entreprise > siège
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
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getLatitude());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getLongitude());

        // Documents > entreprise
        $this->assertEquals(["PARIS 9", "MEYLAN", "RENNES", "NANCY", "MONTPELLIER", "SAINT-ETIENNE"], $res->getResultats()[0]->getEntreprise()->getVilles());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getEntreprise()->getDomaineActivite());

        // Documents > entreprise > conventions collectives
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getConfirmee());

        // Documents > entreprise
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getEntreprise()->getDateCreationFormate());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertFalse($res->getResultats()[0]->getEntreprise()->getEntrepriseCessee());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getDateCessation());
        $this->assertEquals("5498", $res->getResultats()[0]->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("EURL, entreprise unipersonnelle à responsabilité limitée", $res->getResultats()[0]->getEntreprise()->getFormeJuridique());
        $this->assertEquals("41", $res->getResultats()[0]->getEntreprise()->getTrancheEffectif());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEntreprise()->getEffectifMax());
        $this->assertEquals(2018, $res->getResultats()[0]->getEntreprise()->getAnneeEffectif());
        $this->assertEquals(1000000, $res->getResultats()[0]->getEntreprise()->getCapital());
        $this->assertEquals(483033598, $res->getResultats()[0]->getEntreprise()->getChiffreAffaires());
        $this->assertEquals(-539868050, $res->getResultats()[0]->getEntreprise()->getResultat());
        $this->assertEquals(859, $res->getResultats()[0]->getEntreprise()->getEffectifsFinances());
        $this->assertEquals(2019, $res->getResultats()[0]->getEntreprise()->getAnneeFinances());

        // Documents
        $this->assertEquals("QTQ0MzA2MTg0MTIwMDMwNzAyNDF8UHJvY8Oocy12ZXJiYWwgZCdhc3NlbWJsw6llIGfDqW7DqXJhbGUgb3JkaW5haXJlfA", $res->getResultats()[0]->getToken());
    }

    /**
     * Test deserializeRechercheDocumentsResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheDocumentsResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeRechercheDocumentsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Test deserializeRecherchePublicationsResponse()
     *
     * @return void
     */
    public function testDeserializeRecherchePublicationsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRecherchePublicationsResponse.json");

        $res = ResponseDeserializer::deserializeRecherchePublicationsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(1, $res->getPage());
        $this->assertEquals(29, $res->getTotal());

        $this->assertCount(10, $res->getResultats());

        // Publications BODACC
        $this->assertEquals("2021-01-13", $res->getResultats()[0]->getDate());
        $this->assertEquals("443061841", $res->getResultats()[0]->getSiren());
        $this->assertEquals("Modification", $res->getResultats()[0]->getType());
        $this->assertEquals("Modification
Bodacc B n°20210008 publié le 13/01/2021

Annonce n° 1509
n°RCS : 443 061 841 RCS de Paris
Dénomination : GOOGLE FRANCE
Forme juridique : Société à responsabilité limitée (à associé unique)
Capital : 1000000 €
Adresse : 8 rue de Londres 75009 Paris
Commentaires : modification survenue sur le capital (diminution)", $res->getResultats()[0]->getContenu());

        // Publications BODACC > entreprise
        $this->assertEquals("443061841", $res->getResultats()[0]->getEntreprise()->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getEntreprise()->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getEntreprise()->getDenomination());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getNom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getPrenom());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSexe());

        // Publications BODACC > entreprise > siège
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
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getLatitude());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getSiege()->getLongitude());

        // Publications BODACC > entreprise
        $this->assertEquals(["PARIS 9", "MEYLAN", "RENNES", "NANCY", "MONTPELLIER", "SAINT-ETIENNE"], $res->getResultats()[0]->getEntreprise()->getVilles());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getEntreprise()->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getEntreprise()->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getEntreprise()->getDomaineActivite());

        // Publications BODACC > entreprise > conventions collectives
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getConventionCollectives()[0]->getConfirmee());

        // Publications BODACC > entreprise
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getEntreprise()->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getEntreprise()->getDateCreationFormate());
        $this->assertTrue($res->getResultats()[0]->getEntreprise()->getEntrepriseEmployeuse());
        $this->assertFalse($res->getResultats()[0]->getEntreprise()->getEntrepriseCessee());
        $this->assertNull($res->getResultats()[0]->getEntreprise()->getDateCessation());
        $this->assertEquals("5498", $res->getResultats()[0]->getEntreprise()->getCategorieJuridique());
        $this->assertEquals("EURL, entreprise unipersonnelle à responsabilité limitée", $res->getResultats()[0]->getEntreprise()->getFormeJuridique());
        $this->assertEquals("41", $res->getResultats()[0]->getEntreprise()->getTrancheEffectif());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEntreprise()->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEntreprise()->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEntreprise()->getEffectifMax());
        $this->assertEquals(2018, $res->getResultats()[0]->getEntreprise()->getAnneeEffectif());
        $this->assertEquals(1000000, $res->getResultats()[0]->getEntreprise()->getCapital());
        $this->assertEquals(483033598, $res->getResultats()[0]->getEntreprise()->getChiffreAffaires());
        $this->assertEquals(-539868050, $res->getResultats()[0]->getEntreprise()->getResultat());
        $this->assertEquals(859, $res->getResultats()[0]->getEntreprise()->getEffectifsFinances());
        $this->assertEquals(2019, $res->getResultats()[0]->getEntreprise()->getAnneeFinances());
    }

    /**
     * Test deserializeRecherchePublicationsResponse()
     *
     * @return void
     */
    public function testDeserializeRecherchePublicationsResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeRecherchePublicationsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Test deserializeRechercheResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeRechercheResponse.json");

        $res = ResponseDeserializer::deserializeRechercheResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertEquals(1, $res->getPage());
        $this->assertEquals(3, $res->getTotal());

        $this->assertCount(3, $res->getResultats());

        // Entreprises
        $this->assertEquals("443061841", $res->getResultats()[0]->getSiren());
        $this->assertEquals("443 061 841", $res->getResultats()[0]->getSirenFormate());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getNomEntreprise());
        $this->assertTrue($res->getResultats()[0]->getPersonneMorale());
        $this->assertEquals("GOOGLE FRANCE", $res->getResultats()[0]->getDenomination());
        $this->assertNull($res->getResultats()[0]->getNom());
        $this->assertNull($res->getResultats()[0]->getPrenom());
        $this->assertNull($res->getResultats()[0]->getSexe());

        // Entreprises > siège
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
        $this->assertNull($res->getResultats()[0]->getSiege()->getLatitude());
        $this->assertNull($res->getResultats()[0]->getSiege()->getLongitude());

        // Entreprises
        $this->assertEquals(["PARIS 9", "MEYLAN", "RENNES", "NANCY", "MONTPELLIER", "SAINT-ETIENNE"], $res->getResultats()[0]->getVilles());
        $this->assertEquals("70.10Z", $res->getResultats()[0]->getCodeNaf());
        $this->assertEquals("Activités des sièges sociaux", $res->getResultats()[0]->getLibelleCodeNaf());
        $this->assertEquals("Activités des sièges sociaux ; conseil de gestion", $res->getResultats()[0]->getDomaineActivite());

        // Entreprises > conventions collectives
        $this->assertCount(1, $res->getResultats()[0]->getConventionCollectives());
        $this->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $res->getResultats()[0]->getConventionCollectives()[0]->getNom());
        $this->assertEquals(1486, $res->getResultats()[0]->getConventionCollectives()[0]->getIdcc());
        $this->assertTrue($res->getResultats()[0]->getConventionCollectives()[0]->getConfirmee());

        // Entreprises
        $this->assertEquals("2002-05-16", $res->getResultats()[0]->getDateCreation());
        $this->assertEquals("16/05/2002", $res->getResultats()[0]->getDateCreationFormate());
        $this->assertTrue($res->getResultats()[0]->getEntrepriseEmployeuse());
        $this->assertFalse($res->getResultats()[0]->getEntrepriseCessee());
        $this->assertNull($res->getResultats()[0]->getDateCessation());
        $this->assertEquals("5498", $res->getResultats()[0]->getCategorieJuridique());
        $this->assertEquals("EURL, entreprise unipersonnelle à responsabilité limitée", $res->getResultats()[0]->getFormeJuridique());
        $this->assertEquals("41", $res->getResultats()[0]->getTrancheEffectif());
        $this->assertEquals("Entre 500 et 999 salariés", $res->getResultats()[0]->getEffectif());
        $this->assertEquals(500, $res->getResultats()[0]->getEffectifMin());
        $this->assertEquals(999, $res->getResultats()[0]->getEffectifMax());
        $this->assertEquals(2018, $res->getResultats()[0]->getAnneeEffectif());
        $this->assertEquals(1000000, $res->getResultats()[0]->getCapital());
        $this->assertEquals(483033598, $res->getResultats()[0]->getChiffreAffaires());
        $this->assertEquals(-539868050, $res->getResultats()[0]->getResultat());
        $this->assertEquals(859, $res->getResultats()[0]->getEffectifsFinances());
        $this->assertEquals(2019, $res->getResultats()[0]->getAnneeFinances());

        // Entreprises > dirigeants
        $this->assertCount(0, $res->getResultats()[0]->getRepresentants());

        // Entreprises > bénéficiaires
        $this->assertCount(0, $res->getResultats()[0]->getBeneficiairesEffectifs());

        // Entreprises > documents
        $this->assertCount(0, $res->getResultats()[0]->getDocuments());

        // Entreprises > publications
        $this->assertCount(0, $res->getResultats()[0]->getPublicationsBodacc());

        // Entreprises
        $this->assertEquals(7, $res->getResultats()[0]->getNbDirigeantsTotal());
        $this->assertEquals(2, $res->getResultats()[0]->getNbBeneficiairesTotal());
        $this->assertEquals(0, $res->getResultats()[0]->getNbDocumentsAvecMentions());
        $this->assertEquals(25, $res->getResultats()[0]->getNbDocumentsTotal());
        $this->assertEquals(0, $res->getResultats()[0]->getNbPublicationsAvecMentions());
        $this->assertEquals(19, $res->getResultats()[0]->getNbPublicationsTotal());
    }

    /**
     * Test deserializeRechercheResponse()
     *
     * @return void
     */
    public function testDeserializeRechercheResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeRechercheResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertEquals([], $res->getResultats());
    }

    /**
     * Test deserializeSuggestionsResponse()
     *
     * @return void
     */
    public function testDeserializeSuggestionsResponse(): void {

        $assertions = function(Entreprise $obj, AbstractTestCase $test) {

            // Entreprise
            $test->assertEquals("443061841", $obj->getSiren());
            $test->assertEquals("443 061 841", $obj->getSirenFormate());
            $test->assertEquals("GOOGLE FRANCE", $obj->getNomEntreprise());
            $test->assertTrue($obj->getPersonneMorale());
            $test->assertEquals("GOOGLE FRANCE", $obj->getDenomination());
            $test->assertNull($obj->getNom());
            $test->assertNull($obj->getPrenom());
            $test->assertNull($obj->getSexe());

            // Entreprise > siège
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
            $test->assertNull($obj->getSiege()->getLatitude());
            $test->assertNull($obj->getSiege()->getLongitude());

            // Entreprise
            $test->assertEquals(["PARIS 9", "MEYLAN", "RENNES", "NANCY", "MONTPELLIER", "SAINT-ETIENNE"], $obj->getVilles());
            $test->assertEquals("70.10Z", $obj->getCodeNaf());
            $test->assertEquals("Activités des sièges sociaux", $obj->getLibelleCodeNaf());
            $test->assertEquals("Activités des sièges sociaux ; conseil de gestion", $obj->getDomaineActivite());

            // Entreprise > conventions collectives
            $test->assertEquals("Convention collective nationale applicable au personnel des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils(BET, SYNTEC)", $obj->getConventionCollectives()[0]->getNom());
            $test->assertEquals(1486, $obj->getConventionCollectives()[0]->getIdcc());
            $test->assertTrue($obj->getConventionCollectives()[0]->getConfirmee());

            // Entreprise
            $test->assertEquals("2002-05-16", $obj->getDateCreation());
            $test->assertEquals("16/05/2002", $obj->getDateCreationFormate());
            $test->assertTrue($obj->getEntrepriseEmployeuse());
            $test->assertFalse($obj->getEntrepriseCessee());
            $test->assertNull($obj->getDateCessation());
            $test->assertEquals("5498", $obj->getCategorieJuridique());
            $test->assertEquals("EURL, entreprise unipersonnelle à responsabilité limitée", $obj->getFormeJuridique());
            $test->assertEquals("41", $obj->getTrancheEffectif());
            $test->assertEquals("Entre 500 et 999 salariés", $obj->getEffectif());
            $test->assertEquals(500, $obj->getEffectifMin());
            $test->assertEquals(999, $obj->getEffectifMax());
            $test->assertEquals(2018, $obj->getAnneeEffectif());
            $test->assertEquals(1000000, $obj->getCapital());
            $test->assertEquals(483033598, $obj->getChiffreAffaires());
            $test->assertEquals(-539868050, $obj->getResultat());
            $test->assertEquals(859, $obj->getEffectifsFinances());
            $test->assertEquals(2019, $obj->getAnneeFinances());
        };

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeSuggestionsResponse.json");

        $res = ResponseDeserializer::deserializeSuggestionsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        // Suggestions > résultats nom entreprise
        $this->assertCount(1, $res->getResultatsNomEntreprise());

        $assertions($res->getResultatsNomEntreprise()[0], $this);
        $this->assertEquals("<em>GOOGLE FRANCE</em>", $res->getResultatsNomEntreprise()[0]->getMention());

        // Suggestions > résultats dénomination
        $this->assertCount(1, $res->getResultatsDenomination());

        $assertions($res->getResultatsDenomination()[0], $this);
        $this->assertEquals("<em>GOOGLE FRANCE</em>", $res->getResultatsDenomination()[0]->getMention());

        // Suggestions > résultats nom complet
        $this->assertCount(1, $res->getResultatsNomComplet());

        $assertions($res->getResultatsNomComplet()[0], $this);
        $this->assertEquals("<em>Kenneth Yi</em>", $res->getResultatsNomComplet()[0]->getMention());

        // Suggestions > résultats représentant
        $this->assertCount(1, $res->getResultatsRepresentant());

        $this->assertEquals("Gérant", $res->getResultatsRepresentant()[0]->getQualite());
        $this->assertFalse($res->getResultatsRepresentant()[0]->getPersonneMorale());
        $this->assertNull($res->getResultatsRepresentant()[0]->getDatePrisePoste());
        $this->assertTrue($res->getResultatsRepresentant()[0]->getActuel());
        $this->assertEquals("<em>Kenneth Yi</em>", $res->getResultatsRepresentant()[0]->getMention());
        $this->assertEquals("Yi", $res->getResultatsRepresentant()[0]->getNom());
        $this->assertEquals("Kenneth H.", $res->getResultatsRepresentant()[0]->getPrenom());
        $this->assertEquals("Kenneth H. Yi", $res->getResultatsRepresentant()[0]->getNomComplet());
        $this->assertEquals("1970-01-06", $res->getResultatsRepresentant()[0]->getDateNaissance());
        $this->assertEquals("06/01/1970", $res->getResultatsRepresentant()[0]->getDateNaissanceFormatee());
        $this->assertEquals(51, $res->getResultatsRepresentant()[0]->getAge());
        $this->assertEquals("Américaine (Etats Unis)", $res->getResultatsRepresentant()[0]->getNationalite());
        $this->assertEquals("Séoul", $res->getResultatsRepresentant()[0]->getVilleNaissance());
        $this->assertEquals("COREE DU SUD", $res->getResultatsRepresentant()[0]->getPaysNaissance());
        $this->assertNull($res->getResultatsRepresentant()[0]->getAdresseLigne1());
        $this->assertNull($res->getResultatsRepresentant()[0]->getAdresseLigne2());
        $this->assertNull($res->getResultatsRepresentant()[0]->getAdresseLigne3());
        $this->assertNull($res->getResultatsRepresentant()[0]->getCodePostal());
        $this->assertNull($res->getResultatsRepresentant()[0]->getVille());
        $this->assertNull($res->getResultatsRepresentant()[0]->getPays());

        // Suggestions > résultats SIREN
        $this->assertCount(1, $res->getResultatsSiren());

        $assertions($res->getResultatsSiren()[0], $this);
        $this->assertEquals("<em>443061841</em>", $res->getResultatsSiren()[0]->getMention());

        // Suggestions > résultats SIRET
        $this->assertCount(1, $res->getResultatsSiret());

        $assertions($res->getResultatsSiret()[0], $this);
        $this->assertEquals("<em>443061841</em>00013", $res->getResultatsSiret()[0]->getMention());
    }

    /**
     * Test deserializeSuggestionsResponse()
     *
     * @return void
     */
    public function testDeserializeSuggestionsResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeSuggestionsResponse($rawResponse);
        $this->assertEquals($rawResponse, $res->getRawResponse());

        $this->assertEquals([], $res->getResultatsNomEntreprise());
        $this->assertEquals([], $res->getResultatsDenomination());
        $this->assertEquals([], $res->getResultatsNomComplet());
        $this->assertEquals([], $res->getResultatsRepresentant());
        $this->assertEquals([], $res->getResultatsSiren());
        $this->assertEquals([], $res->getResultatsSiret());
    }
}
