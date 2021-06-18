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

/**
 * Recherche request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Request
 */
class RechercheRequest extends AbstractRechercheRequest implements RechercheRequestInterface {

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/recherche";

    /**
     * Bases.
     *
     * @var string|null
     */
    private $bases;

    /**
     * Get the bases.
     *
     * @return string|null Returns the bases.
     */
    public function getBases(): ?string {
        return $this->bases;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
    }

    /**
     * Set the bases.
     *
     * @param string|null $bases The bases.
     * @return RechercheRequest Returns this recherche request.
     */
    public function setBases(?string $bases): RechercheRequest {
        $this->bases = $bases;
        return $this;
    }
}