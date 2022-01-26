<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Provider;

use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Response\EntrepriseResponse;
use WBW\Library\Pappers\Response\RechercheResponse;
use WBW\Library\Pappers\Serializer\RequestSerializer;
use WBW\Library\Pappers\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v1 provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Provider
 */
class APIv1Provider extends AbstractProvider {

    /**
     * Document téléchargement.
     *
     * @param DocumentTelechargementRequest $request The entreprise request.
     * @return DocumentTelechargementResponse Returns the entreprise response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function documentTelechargement(DocumentTelechargementRequest $request): DocumentTelechargementResponse {

        $queryData = RequestSerializer::serializeDocumentTelechargementRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeDocumentTelechargementResponse($rawResponse);
    }

    /**
     * Entreprise.
     *
     * @param EntrepriseRequest $request The entreprise request.
     * @return EntrepriseResponse Returns the entreprise response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function entreprise(EntrepriseRequest $request): EntrepriseResponse {

        $queryData = RequestSerializer::serializeEntrepriseRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeEntrepriseResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpointVersion(): string {
        return "/v1";
    }

    /**
     * Recherche.
     *
     * @param RechercheRequest $request The recherche request.
     * @return RechercheResponse Returns the recherche response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function recherche(RechercheRequest $request): RechercheResponse {

        $queryData = RequestSerializer::serializeRechercheRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRechercheResponse($rawResponse);
    }
}
