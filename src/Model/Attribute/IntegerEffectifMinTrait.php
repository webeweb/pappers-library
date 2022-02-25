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
 * Integer effectif min trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerEffectifMinTrait {

    /**
     * Effectif min.
     *
     * @var int|null
     */
    private $effectifMin;

    /**
     * Get the effectif min.
     *
     * @return int|null Returns the effectif min.
     */
    public function getEffectifMin(): ?int {
        return $this->effectifMin;
    }

    /**
     * Set the effectif min.
     *
     * @param int|null $effectifMin The effectif min.
     * @return self Returns this instance.
     */
    public function setEffectifMin(?int $effectifMin): self {
        $this->effectifMin = $effectifMin;
        return $this;
    }
}
