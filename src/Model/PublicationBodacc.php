<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

use WBW\Library\Core\Model\Attribute\StringTypeTrait;
use WBW\Library\Pappers\Model\Attribute\StringPersonneMoraleTrait;

/**
 * Publication BODACC.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class PublicationBodacc {

    use StringTypeTrait;

    /**
     * BODACC.
     *
     * @var string|null
     */
    private $bodacc;

    /**
     * Date.
     *
     * @var string|null
     */
    private $date;

    /**
     * Numéro annonce.
     *
     * @var string|null
     */
    private $numeroAnnonce;

    /**
     * Numéro parution.
     *
     * @var string|null
     */
    private $numeroParution;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the BODACC.
     *
     * @return string|null Returns the BODACC.
     */
    public function getBodacc(): ?string {
        return $this->bodacc;
    }

    /**
     * Get the date.
     *
     * @return string|null Returns the date.
     */
    public function getDate(): ?string {
        return $this->date;
    }

    /**
     * Get the numéro annonce.
     *
     * @return string|null Returns the numéro annonce.
     */
    public function getNumeroAnnonce(): ?string {
        return $this->numeroAnnonce;
    }

    /**
     * Get the numéro parution.
     *
     * @return string|null Returns the numéro parution.
     */
    public function getNumeroParution(): ?string {
        return $this->numeroParution;
    }

    /**
     * Set the BODACC.
     *
     * @param string|null $bodacc The BODACC.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setBodacc(?string $bodacc): PublicationBodacc {
        $this->bodacc = $bodacc;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param string|null $date The date.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setDate(?string $date): PublicationBodacc {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the numéro annonce.
     *
     * @param string|null $numeroAnnonce The numéro annonce.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setNumeroAnnonce(?string $numeroAnnonce): PublicationBodacc {
        $this->numeroAnnonce = $numeroAnnonce;
        return $this;
    }

    /**
     * Set the numéro parution.
     *
     * @param string|null $numeroParution The numéro parution.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setNumeroParution(?string $numeroParution): PublicationBodacc {
        $this->numeroParution = $numeroParution;
        return $this;
    }
}