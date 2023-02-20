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
 * Integer année effectif trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Integers
 */
trait IntegerAnneeEffectifTrait {

    /**
     * Année effectif.
     *
     * @var int|null
     */
    private $anneeEffectif;

    /**
     * Get the année effectif.
     *
     * @return int|null Returns the année effectif.
     */
    public function getAnneeEffectif(): ?int {
        return $this->anneeEffectif;
    }

    /**
     * Set the année effectif.
     *
     * @param int|null $anneeEffectif The année effectif.
     * @return self Returns this instance.
     */
    public function setAnneeEffectif(?int $anneeEffectif): self {
        $this->anneeEffectif = $anneeEffectif;
        return $this;
    }
}
