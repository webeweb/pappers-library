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
 * Integer pourcentage nue propriété.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerPourcentageNueProprieteTrait {

    /**
     * Pourcentage nue propriété.
     *
     * @var int|null
     */
    private $pourcentageNuePropriete;

    /**
     * Get the pourcentage nue propriété.
     *
     * @return int|null Returns the pourcentage nue propriété.
     */
    public function getPourcentageNuePropriete(): ?int {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Set the pourcentage nue propriété.
     *
     * @param int|null $pourcentageNuePropriete The pourcentage nue propriété.
     * @return self Returns this instance.
     */
    public function setPourcentageNuePropriete(?int $pourcentageNuePropriete): self {
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;
        return $this;
    }
}