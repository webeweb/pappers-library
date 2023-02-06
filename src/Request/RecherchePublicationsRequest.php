<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Request;

use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Serializer\ResponseDeserializer;

/**
 * Recherche publications request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
class RecherchePublicationsRequest extends AbstractRechercheRequest {

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/recherche-publications";

    /**
     * {@inheritdoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeRecherchePublicationsResponse($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
    }
}
