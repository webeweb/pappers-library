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
use WBW\Library\Pappers\Serializer\RequestSerializer;
use WBW\Library\Pappers\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v2 provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Provider
 */
class APIv2Provider extends AbstractProvider {

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
     * {@inheritdoc}
     */
    public function getEndpointVersion(): string {
        return "/v2";
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

    /**
     * Recherche dirigeants.
     *
     * @param RechercheDirigeantsRequest $request The recherche dirigeants request.
     * @return RechercheDirigeantsResponse Returns the recherche dirigeants response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function rechercheDirigeants(RechercheDirigeantsRequest $request): RechercheDirigeantsResponse {

        $queryData = RequestSerializer::serializeRechercheDirigeantsRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRechercheDirigeantsResponse($rawResponse);
    }

    /**
     * Recherche documents.
     *
     * @param RechercheDocumentsRequest $request The recherche documents request.
     * @return RechercheDocumentsResponse Returns the recherche documents response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function rechercheDocuments(RechercheDocumentsRequest $request): RechercheDocumentsResponse {

        $queryData = RequestSerializer::serializeRechercheDocumentsRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRechercheDocumentsResponse($rawResponse);
    }

    /**
     * Recherche publications.
     *
     * @param RecherchePublicationsRequest $request The recherche publications request.
     * @return RecherchePublicationsResponse Returns the recherche publications response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function recherchePublications(RecherchePublicationsRequest $request): RecherchePublicationsResponse {

        $queryData = RequestSerializer::serializeRecherchePublicationsRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRecherchePublicationsResponse($rawResponse);
    }

    /**
     * Suggestions.
     *
     * @param SuggestionsRequest $request The suggestions request.
     * @return SuggestionsResponse Returns the suggestions response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function suggestions(SuggestionsRequest $request): SuggestionsResponse {

        $queryData = RequestSerializer::serializeSuggestionsRequest($request);

        $rawResponse = $this->callApi($request, $queryData, true);

        return ResponseDeserializer::deserializeSuggestionsResponse($rawResponse);
    }
}
