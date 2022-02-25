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

use WBW\Library\Traits\Strings\StringQTrait;

/**
 * Suggestions request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
class SuggestionsRequest extends AbstractRequest implements SuggestionsRequestInterface {

    use StringQTrait;

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/suggestions";

    /**
     * Cibles.
     *
     * @var string|null
     */
    private $cibles;

    /**
     * Longueur.
     *
     * @var int|null
     */
    private $longueur;

    /**
     * Get the cibles.
     *
     * @return string|null Returns the cibles.
     */
    public function getCibles(): ?string {
        return $this->cibles;
    }

    /**
     * Get the longueur.
     *
     * @return int|null Returns the longueur.
     */
    public function getLongueur(): ?int {
        return $this->longueur;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
    }

    /**
     * Set the cibles.
     *
     * @param string|null $cibles The cibles.
     * @return SuggestionsRequest Returns this suggestions request.
     */
    public function setCibles(?string $cibles): SuggestionsRequest {
        $this->cibles = $cibles;
        return $this;
    }

    /**
     * Set the longueur.
     *
     * @param int|null $longueur The longueur.
     * @return SuggestionsRequest Returns this suggestions request.
     */
    public function setLongueur(?int $longueur): SuggestionsRequest {
        $this->longueur = $longueur;
        return $this;
    }
}
