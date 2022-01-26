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

use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Serializer\RequestSerializer;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests the serializeDocumentTelechargementRequest() method.
     *
     * @return void
     */
    public function testSerializeDocumentTelechargementRequest(): void {

        // Set a Document téléchargement mock.
        $arg = new DocumentTelechargementRequest();
        $arg->setToken("token");

        $res = RequestSerializer::serializeDocumentTelechargementRequest($arg);
        $this->assertCount(1, $res);

        $this->assertEquals("token", $res["token"]);
    }

    /**
     * Tests the serializeEntrepriseRequest() method.
     *
     * @return void
     */
    public function testSerializeEntrepriseRequest(): void {

        // Set an Entreprise request mock.
        $arg = new EntrepriseRequest();
        $arg->setSiren("siren");
        $arg->setSiret("siret");
        $arg->setFormatPublicationsBodacc("formatPublicationsBodacc");
        $arg->setMarques(true);

        $res = RequestSerializer::serializeEntrepriseRequest($arg);
        $this->assertCount(4, $res);

        $this->assertEquals("siren", $res["siren"]);
        $this->assertEquals("siret", $res["siret"]);
        $this->assertEquals("formatPublicationsBodacc", $res["format_publications_bodacc"]);
        $this->assertTrue($res["marques"]);
    }

    /**
     * Tests the serializeRechercheDirigeantsRequest() method.
     *
     * @return void
     */
    public function testSerializeRechercheDirigeantsRequest(): void {

        // Set a Recherche dirigeants request mock.
        $arg = new RechercheDirigeantsRequest();
        $arg->setPage(2);
        $arg->setParPage(1);
        $arg->setPrecision("precision");
        $arg->setQ("q");
        $arg->setCodeNaf("codeNaf");
        $arg->setDepartement("departement");
        $arg->setRegion("region");
        $arg->setCodePostal("codePostal");
        $arg->setConventionCollective("conventionCollective");
        $arg->setCategorieJuridique("categorieJuridique");
        $arg->setEntrepriseCessee(true);
        $arg->setStatutRcs("statutRcs");
        $arg->setObjetSocial("objetSocial");
        $arg->setDateRadiationRcsMin("dateRadiationRcsMin");
        $arg->setDateRadiationRcsMax("dateRadiationRcsMax");
        $arg->setCapitalMin(1);
        $arg->setCapitalMax(99);
        $arg->setChiffreAffairesMin(1);
        $arg->setChiffreAffairesMax(99);
        $arg->setResultatMin(1);
        $arg->setResultatMax(99);
        $arg->setDateCreationMin("dateCreationMin");
        $arg->setDateCreationMax("dateCreationMax");
        $arg->setTrancheEffectifMin(1);
        $arg->setTrancheEffectifMax(99);
        $arg->setAgeDirigeantMin(1);
        $arg->setAgeDirigeantMax(99);
        $arg->setDateNaissanceDirigeantMin("dateNaissanceDirigeantMin");
        $arg->setDateNaissanceDirigeantMax("dateNaissanceDirigeantMax");
        $arg->setDateDepotDocumentMin("dateDepotDocumentMin");
        $arg->setDateDepotDocumentMax("dateDepotDocumentMax");
        $arg->setTypePublication("typePublication");
        $arg->setDatePublicationMin("datePublicationMin");
        $arg->setDatePublicationMax("datePublicationMax");

        $res = RequestSerializer::serializeRechercheDirigeantsRequest($arg);
        $this->assertCount(34, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(1, $res["par_page"]);
        $this->assertEquals("precision", $res["precision"]);
        $this->assertEquals("q", $res["q"]);
        $this->assertEquals("codeNaf", $res["code_naf"]);
        $this->assertEquals("departement", $res["departement"]);
        $this->assertEquals("region", $res["region"]);
        $this->assertEquals("codePostal", $res["code_postal"]);
        $this->assertEquals("conventionCollective", $res["convention_collective"]);
        $this->assertEquals("categorieJuridique", $res["categorie_juridique"]);
        $this->assertEquals("true", $res["entreprise_cessee"]);
        $this->assertEquals("statutRcs", $res["statut_rcs"]);
        $this->assertEquals("objetSocial", $res["objet_social"]);
        $this->assertEquals("dateRadiationRcsMin", $res["date_radiation_rcs_min"]);
        $this->assertEquals("dateRadiationRcsMax", $res["date_radiation_rcs_max"]);
        $this->assertEquals(1, $res["capital_min"]);
        $this->assertEquals(99, $res["capital_max"]);
        $this->assertEquals(1, $res["chiffre_affaires_min"]);
        $this->assertEquals(99, $res["chiffre_affaires_max"]);
        $this->assertEquals(1, $res["resultat_min"]);
        $this->assertEquals(99, $res["resultat_max"]);
        $this->assertEquals("dateCreationMin", $res["date_creation_min"]);
        $this->assertEquals("dateCreationMax", $res["date_creation_max"]);
        $this->assertEquals(1, $res["tranche_effectif_min"]);
        $this->assertEquals(99, $res["tranche_effectif_max"]);
        $this->assertEquals(1, $res["age_dirigeant_min"]);
        $this->assertEquals(99, $res["age_dirigeant_max"]);
        $this->assertEquals("dateNaissanceDirigeantMin", $res["date_de_naissance_dirigeant_min"]);
        $this->assertEquals("dateNaissanceDirigeantMax", $res["date_de_naissance_dirigeant_max"]);
        $this->assertEquals("dateDepotDocumentMin", $res["date_depot_document_min"]);
        $this->assertEquals("dateDepotDocumentMax", $res["date_depot_document_max"]);
        $this->assertEquals("typePublication", $res["type_publication"]);
        $this->assertEquals("datePublicationMin", $res["date_publication_min"]);
        $this->assertEquals("datePublicationMax", $res["date_publication_max"]);
    }

    /**
     * Tests the serializeRechercheDocumentsRequest() method.
     *
     * @return void
     */
    public function testSerializeRechercheDocumentsRequest(): void {

        // Set a Recherche documents request mock.
        $arg = new RechercheDocumentsRequest();
        $arg->setPage(2);
        $arg->setParPage(1);
        $arg->setPrecision("precision");
        $arg->setQ("q");
        $arg->setCodeNaf("codeNaf");
        $arg->setDepartement("departement");
        $arg->setRegion("region");
        $arg->setCodePostal("codePostal");
        $arg->setConventionCollective("conventionCollective");
        $arg->setCategorieJuridique("categorieJuridique");
        $arg->setEntrepriseCessee(true);
        $arg->setStatutRcs("statutRcs");
        $arg->setObjetSocial("objetSocial");
        $arg->setDateRadiationRcsMin("dateRadiationRcsMin");
        $arg->setDateRadiationRcsMax("dateRadiationRcsMax");
        $arg->setCapitalMin(1);
        $arg->setCapitalMax(99);
        $arg->setChiffreAffairesMin(1);
        $arg->setChiffreAffairesMax(99);
        $arg->setResultatMin(1);
        $arg->setResultatMax(99);
        $arg->setDateCreationMin("dateCreationMin");
        $arg->setDateCreationMax("dateCreationMax");
        $arg->setTrancheEffectifMin(1);
        $arg->setTrancheEffectifMax(99);
        $arg->setAgeDirigeantMin(1);
        $arg->setAgeDirigeantMax(99);
        $arg->setDateNaissanceDirigeantMin("dateNaissanceDirigeantMin");
        $arg->setDateNaissanceDirigeantMax("dateNaissanceDirigeantMax");
        $arg->setDateDepotDocumentMin("dateDepotDocumentMin");
        $arg->setDateDepotDocumentMax("dateDepotDocumentMax");
        $arg->setTypePublication("typePublication");
        $arg->setDatePublicationMin("datePublicationMin");
        $arg->setDatePublicationMax("datePublicationMax");

        $res = RequestSerializer::serializeRechercheDocumentsRequest($arg);
        $this->assertCount(34, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(1, $res["par_page"]);
        $this->assertEquals("precision", $res["precision"]);
        $this->assertEquals("q", $res["q"]);
        $this->assertEquals("codeNaf", $res["code_naf"]);
        $this->assertEquals("departement", $res["departement"]);
        $this->assertEquals("region", $res["region"]);
        $this->assertEquals("codePostal", $res["code_postal"]);
        $this->assertEquals("conventionCollective", $res["convention_collective"]);
        $this->assertEquals("categorieJuridique", $res["categorie_juridique"]);
        $this->assertEquals("true", $res["entreprise_cessee"]);
        $this->assertEquals("statutRcs", $res["statut_rcs"]);
        $this->assertEquals("objetSocial", $res["objet_social"]);
        $this->assertEquals("dateRadiationRcsMin", $res["date_radiation_rcs_min"]);
        $this->assertEquals("dateRadiationRcsMax", $res["date_radiation_rcs_max"]);
        $this->assertEquals(1, $res["capital_min"]);
        $this->assertEquals(99, $res["capital_max"]);
        $this->assertEquals(1, $res["chiffre_affaires_min"]);
        $this->assertEquals(99, $res["chiffre_affaires_max"]);
        $this->assertEquals(1, $res["resultat_min"]);
        $this->assertEquals(99, $res["resultat_max"]);
        $this->assertEquals("dateCreationMin", $res["date_creation_min"]);
        $this->assertEquals("dateCreationMax", $res["date_creation_max"]);
        $this->assertEquals(1, $res["tranche_effectif_min"]);
        $this->assertEquals(99, $res["tranche_effectif_max"]);
        $this->assertEquals(1, $res["age_dirigeant_min"]);
        $this->assertEquals(99, $res["age_dirigeant_max"]);
        $this->assertEquals("dateNaissanceDirigeantMin", $res["date_de_naissance_dirigeant_min"]);
        $this->assertEquals("dateNaissanceDirigeantMax", $res["date_de_naissance_dirigeant_max"]);
        $this->assertEquals("dateDepotDocumentMin", $res["date_depot_document_min"]);
        $this->assertEquals("dateDepotDocumentMax", $res["date_depot_document_max"]);
        $this->assertEquals("typePublication", $res["type_publication"]);
        $this->assertEquals("datePublicationMin", $res["date_publication_min"]);
        $this->assertEquals("datePublicationMax", $res["date_publication_max"]);
    }

    /**
     * Tests the serializeRecherchePublicationsRequest() method.
     *
     * @return void
     */
    public function testSerializeRecherchePublicationsRequest(): void {

        // Set a Recherche publications request mock.
        $arg = new RecherchePublicationsRequest();
        $arg->setPage(2);
        $arg->setParPage(1);
        $arg->setPrecision("precision");
        $arg->setQ("q");
        $arg->setCodeNaf("codeNaf");
        $arg->setDepartement("departement");
        $arg->setRegion("region");
        $arg->setCodePostal("codePostal");
        $arg->setConventionCollective("conventionCollective");
        $arg->setCategorieJuridique("categorieJuridique");
        $arg->setEntrepriseCessee(true);
        $arg->setStatutRcs("statutRcs");
        $arg->setObjetSocial("objetSocial");
        $arg->setDateRadiationRcsMin("dateRadiationRcsMin");
        $arg->setDateRadiationRcsMax("dateRadiationRcsMax");
        $arg->setCapitalMin(1);
        $arg->setCapitalMax(99);
        $arg->setChiffreAffairesMin(1);
        $arg->setChiffreAffairesMax(99);
        $arg->setResultatMin(1);
        $arg->setResultatMax(99);
        $arg->setDateCreationMin("dateCreationMin");
        $arg->setDateCreationMax("dateCreationMax");
        $arg->setTrancheEffectifMin(1);
        $arg->setTrancheEffectifMax(99);
        $arg->setAgeDirigeantMin(1);
        $arg->setAgeDirigeantMax(99);
        $arg->setDateNaissanceDirigeantMin("dateNaissanceDirigeantMin");
        $arg->setDateNaissanceDirigeantMax("dateNaissanceDirigeantMax");
        $arg->setDateDepotDocumentMin("dateDepotDocumentMin");
        $arg->setDateDepotDocumentMax("dateDepotDocumentMax");
        $arg->setTypePublication("typePublication");
        $arg->setDatePublicationMin("datePublicationMin");
        $arg->setDatePublicationMax("datePublicationMax");

        $res = RequestSerializer::serializeRecherchePublicationsRequest($arg);
        $this->assertCount(34, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(1, $res["par_page"]);
        $this->assertEquals("precision", $res["precision"]);
        $this->assertEquals("q", $res["q"]);
        $this->assertEquals("codeNaf", $res["code_naf"]);
        $this->assertEquals("departement", $res["departement"]);
        $this->assertEquals("region", $res["region"]);
        $this->assertEquals("codePostal", $res["code_postal"]);
        $this->assertEquals("conventionCollective", $res["convention_collective"]);
        $this->assertEquals("categorieJuridique", $res["categorie_juridique"]);
        $this->assertEquals("true", $res["entreprise_cessee"]);
        $this->assertEquals("statutRcs", $res["statut_rcs"]);
        $this->assertEquals("objetSocial", $res["objet_social"]);
        $this->assertEquals("dateRadiationRcsMin", $res["date_radiation_rcs_min"]);
        $this->assertEquals("dateRadiationRcsMax", $res["date_radiation_rcs_max"]);
        $this->assertEquals(1, $res["capital_min"]);
        $this->assertEquals(99, $res["capital_max"]);
        $this->assertEquals(1, $res["chiffre_affaires_min"]);
        $this->assertEquals(99, $res["chiffre_affaires_max"]);
        $this->assertEquals(1, $res["resultat_min"]);
        $this->assertEquals(99, $res["resultat_max"]);
        $this->assertEquals("dateCreationMin", $res["date_creation_min"]);
        $this->assertEquals("dateCreationMax", $res["date_creation_max"]);
        $this->assertEquals(1, $res["tranche_effectif_min"]);
        $this->assertEquals(99, $res["tranche_effectif_max"]);
        $this->assertEquals(1, $res["age_dirigeant_min"]);
        $this->assertEquals(99, $res["age_dirigeant_max"]);
        $this->assertEquals("dateNaissanceDirigeantMin", $res["date_de_naissance_dirigeant_min"]);
        $this->assertEquals("dateNaissanceDirigeantMax", $res["date_de_naissance_dirigeant_max"]);
        $this->assertEquals("dateDepotDocumentMin", $res["date_depot_document_min"]);
        $this->assertEquals("dateDepotDocumentMax", $res["date_depot_document_max"]);
        $this->assertEquals("typePublication", $res["type_publication"]);
        $this->assertEquals("datePublicationMin", $res["date_publication_min"]);
        $this->assertEquals("datePublicationMax", $res["date_publication_max"]);
    }

    /**
     * Tests the serializeRechercheRequest() method.
     *
     * @return void
     */
    public function testSerializeRechercheRequest(): void {

        // Set a Recherche request mock.
        $arg = new RechercheRequest();
        $arg->setPage(2);
        $arg->setParPage(1);
        $arg->setCurseur("*");
        $arg->setParCurseur(1000);
        $arg->setBases("bases");
        $arg->setPrecision("precision");
        $arg->setExport("export");
        $arg->setQ("q");
        $arg->setCodeNaf("codeNaf");
        $arg->setDepartement("departement");
        $arg->setRegion("region");
        $arg->setCodePostal("codePostal");
        $arg->setConventionCollective("conventionCollective");
        $arg->setCategorieJuridique("categorieJuridique");
        $arg->setEntrepriseCessee(true);
        $arg->setStatutRcs("statutRcs");
        $arg->setObjetSocial("objetSocial");
        $arg->setDateRadiationRcsMin("dateRadiationRcsMin");
        $arg->setDateRadiationRcsMax("dateRadiationRcsMax");
        $arg->setCapitalMin(1);
        $arg->setCapitalMax(99);
        $arg->setChiffreAffairesMin(1);
        $arg->setChiffreAffairesMax(99);
        $arg->setResultatMin(1);
        $arg->setResultatMax(99);
        $arg->setDateCreationMin("dateCreationMin");
        $arg->setDateCreationMax("dateCreationMax");
        $arg->setTrancheEffectifMin(1);
        $arg->setTrancheEffectifMax(99);
        $arg->setAgeDirigeantMin(1);
        $arg->setAgeDirigeantMax(99);
        $arg->setDateNaissanceDirigeantMin("dateNaissanceDirigeantMin");
        $arg->setDateNaissanceDirigeantMax("dateNaissanceDirigeantMax");
        $arg->setDateDepotDocumentMin("dateDepotDocumentMin");
        $arg->setDateDepotDocumentMax("dateDepotDocumentMax");
        $arg->setTypePublication("typePublication");
        $arg->setDatePublicationMin("datePublicationMin");
        $arg->setDatePublicationMax("datePublicationMax");

        $res = RequestSerializer::serializeRechercheRequest($arg);
        $this->assertCount(38, $res);

        $this->assertEquals(2, $res["page"]);
        $this->assertEquals(1, $res["par_page"]);
        $this->assertEquals("*", $res["curseur"]);
        $this->assertEquals(1000, $res["par_curseur"]);
        $this->assertEquals("bases", $res["bases"]);
        $this->assertEquals("precision", $res["precision"]);
        $this->assertEquals("export", $res["export"]);
        $this->assertEquals("q", $res["q"]);
        $this->assertEquals("codeNaf", $res["code_naf"]);
        $this->assertEquals("departement", $res["departement"]);
        $this->assertEquals("region", $res["region"]);
        $this->assertEquals("codePostal", $res["code_postal"]);
        $this->assertEquals("conventionCollective", $res["convention_collective"]);
        $this->assertEquals("categorieJuridique", $res["categorie_juridique"]);
        $this->assertEquals("true", $res["entreprise_cessee"]);
        $this->assertEquals("statutRcs", $res["statut_rcs"]);
        $this->assertEquals("objetSocial", $res["objet_social"]);
        $this->assertEquals("dateRadiationRcsMin", $res["date_radiation_rcs_min"]);
        $this->assertEquals("dateRadiationRcsMax", $res["date_radiation_rcs_max"]);
        $this->assertEquals(1, $res["capital_min"]);
        $this->assertEquals(99, $res["capital_max"]);
        $this->assertEquals(1, $res["chiffre_affaires_min"]);
        $this->assertEquals(99, $res["chiffre_affaires_max"]);
        $this->assertEquals(1, $res["resultat_min"]);
        $this->assertEquals(99, $res["resultat_max"]);
        $this->assertEquals("dateCreationMin", $res["date_creation_min"]);
        $this->assertEquals("dateCreationMax", $res["date_creation_max"]);
        $this->assertEquals(1, $res["tranche_effectif_min"]);
        $this->assertEquals(99, $res["tranche_effectif_max"]);
        $this->assertEquals(1, $res["age_dirigeant_min"]);
        $this->assertEquals(99, $res["age_dirigeant_max"]);
        $this->assertEquals("dateNaissanceDirigeantMin", $res["date_de_naissance_dirigeant_min"]);
        $this->assertEquals("dateNaissanceDirigeantMax", $res["date_de_naissance_dirigeant_max"]);
        $this->assertEquals("dateDepotDocumentMin", $res["date_depot_document_min"]);
        $this->assertEquals("dateDepotDocumentMax", $res["date_depot_document_max"]);
        $this->assertEquals("typePublication", $res["type_publication"]);
        $this->assertEquals("datePublicationMin", $res["date_publication_min"]);
        $this->assertEquals("datePublicationMax", $res["date_publication_max"]);
    }

    /**
     * Tests the serializeSuggestionsRequest() method.
     *
     * @return void
     */
    public function testSerializeSuggestionsRequest(): void {

        // Set a Suggestions request mock.
        $arg = new SuggestionsRequest();
        $arg->setQ("q");
        $arg->setLongueur(20);
        $arg->setCibles("cibles");

        $res = RequestSerializer::serializeSuggestionsRequest($arg);
        $this->assertCount(3, $res);

        $this->assertEquals("q", $res["q"]);
        $this->assertEquals(20, $res["longueur"]);
        $this->assertEquals("cibles", $res["cibles"]);
    }
}
