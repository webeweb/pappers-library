<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

use WBW\Library\Pappers\Traits\Strings\StringDateDebutActiviteTrait;

/**
 * Répertoire national des métiers.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class RepertoireNationalMetiers {

    use StringDateDebutActiviteTrait;

    /**
     * Chambre des métiers.
     *
     * @var string|null
     */
    protected $chambreMetiers;

    /**
     * Date cessation activité.
     *
     * @var string|null
     */
    protected $dateCessationActivite;

    /**
     * Date immatriculation.
     *
     * @var string|null
     */
    protected $dateImmatriculation;

    /**
     * Date radiation.
     *
     * @var string|null
     */
    protected $dateRadiation;

    /**
     * Dernière mise à jour.
     *
     * @var string|null
     */
    protected $derniereMiseJour;

    /**
     * Qualification.
     *
     * @var string|null
     */
    protected $qualification;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the chambre des métiers.
     *
     * @return string|null Returns the chambre des métiers.
     */
    public function getChambreMetiers(): ?string {
        return $this->chambreMetiers;
    }

    /**
     * Get the date cessation activité.
     *
     * @return string|null Returns the date cessation activité.
     */
    public function getDateCessationActivite(): ?string {
        return $this->dateCessationActivite;
    }

    /**
     * Get the date immatriculation.
     *
     * @return string|null Returns the date immatriculation.
     */
    public function getDateImmatriculation(): ?string {
        return $this->dateImmatriculation;
    }

    /**
     * Get the date radiation.
     *
     * @return string|null Returns the date radiation.
     */
    public function getDateRadiation(): ?string {
        return $this->dateRadiation;
    }

    /**
     * Get the dernière mise à jour.
     *
     * @return string|null Returns the dernière mise à jour.
     */
    public function getDerniereMiseJour(): ?string {
        return $this->derniereMiseJour;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
    }

    /**
     * Set the chambre des métiers.
     *
     * @param string|null $chambreMetiers The chambre des métiers.
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setChambreMetiers(?string $chambreMetiers): RepertoireNationalMetiers {
        $this->chambreMetiers = $chambreMetiers;
        return $this;
    }

    /**
     * Set the date cessation activité.
     *
     * @param string|null $dateCessationActivite The date cessation activité.
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setDateCessationActivite(?string $dateCessationActivite): RepertoireNationalMetiers {
        $this->dateCessationActivite = $dateCessationActivite;
        return $this;
    }

    /**
     * Set the date immatriculation.
     *
     * @param string|null $dateImmatriculation The date immatriculation.
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setDateImmatriculation(?string $dateImmatriculation): RepertoireNationalMetiers {
        $this->dateImmatriculation = $dateImmatriculation;
        return $this;
    }

    /**
     * Set the date radiation.
     *
     * @param string|null $dateRadiation The date radiation.
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setDateRadiation(?string $dateRadiation): RepertoireNationalMetiers {
        $this->dateRadiation = $dateRadiation;
        return $this;
    }

    /**
     * Set the dernière mise à jour.
     *
     * @param string|null $derniereMiseJour The dernière mise à jour.
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setDerniereMiseJour(?string $derniereMiseJour): RepertoireNationalMetiers {
        $this->derniereMiseJour = $derniereMiseJour;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification
     * @return RepertoireNationalMetiers Returns this répertoire national des métiers.
     */
    public function setQualification(?string $qualification): RepertoireNationalMetiers {
        $this->qualification = $qualification;
        return $this;
    }
}
