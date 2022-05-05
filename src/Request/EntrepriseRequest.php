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

use WBW\Library\Pappers\Model\Attribute\StringSirenTrait;
use WBW\Library\Pappers\Model\Attribute\StringSiretTrait;

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
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/entreprise";

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
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
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
