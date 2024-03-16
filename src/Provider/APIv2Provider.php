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
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v2 provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Provider
 */
class APIv2Provider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getEndpointVersion(): string {
        return "/v2";
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

        $apiToken = !($request instanceof SuggestionsRequest);

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData, $apiToken);

        return $request->deserializeResponse($rawResponse);
    }
}
