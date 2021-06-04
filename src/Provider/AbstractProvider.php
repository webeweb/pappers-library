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

use Psr\Log\LoggerInterface;
use WBW\Library\Core\Provider\AbstractProvider as BaseProvider;

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
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "application/json",
                "User-Agent" => "webeweb/pappers-library",
            ],
            "synchronous" => true,
        ];
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