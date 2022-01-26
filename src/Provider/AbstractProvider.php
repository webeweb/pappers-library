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

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Provider\Exception\ApiException;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api.pappers.fr";

    /**
     * API token.
     *
     * @var string|null
     */
    private $apiToken;

    /**
     * Constructor.
     *
     * @param string|null $apiToken The API token.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(string $apiToken = null, LoggerInterface $logger = null) {
        parent::__construct($logger);

        $this->setApiToken($apiToken);
    }

    /**
     * Build the configuration.
     *
     * @return array Returns the configuration.
     */
    private function buildConfiguration(): array {
        return [
            "base_uri"    => self::ENDPOINT_PATH . $this->getEndpointVersion() . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "application/json",
                "User-Agent" => "webeweb/pappers-library",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @param bool $withoutApiToken Without API token ?
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData, bool $withoutApiToken = false): string {

        if (false === $withoutApiToken && null === $this->getApiToken()) {
            throw new InvalidArgumentException('The mandatory parameter "api_token" is missing');
        }

        $query = false === $withoutApiToken ? ["api_token" => $this->getApiToken()] : [];

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $method  = "GET";
            $uri     = substr($request->getResourcePath(), 1);
            $options = [
                "query" => array_merge($query, $queryData),
            ];

            $this->logInfo(sprintf("Call Pappers API %s %s", $method, $uri), ["config" => $config, "options" => $options]);

            $response = $client->request($method, $uri, $options);

            return $response->getBody()->getContents();
        } catch (Exception $ex) {

            throw new ApiException("Call Pappers API failed", 500, $ex);
        }
    }

    /**
     * Get the API token.
     *
     * @return string|null Returns the API token.
     */
    public function getApiToken(): ?string {
        return $this->apiToken;
    }

    /**
     * Get the endpoint version.
     *
     * @return string Returns the endpoint version.
     */
    abstract public function getEndpointVersion(): string;

    /**
     * Set the API token.
     *
     * @param string|null $apiToken The API token.
     * @return AbstractProvider Returns this provider.
     */
    public function setApiToken(?string $apiToken): AbstractProvider {
        $this->apiToken = $apiToken;
        return $this;
    }
}
