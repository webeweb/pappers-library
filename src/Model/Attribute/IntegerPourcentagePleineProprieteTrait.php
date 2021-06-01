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
 * Integer pourcentage pleine propriété.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerPourcentagePleineProprieteTrait {

    /**
     * Pourcentage pleine propriété.
     *
     * @var int|null
     */
    private $pourcentagePleinePropriete;

    /**
     * Get the pourcentage pleine propriété.
     *
     * @return int|null Returns the pourcentage pleine propriété.
     */
    public function getPourcentagePleinePropriete(): ?int {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Set the pourcentage pleine propriété.
     *
     * @param int|null $pourcentagePleinePropriete The pourcentage pleine propriété.
     * @return self Returns this instance.
     */
    public function setPourcentagePleinePropriete(?int $pourcentagePleinePropriete): self {
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;
        return $this;
    }
}