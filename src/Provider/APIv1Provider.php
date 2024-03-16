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

use InvalidArgumentException;
use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v1 provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Provider
 */
class APIv1Provider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getEndpointVersion(): string {
        return "/v1";
    }

    /**
     * Send a request.
     *
     * @param AbstractRequest $request The request.
     * @return AbstractResponse Returns the response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendRequest(AbstractRequest $request): AbstractResponse {

        if (false === ($request instanceof DocumentTelechargementRequest) &&
            false === ($request instanceof EntrepriseRequest) &&
            false === ($request instanceof RechercheRequest)) {

            throw new InvalidArgumentException(sprintf('The request "%s" is not supported', get_class($request)));
        }

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        return $request->deserializeResponse($rawResponse);
    }
}
