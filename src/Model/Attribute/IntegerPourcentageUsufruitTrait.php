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
 * Integer Pourcentage usufruit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerPourcentageUsufruitTrait {

    /**
     * Pourcentage usufruit.
     *
     * @var int|null
     */
    private $pourcentageUsufruit;

    /**
     * Get the pourcentage usufruit.
     *
     * @return int|null Returns the pourcentage usufruit.
     */
    public function getPourcentageUsufruit(): ?int {
        return $this->pourcentageUsufruit;
    }

    /**
     * Set the pourcentage usufruit.
     *
     * @param int|null $pourcentageUsufruit The pourcentage usufruit.
     * @return self Returns this instance.
     */
    public function setPourcentageUsufruit(?int $pourcentageUsufruit): self {
        $this->pourcentageUsufruit = $pourcentageUsufruit;
        return $this;
    }
}