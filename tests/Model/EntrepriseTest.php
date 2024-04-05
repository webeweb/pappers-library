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

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\BeneficiaireEffectif;
use WBW\Library\Pappers\Model\Compte;
use WBW\Library\Pappers\Model\ConventionCollective;
use WBW\Library\Pappers\Model\DepotActe;
use WBW\Library\Pappers\Model\Document;
use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Model\Etablissement;
use WBW\Library\Pappers\Model\ExtraitImmatriculation;
use WBW\Library\Pappers\Model\Finance;
use WBW\Library\Pappers\Model\ProcedureCollective;
use WBW\Library\Pappers\Model\RepertoireNationalMetiers;
use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Model\Statuts;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Entreprise test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class EntrepriseTest extends AbstractTestCase {

    /**
     * Test addBeneficiaireEffectif()
     *
     * @return void
     */
    public function testAddBeneficiaireEffectif(): void {

        // Set a Bénéficiaire effectif mock.
        $beneficiaireEffectif = new BeneficiaireEffectif();

        $obj = new Entreprise();

        $obj->addBeneficiaireEffectif($beneficiaireEffectif);
        $this->assertSame($beneficiaireEffectif, $obj->getBeneficiairesEffectifs()[0]);
    }

    /**
     * Test addCompte()
     *
     * @return void
     */
    public function testAddCompte(): void {

        // Set a Compte mock.
        $compte = new Compte();

        $obj = new Entreprise();

        $obj->addCompte($compte);
        $this->assertSame($compte, $obj->getComptes()[0]);
    }

    /**
     * Test addConventionCollective()
     *
     * @return void
     */
    public function testAddConventionCollective(): void {

        // Set a Convention collective mock.
        $conventionCollective = new ConventionCollective();

        $obj = new Entreprise();

        $obj->addConventionCollective($conventionCollective);
        $this->assertSame($conventionCollective, $obj->getConventionCollectives()[0]);
    }

    /**
     * Test addDepotActe()
     *
     * @return void
     */
    public function testAddDepotActe(): void {

        // Set a Dépôt acte mock.
        $depotActe = new DepotActe();

        $obj = new Entreprise();

        $obj->addDepotActe($depotActe);
        $this->assertSame($depotActe, $obj->getDepotsActes()[0]);
    }

    /**
     * Test addDocument()
     *
     * @return void
     */
    public function testAddDocument(): void {

        // Set a Document mock.
        $compte = new Document();

        $obj = new Entreprise();

        $obj->addDocument($compte);
        $this->assertSame($compte, $obj->getDocuments()[0]);
    }

    /**
     * Test set()
     *
     * @return void
     */
    public function testAddEtablissement(): void {

        // Set an Etablissement mock.
        $etablissement = new Etablissement();

        $obj = new Entreprise();

        $obj->addEtablissement($etablissement);
        $this->assertSame($etablissement, $obj->getEtablissements()[0]);
    }

    /**
     * Test addFinance()
     *
     * @return void
     */
    public function testAddFinance(): void {

        // Set a Finance mock.
        $finance = new Finance();

        $obj = new Entreprise();

        $obj->addFinance($finance);
        $this->assertSame($finance, $obj->getFinances()[0]);
    }

    /**
     * Test set()
     *
     * @return void
     */
    public function testAddProcedureCollective(): void {

        // Set a Procédure collective mock.
        $procedureCollective = new ProcedureCollective();

        $obj = new Entreprise();

        $obj->addProcedureCollective($procedureCollective);
        $this->assertSame($procedureCollective, $obj->getProceduresCollectives()[0]);
    }

    /**
     * Test addRepresentant()
     *
     * @return void
     */
    public function testAddRepresentant(): void {

        // Set a Représentant mock.
        $representant = new Representant();

        $obj = new Entreprise();

        $obj->addRepresentant($representant);
        $this->assertSame($representant, $obj->getRepresentants()[0]);
    }

    /**
     * Test setAnneeFinances()
     *
     * @return void
     */
    public function testSetAnneeFinances(): void {

        $obj = new Entreprise();

        $obj->setAnneeFinances("anneeFinances");
        $this->assertEquals("anneeFinances", $obj->getAnneeFinances());
    }

    /**
     * Test setAssocieUnique()
     *
     * @return void
     */
    public function testSetAssocieUnique(): void {

        $obj = new Entreprise();

        $obj->setAssocieUnique(true);
        $this->assertTrue($obj->getAssocieUnique());
    }

    /**
     * Test setCapitalActuelVariable()
     *
     * @return void
     */
    public function testSetCapitalActuelVariable(): void {

        $obj = new Entreprise();

        $obj->setCapitalActuelVariable(1);
        $this->assertEquals(1, $obj->getCapitalActuelVariable());
    }

    /**
     * Test setCapitalFormate()
     *
     * @return void
     */
    public function testSetCapitalFormate(): void {

        $obj = new Entreprise();

        $obj->setCapitalFormate("capitalFormate");
        $this->assertEquals("capitalFormate", $obj->getCapitalFormate());
    }

    /**
     * Test setDateCessationFormatee()
     *
     * @return void
     */
    public function testSetDateCessationFormatee(): void {

        $obj = new Entreprise();

        $obj->setDateCessationFormatee("dateCessationFormatee");
        $this->assertEquals("dateCessationFormatee", $obj->getDateCessationFormatee());
    }

    /**
     * Test setDateClotureExceptionnelle()
     *
     * @return void
     */
    public function testSetDateClotureExceptionnelle(): void {

        $obj = new Entreprise();

        $obj->setDateClotureExceptionnelle("dateClotureExceptionnelle");
        $this->assertEquals("dateClotureExceptionnelle", $obj->getDateClotureExceptionnelle());
    }

    /**
     * Test setDateClotureExerciceExceptionnelle()
     *
     * @return void
     */
    public function testSetDateClotureExerciceExceptionnelle(): void {

        $obj = new Entreprise();

        $obj->setDateClotureExerciceExceptionnelle("dateClotureExerciceExceptionnelle");
        $this->assertEquals("dateClotureExerciceExceptionnelle", $obj->getDateClotureExerciceExceptionnelle());
    }

    /**
     * Test setDateClotureExerciceExceptionnelleFormate()
     *
     * @return void
     */
    public function testSetDateClotureExerciceExceptionnelleFormate(): void {

        $obj = new Entreprise();

        $obj->setDateClotureExerciceExceptionnelleFormate("dateClotureExerciceExceptionnelleFormate");
        $this->assertEquals("dateClotureExerciceExceptionnelleFormate", $obj->getDateClotureExerciceExceptionnelleFormate());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     */
    public function testSetDateCreation(): void {

        $obj = new Entreprise();

        $obj->setDateCreation("dateCreation");
        $this->assertEquals("dateCreation", $obj->getDateCreation());
    }

    /**
     * Test setDateCreationFormate()
     *
     * @return void
     */
    public function testSetDateCreationFormate(): void {

        $obj = new Entreprise();

        $obj->setDateCreationFormate("dateCreationFormate");
        $this->assertEquals("dateCreationFormate", $obj->getDateCreationFormate());
    }

    /**
     * Test setDateImmatriculationRcs()
     *
     * @return void
     */
    public function testSetDateImmatriculationRcs(): void {

        $obj = new Entreprise();

        $obj->setDateImmatriculationRcs("dateImmatriculationRcs");
        $this->assertEquals("dateImmatriculationRcs", $obj->getDateImmatriculationRcs());
    }

    /**
     * Test setDatePremiereImmatriculationRcs()
     *
     * @return void
     */
    public function testSetDatePremiereImmatriculationRcs(): void {

        $obj = new Entreprise();

        $obj->setDatePremiereImmatriculationRcs("datePremiereImmatriculationRcs");
        $this->assertEquals("datePremiereImmatriculationRcs", $obj->getDatePremiereImmatriculationRcs());
    }

    /**
     * Test setDateRadiationRcs()
     *
     * @return void
     */
    public function testSetDateRadiationRcs(): void {

        $obj = new Entreprise();

        $obj->setDateRadiationRcs("dateRadiationRcs");
        $this->assertEquals("dateRadiationRcs", $obj->getDateRadiationRcs());
    }

    /**
     * Test setDernierTraitement()
     *
     * @return void
     */
    public function testSetDernierTraitement(): void {

        $obj = new Entreprise();

        $obj->setDernierTraitement("dernierTraitement");
        $this->assertEquals("dernierTraitement", $obj->getDernierTraitement());
    }

    /**
     * Test setDerniereMiseJourRcs()
     *
     * @return void
     */
    public function testSetDerniereMiseJourRcs(): void {

        $obj = new Entreprise();

        $obj->setDerniereMiseJourRcs("dernierMiseJourRcs");
        $this->assertEquals("dernierMiseJourRcs", $obj->getDerniereMiseJourRcs());
    }

    /**
     * Test setDerniereMiseJourSirene()
     *
     * @return void
     */
    public function testSetDerniereMiseJourSirene(): void {

        $obj = new Entreprise();

        $obj->setDerniereMiseJourSirene("dernierMiseJourSirene");
        $this->assertEquals("dernierMiseJourSirene", $obj->getDerniereMiseJourSirene());
    }

    /**
     * Test setDerniersStatuts()
     *
     * @return void
     */
    public function testSetDerniersStatuts(): void {

        // Set a Dernier statuts mock.
        $dernierStatuts = new Statuts();

        $obj = new Entreprise();

        $obj->setDerniersStatuts($dernierStatuts);
        $this->assertSame($dernierStatuts, $obj->getDerniersStatuts());
    }

    /**
     * Test setDiffusable()
     *
     * @return void
     */
    public function testSetDiffusable(): void {

        $obj = new Entreprise();

        $obj->setDiffusable(true);
        $this->assertTrue($obj->getDiffusable());
    }

    /**
     * Test setDomaineActivite()
     *
     * @return void
     */
    public function testSetDomaineActivite(): void {

        $obj = new Entreprise();

        $obj->setDomaineActivite("domaineActivite");
        $this->assertEquals("domaineActivite", $obj->getDomaineActivite());
    }

    /**
     * Test setDureePersonneMorale()
     *
     * @return void
     */
    public function testSetDureePersonneMorale(): void {

        $obj = new Entreprise();

        $obj->setDureePersonneMorale("dureePersonneMorale");
        $this->assertEquals("dureePersonneMorale", $obj->getDureePersonneMorale());
    }

    /**
     * Test setEconomieSocialeSolidaire()
     *
     * @return void
     */
    public function testSetEconomieSocialeSolidaire(): void {

        $obj = new Entreprise();

        $obj->setEconomieSocialeSolidaire(true);
        $this->assertTrue($obj->getEconomieSocialeSolidaire());
    }

    /**
     * Test setEffectifsFinances()
     *
     * @return void
     */
    public function testSetEffectifsFinances(): void {

        $obj = new Entreprise();

        $obj->setEffectifsFinances(1);
        $this->assertEquals(1, $obj->getEffectifsFinances());
    }

    /**
     * Test setEntrepriseEmployeuse()
     *
     * @return void
     */
    public function testSetEntrepriseEmployeuse(): void {

        $obj = new Entreprise();

        $obj->setEntrepriseEmployeuse(true);
        $this->assertTrue($obj->getEntrepriseEmployeuse());
    }

    /**
     * Test setExtraitImmatriculation()
     *
     * @return void
     */
    public function testSetExtraitImmatriculation(): void {

        // Set an Extrait immatriculation.
        $extraitImmatriculation = new ExtraitImmatriculation();

        $obj = new Entreprise();

        $obj->setExtraitImmatriculation($extraitImmatriculation);
        $this->assertSame($extraitImmatriculation, $obj->getExtraitImmatriculation());
    }

    /**
     * Test setLibelleCodeNaf()
     *
     * @return void
     */
    public function testSetLibelleCodeNaf(): void {

        $obj = new Entreprise();

        $obj->setLibelleCodeNaf("libelleCodeNaf");
        $this->assertEquals("libelleCodeNaf", $obj->getLibelleCodeNaf());
    }

    /**
     * Test setNbBeneficiairesTotal()
     *
     * @return void
     */
    public function testSetNbBeneficiairesTotal(): void {

        $obj = new Entreprise();

        $obj->setNbBeneficiairesTotal(1);
        $this->assertEquals(1, $obj->getNbBeneficiairesTotal());
    }

    /**
     * Test setNbDirigeantsTotal()
     *
     * @return void
     */
    public function testSetNbDirigeantsTotal(): void {

        $obj = new Entreprise();

        $obj->setNbDirigeantsTotal(1);
        $this->assertEquals(1, $obj->getNbDirigeantsTotal());
    }

    /**
     * Test setNbDocumentsAvecMentions()
     *
     * @return void
     */
    public function testSetNbDocumentsAvecMentions(): void {

        $obj = new Entreprise();

        $obj->setNbDocumentsAvecMentions(1);
        $this->assertEquals(1, $obj->getNbDocumentsAvecMentions());
    }

    /**
     * Test setNbDocumentsTotal()
     *
     * @return void
     */
    public function testSetNbDocumentsTotal(): void {

        $obj = new Entreprise();

        $obj->setNbDocumentsTotal(1);
        $this->assertEquals(1, $obj->getNbDocumentsTotal());
    }

    /**
     * Test setNbPublicationsAvecMentions()
     *
     * @return void
     */
    public function testSetNbPublicationsAvecMentions(): void {

        $obj = new Entreprise();

        $obj->setNbPublicationsAvecMentions(1);
        $this->assertEquals(1, $obj->getNbPublicationsAvecMentions());
    }

    /**
     * Test setNbPublicationsTotal()
     *
     * @return void
     */
    public function testSetNbPublicationsTotal(): void {

        $obj = new Entreprise();

        $obj->setNbPublicationsTotal(1);
        $this->assertEquals(1, $obj->getNbPublicationsTotal());
    }

    /**
     * Test setNumeroRcs()
     *
     * @return void
     */
    public function testSetNumeroRcs(): void {

        $obj = new Entreprise();

        $obj->setNumeroRcs("numeroRcs");
        $this->assertEquals("numeroRcs", $obj->getNumeroRcs());
    }

    /**
     * Test setNumeroTvaIntracommunautaire()
     *
     * @return void
     */
    public function testSetNumeroTvaIntracommunautaire(): void {

        $obj = new Entreprise();

        $obj->setNumeroTvaIntracommunautaire("numeroTvaIntracommunautaire");
        $this->assertEquals("numeroTvaIntracommunautaire", $obj->getNumeroTvaIntracommunautaire());
    }

    /**
     * Test setProcedureCollectiveEnCours()
     *
     * @return void
     */
    public function testSetProcedureCollectiveEnCours(): void {

        $obj = new Entreprise();

        $obj->setProcedureCollectiveEnCours(true);
        $this->assertTrue($obj->getProcedureCollectiveEnCours());
    }

    /**
     * Test setProcedureCollectiveExiste()
     *
     * @return void
     */
    public function testSetProcedureCollectiveExiste(): void {

        $obj = new Entreprise();

        $obj->setProcedureCollectiveExiste(true);
        $this->assertTrue($obj->getProcedureCollectiveExiste());
    }

    /**
     * Test setProchaineDateClotureExercice()
     *
     * @return void
     */
    public function testSetProchaineDateClotureExercice(): void {

        $obj = new Entreprise();

        $obj->setProchaineDateClotureExercice("prochaineDateClotureExercice");
        $this->assertEquals("prochaineDateClotureExercice", $obj->getProchaineDateClotureExercice());
    }

    /**
     * Test setProchaineDateClotureExerciceFormate()
     *
     * @return void
     */
    public function testSetProchaineDateClotureExerciceFormate(): void {

        $obj = new Entreprise();

        $obj->setProchaineDateClotureExerciceFormate("prochaineDateClotureExerciceFormate");
        $this->assertEquals("prochaineDateClotureExerciceFormate", $obj->getProchaineDateClotureExerciceFormate());
    }

    /**
     * Test setRnm()
     *
     * @return void
     */
    public function testSetRnm(): void {

        // Set a Répertoire national des métiers mock.
        $rnm = new RepertoireNationalMetiers();

        $obj = new Entreprise();

        $obj->setRnm($rnm);
        $this->assertSame($rnm, $obj->getRnm());
    }

    /**
     * Test setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new Entreprise();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Test setSiege()
     *
     * @return void
     */
    public function testSetSiege(): void {

        // Set a Siège mock.
        $siege = new Etablissement();

        $obj = new Entreprise();

        $obj->setSiege($siege);
        $this->assertSame($siege, $obj->getSiege());
    }

    /**
     * Test setSirenFormate()
     *
     * @return void
     */
    public function testSetSirenFormate(): void {

        $obj = new Entreprise();

        $obj->setSirenFormate("sirenFormate");
        $this->assertEquals("sirenFormate", $obj->getSirenFormate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Entreprise();

        $this->assertNull($obj->getAnneeEffectif());
        $this->assertNull($obj->getCapital());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getChiffreAffaires());
        $this->assertNull($obj->getDateCessation());
        $this->assertNull($obj->getDateClotureExercice());
        $this->assertNull($obj->getDenomination());
        $this->assertNull($obj->getDeviseCapital());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEffectifMax());
        $this->assertNull($obj->getEffectifMin());
        $this->assertNull($obj->getEntrepriseCessee());
        $this->assertNull($obj->getFormeJuridique());
        $this->assertNull($obj->getGreffe());
        $this->assertNull($obj->getMention());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomEntreprise());
        $this->assertNull($obj->getObjetSocial());
        $this->assertNull($obj->getPersonneMorale());
        $this->assertNull($obj->getPrenom());
        $this->assertEquals([], $obj->getPublicationsBodacc());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getSigle());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getStatutRcs());
        $this->assertNull($obj->getTrancheEffectif());

        $this->assertNull($obj->getAnneeFinances());
        $this->assertNull($obj->getAssocieUnique());
        $this->assertEquals([], $obj->getBeneficiairesEffectifs());
        $this->assertNull($obj->getCapitalFormate());
        $this->assertEquals([], $obj->getComptes());
        $this->assertEquals([], $obj->getConventionCollectives());
        $this->assertNull($obj->getDateCessationFormatee());
        $this->assertNull($obj->getDateClotureExceptionnelle());
        $this->assertNull($obj->getDateClotureExerciceExceptionnelle());
        $this->assertNull($obj->getDateClotureExerciceExceptionnelleFormate());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateCreationFormate());
        $this->assertNull($obj->getDateImmatriculationRcs());
        $this->assertNull($obj->getDatePremiereImmatriculationRcs());
        $this->assertNull($obj->getDateRadiationRcs());
        $this->assertEquals([], $obj->getDepotsActes());
        $this->assertNull($obj->getDerniereMiseJourRcs());
        $this->assertNull($obj->getDerniereMiseJourSirene());
        $this->assertNull($obj->getDerniersStatuts());
        $this->assertNull($obj->getDernierTraitement());
        $this->assertNull($obj->getDiffusable());
        $this->assertEquals([], $obj->getDocuments());
        $this->assertNull($obj->getDomaineActivite());
        $this->assertNull($obj->getDureePersonneMorale());
        $this->assertNull($obj->getEconomieSocialeSolidaire());
        $this->assertNull($obj->getEffectifsFinances());
        $this->assertNull($obj->getEntrepriseEmployeuse());
        $this->assertEquals([], $obj->getEtablissements());
        $this->assertNull($obj->getExtraitImmatriculation());
        $this->assertEquals([], $obj->getFinances());
        $this->assertNull($obj->getLibelleCodeNaf());
        $this->assertNull($obj->getNbBeneficiairesTotal());
        $this->assertNull($obj->getNbDirigeantsTotal());
        $this->assertNull($obj->getNbDocumentsAvecMentions());
        $this->assertNull($obj->getNbDocumentsTotal());
        $this->assertNull($obj->getNbPublicationsAvecMentions());
        $this->assertNull($obj->getNbPublicationsTotal());
        $this->assertNull($obj->getNumeroRcs());
        $this->assertNull($obj->getNumeroTvaIntracommunautaire());
        $this->assertEquals([], $obj->getProceduresCollectives());
        $this->assertNull($obj->getProcedureCollectiveEnCours());
        $this->assertNull($obj->getProcedureCollectiveExiste());
        $this->assertNull($obj->getProchaineDateClotureExercice());
        $this->assertNull($obj->getProchaineDateClotureExerciceFormate());
        $this->assertEquals([], $obj->getRepresentants());
        $this->assertNull($obj->getRnm());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSiege());
        $this->assertNull($obj->getSirenFormate());
        $this->assertEquals([], $obj->getVilles());
    }
}
