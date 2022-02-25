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
 * Détails parts vocation titulaire.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class DetailsPartsVocationTitulaire {

    /**
     * Détails directes
     *
     * @var DetailsDirects|null
     */
    private $detailsDirectes;

    /**
     * Détails indirectes
     *
     * @var DetailsIndirects|null
     */
    private $detailsIndirectes;

    /**
     * Pourcentage directes.
     *
     * @var int|null
     */
    private $pourcentageDirectes;

    /**
     * Pourcentage indirectes.
     *
     * @var int|null
     */
    private $pourcentageIndirectes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the détails directes.
     *
     * @return DetailsDirects|null Returns the détails directes.
     */
    public function getDetailsDirectes(): ?DetailsDirects {
        return $this->detailsDirectes;
    }

    /**
     * Get the détails indirectes.
     *
     * @return DetailsIndirects|null Returns the détails indirectes.
     */
    public function getDetailsIndirectes(): ?DetailsIndirects {
        return $this->detailsIndirectes;
    }

    /**
     * Get the pourcentage directes.
     *
     * @return int|null Returns the pourcentages directes.
     */
    public function getPourcentageDirectes(): ?int {
        return $this->pourcentageDirectes;
    }

    /**
     * Get the pourcentage indirectes.
     *
     * @return int|null Returns the pourcentage indirectes.
     */
    public function getPourcentageIndirectes(): ?int {
        return $this->pourcentageIndirectes;
    }

    /**
     * Set the détails directes.
     *
     * @param DetailsDirects|null $detailsDirectes The détails directes.
     * @return DetailsPartsVocationTitulaire Returns this détails parts vocation titulaire.
     */
    public function setDetailsDirectes(?DetailsDirects $detailsDirectes): DetailsPartsVocationTitulaire {
        $this->detailsDirectes = $detailsDirectes;
        return $this;
    }

    /**
     * Set the détails indirectes.
     *
     * @param DetailsIndirects|null $detailsIndirectes The détails indirectes.
     * @return DetailsPartsVocationTitulaire Returns this détails parts vocation titulaire.
     */
    public function setDetailsIndirectes(?DetailsIndirects $detailsIndirectes): DetailsPartsVocationTitulaire {
        $this->detailsIndirectes = $detailsIndirectes;
        return $this;
    }

    /**
     * Set the pourcentage directes.
     *
     * @param int|null $pourcentageDirectes The pourcentage directes.
     * @return DetailsPartsVocationTitulaire Returns this détails parts vocation titulaire.
     */
    public function setPourcentageDirectes(?int $pourcentageDirectes): DetailsPartsVocationTitulaire {
        $this->pourcentageDirectes = $pourcentageDirectes;
        return $this;
    }

    /**
     * Set the pourcentages indirectes.
     *
     * @param int|null $pourcentageIndirectes The pourcentage indirectes.
     * @return DetailsPartsVocationTitulaire Returns this détails parts vocation titulaire.
     */
    public function setPourcentageIndirectes(?int $pourcentageIndirectes): DetailsPartsVocationTitulaire {
        $this->pourcentageIndirectes = $pourcentageIndirectes;
        return $this;
    }
}
