<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Provider;

use Exception;
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Response\EntrepriseResponse;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;
use WBW\Library\Pappers\Response\RechercheDocumentsResponse;
use WBW\Library\Pappers\Response\RecherchePublicationsResponse;
use WBW\Library\Pappers\Response\RechercheResponse;
use WBW\Library\Pappers\Response\SuggestionsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v2 provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Provider
 */
class APIv2ProviderTest extends AbstractTestCase {

    /**
     * API token.
     *
     * @var string
     */
    private $apiToken;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an API token mock.
        $this->apiToken = "YOUR_API_TOKEN";
    }

    /**
     * Tests documentTelechargement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDocumentTelechargement(): void {

        // Set a Document téléchargement request mock.
        $request = new DocumentTelechargementRequest();
        $request->setToken("SzQ0MzA2MTg0MQ");

        // Set a filename mock.
        $filename = __DIR__ . "/../" . $request->getToken() . ".pdf";
        if (true === file_exists($filename)) {
            unlink($filename);
        }

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->documentTelechargement($request);
            $this->assertInstanceOf(DocumentTelechargementResponse::class, $res);

            $res->saveAs($filename);
            $this->assertFileExists($filename);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests entreprise()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testEntreprise(): void {

        // Set an Entreprise request mock.
        $request = new EntrepriseRequest();
        $request->setSiren("443061841");

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->entreprise($request);
            $this->assertInstanceOf(EntrepriseResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests getEndpointVersion()
     *
     * @return void
     */
    public function testGetEndpointVersion(): void {

        $obj = new APIv2Provider();

        $this->assertEquals("/v2", $obj->getEndpointVersion());
    }

    /**
     * Tests recherche()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRecherche(): void {

        // Set a Recherche request mock.
        $request = new RechercheRequest();
        $request->setQ("Google France");

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->recherche($request);
            $this->assertInstanceOf(RechercheResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests rechercheDirigeants()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRechercheDirigeants(): void {

        // Set a Recherche dirigeants request mock.
        $request = new RechercheDirigeantsRequest();
        $request->setQ("Google France");

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->rechercheDirigeants($request);
            $this->assertInstanceOf(RechercheDirigeantsResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests rechercheDocuments()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRechercheDocuments(): void {

        // Set a Recherche documents request mock.
        $request = new RechercheDocumentsRequest();
        $request->setCodeNaf("70.10Z");
        $request->setDepartement("75");
        $request->setRegion("11");
        $request->setCodePostal("75009");
        $request->setConventionCollective("1486");
        $request->setCategorieJuridique("5498");
        $request->setEntrepriseCessee(false);
        $request->setStatutRcs("inscrit");

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->rechercheDocuments($request);
            $this->assertInstanceOf(RechercheDocumentsResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests recherchePublications()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRecherchePublications(): void {

        // Set a Recherche publications request mock.
        $request = new RecherchePublicationsRequest();
        $request->setCodeNaf("70.10Z");
        $request->setDepartement("75");
        $request->setRegion("11");
        $request->setCodePostal("75009");
        $request->setConventionCollective("1486");
        $request->setCategorieJuridique("5498");
        $request->setEntrepriseCessee(false);
        $request->setStatutRcs("inscrit");

        $obj = new APIv2Provider($this->apiToken);

        try {

            $res = $obj->recherchePublications($request);
            $this->assertInstanceOf(RecherchePublicationsResponse::class, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests suggestions()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSuggestions(): void {

        // Set a Suggestions request mock.
        $request = new SuggestionsRequest();
        $request->setQ("Google France");

        $obj = new APIv2Provider();

        $res = $obj->suggestions($request);
        $this->assertInstanceOf(SuggestionsResponse::class, $res);
    }
}
