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

use InvalidArgumentException;
use Throwable;
use WBW\Library\Pappers\Provider\APIv1Provider;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Response\EntrepriseResponse;
use WBW\Library\Pappers\Response\RechercheResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v1 provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Provider
 */
class APIv1ProviderTest extends AbstractTestCase {

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
        $this->apiToken = static::getToken();
    }

    /**
     * Test documentTelechargement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testDocumentTelechargement(): void {

        // Set a Document téléchargement request mock.
        $request = new DocumentTelechargementRequest();
        $request->setToken("SzQ0MzA2MTg0MQ");

        $obj = new APIv1Provider($this->apiToken);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(DocumentTelechargementResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Test entreprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testEntreprise(): void {

        // Set an Entreprise request mock.
        $request = new EntrepriseRequest();
        $request->setSiret("44306184100047");

        $obj = new APIv1Provider($this->apiToken);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(EntrepriseResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Test entreprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testEntrepriseWithoutApiToken(): void {

        // Set an Entreprise request mock.
        $request = new EntrepriseRequest();
        $request->setSiret("44306184100047");

        $obj = new APIv1Provider();

        try {

            $obj->sendRequest($request);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The mandatory parameter "api_token" is missing', $ex->getMessage());
        }
    }

    /**
     * Test getEndpointVersion()
     *
     * @return void
     */
    public function testGetEndpointVersion(): void {

        $obj = new APIv1Provider();

        $this->assertEquals("/v1", $obj->getEndpointVersion());
    }

    /**
     * Test recherche()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRecherche(): void {

        // Set a Recherche request mock.
        $request = new RechercheRequest();
        $request->setQ("Google France");

        $obj = new APIv1Provider($this->apiToken);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(RechercheResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Test suggestions()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSuggestions(): void {

        // Set a Suggestions request mock.
        $request = new SuggestionsRequest();
        $request->setQ("Google France");

        $obj = new APIv1Provider($this->apiToken);

        try {

            $obj->sendRequest($request);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The request "WBW\\Library\\Pappers\\Request\\SuggestionsRequest" is not supported', $ex->getMessage());
        }
    }
}
