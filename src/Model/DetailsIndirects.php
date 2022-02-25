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

/**
 * Détails indirects.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class DetailsIndirects {

    /**
     * Détails indivision.
     *
     * @var DetailsIndivision|null
     */
    private $detailsIndivision;

    /**
     * Détails personne morale.
     *
     * @var DetailsPersonneMorale|null
     */
    private $detailsPersonneMorale;

    /**
     * Pourcentage indivision.
     *
     * @var int|null
     */
    private $pourcentageIndivision;

    /**
     * Pourcentage personne morale.
     *
     * @var int|null
     */
    private $pourcentagePersonneMorale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the détails indivision.
     *
     * @return DetailsIndivision|null Returns the détails indivision.
     */
    public function getDetailsIndivision(): ?DetailsIndivision {
        return $this->detailsIndivision;
    }

    /**
     * Get the détails personne morale.
     *
     * @return DetailsPersonneMorale|null Returns the détails personne morale.
     */
    public function getDetailsPersonneMorale(): ?DetailsPersonneMorale {
        return $this->detailsPersonneMorale;
    }

    /**
     * Get the pourcentage indivision.
     *
     * @return int|null Returns the pourcentage indivision.
     */
    public function getPourcentageIndivision(): ?int {
        return $this->pourcentageIndivision;
    }

    /**
     * Get the pourcentage personne morale.
     *
     * @return int|null Returns the pourcentage personne morale.
     */
    public function getPourcentagePersonneMorale(): ?int {
        return $this->pourcentagePersonneMorale;
    }

    /**
     * Set the détails indivision.
     *
     * @param DetailsIndivision|null $detailsIndivision The détails indivision.
     * @return DetailsIndirects Returns this détails indirects.
     */
    public function setDetailsIndivision(?DetailsIndivision $detailsIndivision): DetailsIndirects {
        $this->detailsIndivision = $detailsIndivision;
        return $this;
    }

    /**
     * Set the détails personne morale.
     *
     * @param DetailsPersonneMorale|null $detailsPersonneMorale The détails personne morale.
     * @return DetailsIndirects Returns this détails indirects.
     */
    public function setDetailsPersonneMorale(?DetailsPersonneMorale $detailsPersonneMorale): DetailsIndirects {
        $this->detailsPersonneMorale = $detailsPersonneMorale;
        return $this;
    }

    /**
     * Set the pourcentage indivision.
     *
     * @param int|null $pourcentageIndivision The pourcentage indivision.
     * @return DetailsIndirects Returns this détails indirects.
     */
    public function setPourcentageIndivision(?int $pourcentageIndivision): DetailsIndirects {
        $this->pourcentageIndivision = $pourcentageIndivision;
        return $this;
    }

    /**
     * Set the pourcentage personne morale.
     *
     * @param int|null $pourcentagePersonneMorale The pourcentage personne morale.
     * @return DetailsIndirects Returns this détails indirects.
     */
    public function setPourcentagePersonneMorale(?int $pourcentagePersonneMorale): DetailsIndirects {
        $this->pourcentagePersonneMorale = $pourcentagePersonneMorale;
        return $this;
    }
}
