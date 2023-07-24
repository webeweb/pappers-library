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
use WBW\Library\Pappers\Traits\Strings\StringSirenTrait;
use WBW\Library\Pappers\Traits\Strings\StringSiretTrait;

/**
 * Entreprise request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
class EntrepriseRequest extends AbstractRequest implements EntrepriseRequestInterface {

    use StringSirenTrait;
    use StringSiretTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/entreprise";

    /**
     * Format publications BODACC.
     *
     * @var string|null
     */
    private $formatPublicationsBodacc;

    /**
     * Marques.
     *
     * @var bool|null
     */
    private $marques;

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        return ResponseDeserializer::deserializeEntrepriseResponse($rawResponse);
    }

    /**
     * Get the format publications BODACC.
     *
     * @return string|null Returns the format publications BODACC.
     */
    public function getFormatPublicationsBodacc(): ?string {
        return $this->formatPublicationsBodacc;
    }

    /**
     * Get the marques.
     *
     * @return bool|null Returns the marques.
     */
    public function getMarques(): ?bool {
        return $this->marques;
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
        return RequestSerializer::serializeEntrepriseRequest($this);
    }

    /**
     * Set the format publications BODACC.
     *
     * @param string|null $formatPublicationsBodacc The format publications BODACC.
     * @return EntrepriseRequest Returns this entreprise request.
     */
    public function setFormatPublicationsBodacc(?string $formatPublicationsBodacc): EntrepriseRequest {
        $this->formatPublicationsBodacc = $formatPublicationsBodacc;
        return $this;
    }

    /**
     * Set the marques.
     *
     * @param bool|null $marques The marques.
     * @return EntrepriseRequest Returns this entreprise request.
     */
    public function setMarques(?bool $marques): EntrepriseRequest {
        $this->marques = $marques;
        return $this;
    }
}
