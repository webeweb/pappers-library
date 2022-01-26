<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model\Attribute;

/**
 * Float pourcentage pleine propriété.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait FloatPourcentagePleineProprieteTrait {

    /**
     * Pourcentage pleine propriété.
     *
     * @var float|null
     */
    private $pourcentagePleinePropriete;

    /**
     * Get the pourcentage pleine propriété.
     *
     * @return float|null Returns the pourcentage pleine propriété.
     */
    public function getPourcentagePleinePropriete(): ?float {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Set the pourcentage pleine propriété.
     *
     * @param float|null $pourcentagePleinePropriete The pourcentage pleine propriété.
     * @return self Returns this instance.
     */
    public function setPourcentagePleinePropriete(?float $pourcentagePleinePropriete): self {
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;
        return $this;
    }
}
