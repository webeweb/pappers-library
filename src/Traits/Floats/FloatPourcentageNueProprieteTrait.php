<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Floats;

/**
 * Float pourcentage nue propriété.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Floats
 */
trait FloatPourcentageNueProprieteTrait {

    /**
     * Pourcentage nue propriété.
     *
     * @var float|null
     */
    protected $pourcentageNuePropriete;

    /**
     * Get the pourcentage nue propriété.
     *
     * @return float|null Returns the pourcentage nue propriété.
     */
    public function getPourcentageNuePropriete(): ?float {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Set the pourcentage nue propriété.
     *
     * @param float|null $pourcentageNuePropriete The pourcentage nue propriété.
     * @return self Returns this instance.
     */
    public function setPourcentageNuePropriete(?float $pourcentageNuePropriete): self {
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;
        return $this;
    }
}
