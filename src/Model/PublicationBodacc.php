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
use WBW\Library\Pappers\Model\Attribute\IntegerCapitalTrait;
use WBW\Library\Pappers\Model\Attribute\StringAdresseTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringPersonneMoraleTrait;
use WBW\Library\Pappers\Model\Attribute\StringPrenomTrait;

/**
 * Publication BODACC.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class PublicationBodacc {

    use IntegerCapitalTrait;
    use StringAdresseTrait;
    use StringNomTrait;
    use StringPersonneMoraleTrait;
    use StringPrenomTrait;
    use StringTypeTrait;

    /**
     * Activité.
     *
     * @var string|null
     */
    private $activite;

    /**
     * Administration.
     *
     * @var string|null
     */
    private $administration;

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
     * Date début activité.
     *
     * @var string|null
     */
    private $dateDebutActivite;

    /**
     * Dénomination.
     *
     * @var string|null
     */
    private $denomination;

    /**
     * Nom entreprise.
     *
     * @var string|null
     */
    private $nomEntreprise;

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
     * RCS.
     *
     * @var string|null
     */
    private $rcs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activité.
     *
     * @return string|null Returns the activité.
     */
    public function getActivite(): ?string {
        return $this->activite;
    }

    /**
     * Get the administration.
     *
     * @return string|null Returns the administration.
     */
    public function getAdministration(): ?string {
        return $this->administration;
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
     * Get the date début activité.
     *
     * @return string|null Returns the date début activité.
     */
    public function getDateDebutActivite(): ?string {
        return $this->dateDebutActivite;
    }

    /**
     * Get the dénomination.
     *
     * @return string|null Returns the dénomination.
     */
    public function getDenomination(): ?string {
        return $this->denomination;
    }

    /**
     * Get the nom entreprise.
     *
     * @return string|null Returns the nom entreprise.
     */
    public function getNomEntreprise(): ?string {
        return $this->nomEntreprise;
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
     * Get the RCS.
     *
     * @return string|null Returns the RCS.
     */
    public function getRcs(): ?string {
        return $this->rcs;
    }

    /**
     * Set the activité.
     *
     * @param string|null $activite The activité.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setActivite(?string $activite): PublicationBodacc {
        $this->activite = $activite;
        return $this;
    }

    /**
     * Set the administration.
     *
     * @param string|null $administration The administration.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setAdministration(?string $administration): PublicationBodacc {
        $this->administration = $administration;
        return $this;
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
     * Set the date début activité.
     *
     * @param string|null $dateDebutActivite The date aébut activité.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setDateDebutActivite(?string $dateDebutActivite): PublicationBodacc {
        $this->dateDebutActivite = $dateDebutActivite;
        return $this;
    }

    /**
     * Set the dénomination.
     *
     * @param string|null $denomination The dénomination.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setDenomination(?string $denomination): PublicationBodacc {
        $this->denomination = $denomination;
        return $this;
    }

    /**
     * Set the nom entreprise.
     *
     * @param string|null $nomEntreprise The nom entreprise.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setNomEntreprise(?string $nomEntreprise): PublicationBodacc {
        $this->nomEntreprise = $nomEntreprise;
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

    /**
     * Set the RCS.
     *
     * @param string|null $rcs The RCS.
     * @return PublicationBodacc Returns this publication BODACC.
     */
    public function setRcs(?string $rcs): PublicationBodacc {
        $this->rcs = $rcs;
        return $this;
    }
}