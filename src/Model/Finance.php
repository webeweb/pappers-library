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

use WBW\Library\Pappers\Model\Attribute\IntegerChiffreAffairesTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerResultatTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateClotureExerciceTrait;

/**
 * Finance.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class Finance {

    use IntegerChiffreAffairesTrait;
    use IntegerResultatTrait;
    use StringDateClotureExerciceTrait;

    /**
     * Année.
     *
     * @var int|null
     */
    private $annee;

    /**
     * Durée exercice.
     *
     * @var int|null
     */
    private $dureeExercice;

    /**
     * Effectif.
     *
     * @var int|null
     */
    private $effectif;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the année.
     *
     * @return int|null Returns the année.
     */
    public function getAnnee(): ?int {
        return $this->annee;
    }

    /**
     * Get the durée exercice.
     *
     * @return int|null Returns the durée exercice.
     */
    public function getDureeExercice(): ?int {
        return $this->dureeExercice;
    }

    /**
     * Get the effectif.
     *
     * @return int|null Returns the effectif.
     */
    public function getEffectif(): ?int {
        return $this->effectif;
    }

    /**
     * Set the année.
     *
     * @param int|null $annee The année.
     * @return Finance Returns this finance.
     */
    public function setAnnee(?int $annee): Finance {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the durée exercice.
     *
     * @param int|null $dureeExercice The durée exercice.
     * @return Finance Returns this finance.
     */
    public function setDureeExercice(?int $dureeExercice): Finance {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the effectif.
     *
     * @param int|null $effectif The effectif.
     * @return Finance Returns this finance.
     */
    public function setEffectif(?int $effectif): Finance {
        $this->effectif = $effectif;
        return $this;
    }
}
