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
use WBW\Library\Pappers\Serializer\RequestSerializer;
use WBW\Library\Pappers\Serializer\ResponseDeserializer;
use WBW\Library\Traits\Strings\StringTokenTrait;

/**
 * Document téléchargement request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
class DocumentTelechargementRequest extends AbstractRequest {

    use StringTokenTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    public const RESOURCE_PATH = "/document/telechargement";

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeDocumentTelechargementResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeDocumentTelechargementRequest($this);
    }
}
