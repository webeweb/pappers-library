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

use WBW\Library\Pappers\Model\Attribute\BooleanDisponibleTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotFormateTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomFichierPdfTrait;
use WBW\Library\Pappers\Model\Attribute\StringTokenTrait;

/**
 * Compte.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Compte {

    use BooleanDisponibleTrait;
    use StringDateDepotTrait;
    use StringDateDepotFormateTrait;
    use StringNomFichierPdfTrait;
    use StringTokenTrait;

    /**
     * Année clôture.
     *
     * @var int|null
     */
    private $anneeCloture;

    /**
     * Confidentialité.
     *
     * @var bool|null
     */
    private $confidentialite;

    /**
     * Confidentialité compte résultat.
     *
     * @var bool|null
     */
    private $confidentialiteCompteResultat;

    /**
     * Date clôture.
     *
     * @var string|null
     */
    private $dateCloture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the année clôture.
     *
     * @return int|null Returns the année clôture.
     */
    public function getAnneeCloture(): ?int {
        return $this->anneeCloture;
    }

    /**
     * Get the confidentialité.
     *
     * @return bool|null Returns the confidentialité.
     */
    public function getConfidentialite(): ?bool {
        return $this->confidentialite;
    }

    /**
     * Get the confidentialité compte résultat.
     *
     * @return bool|null Returns the confidentialité compte résultat.
     */
    public function getConfidentialiteCompteResultat(): ?bool {
        return $this->confidentialiteCompteResultat;
    }

    /**
     * Get the date clôture.
     *
     * @return string|null Returns the date clôture.
     */
    public function getDateCloture(): ?string {
        return $this->dateCloture;
    }

    /**
     * Set the année clôture.
     *
     * @param int|null $anneeCloture The année clôture.
     * @return Compte Returns this compte.
     */
    public function setAnneeCloture(?int $anneeCloture): Compte {
        $this->anneeCloture = $anneeCloture;
        return $this;
    }

    /**
     * Set the confidentialité.
     *
     * @param bool|null $confidentialite The confidentialité.
     * @return Compte Returns this compte.
     */
    public function setConfidentialite(?bool $confidentialite): Compte {
        $this->confidentialite = $confidentialite;
        return $this;
    }

    /**
     * Set the confidentialité compte résultat.
     *
     * @param bool|null $confidentialiteCompteResultat The confidentialité compte résultat.
     * @return Compte Returns this compte.
     */
    public function setConfidentialiteCompteResultat(?bool $confidentialiteCompteResultat): Compte {
        $this->confidentialiteCompteResultat = $confidentialiteCompteResultat;
        return $this;
    }

    /**
     * Set the date clôture.
     *
     * @param string|null $dateCloture The date clôture.
     * @return Compte Returns this compte.
     */
    public function setDateCloture(?string $dateCloture): Compte {
        $this->dateCloture = $dateCloture;
        return $this;
    }
}