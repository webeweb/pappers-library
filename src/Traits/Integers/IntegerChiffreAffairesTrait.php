<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Integers;

/**
 * Integer chiffre affaires trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Integers
 */
trait IntegerChiffreAffairesTrait {

    /**
     * Chiffre affaires.
     *
     * @var int|null
     */
    private $ChiffreAffaires;

    /**
     * Get the chiffre affaires.
     *
     * @return int|null Returns the chiffre affaires.
     */
    public function getChiffreAffaires(): ?int {
        return $this->ChiffreAffaires;
    }

    /**
     * Set the chiffre affaires.
     *
     * @param int|null $ChiffreAffaires The chiffre affaires.
     * @return self Returns this instance.
     */
    public function setChiffreAffaires(?int $ChiffreAffaires): self {
        $this->ChiffreAffaires = $ChiffreAffaires;
        return $this;
    }
}
