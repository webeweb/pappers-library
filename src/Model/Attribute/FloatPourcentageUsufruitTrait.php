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
 * Float pourcentage usufruit.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait FloatPourcentageUsufruitTrait {

    /**
     * Pourcentage usufruit.
     *
     * @var float|null
     */
    private $pourcentageUsufruit;

    /**
     * Get the pourcentage usufruit.
     *
     * @return float|null Returns the pourcentage usufruit.
     */
    public function getPourcentageUsufruit(): ?float {
        return $this->pourcentageUsufruit;
    }

    /**
     * Set the pourcentage usufruit.
     *
     * @param float|null $pourcentageUsufruit The pourcentage usufruit.
     * @return self Returns this instance.
     */
    public function setPourcentageUsufruit(?float $pourcentageUsufruit): self {
        $this->pourcentageUsufruit = $pourcentageUsufruit;
        return $this;
    }
}