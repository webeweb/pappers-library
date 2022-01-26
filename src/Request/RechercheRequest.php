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
     * Curseur.
     *
     * @var string|null
     */
    private $curseur;

    /**
     * Export.
     *
     * @var string|null
     */
    private $export;

    /**
     * Par curseur.
     *
     * @var int|null
     */
    private $parCurseur;

    /**
     * Get the bases.
     *
     * @return string|null Returns the bases.
     */
    public function getBases(): ?string {
        return $this->bases;
    }

    /**
     * Get the curseur.
     *
     * @return string|null Returns the curseur.
     */
    public function getCurseur(): ?string {
        return $this->curseur;
    }

    /**
     * Get the export.
     *
     * @return string|null Returns the export.
     */
    public function getExport(): ?string {
        return $this->export;
    }

    /**
     * Get the par curseur.
     *
     * @return int|null Returns the par curseur.
     */
    public function getParCurseur(): ?int {
        return $this->parCurseur;
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

    /**
     * Set the curseur.
     *
     * @param string|null $curseur The curseur.
     * @return RechercheRequest Returns this recherche request.
     */
    public function setCurseur(?string $curseur): RechercheRequest {
        $this->curseur = $curseur;
        return $this;
    }

    /**
     * Set the export.
     *
     * @param string|null $export The export.
     * @return RechercheRequest Returns this recherche request.
     */
    public function setExport(?string $export): RechercheRequest {
        $this->export = $export;
        return $this;
    }

    /**
     * Set the par curseur.
     *
     * @param int|null $parCurseur The par curseur.
     * @return RechercheRequest Returns this recherche request.
     */
    public function setParCurseur(?int $parCurseur): RechercheRequest {
        $this->parCurseur = $parCurseur;
        return $this;
    }
}
