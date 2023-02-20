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
 * Integer effectif max trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Integers
 */
trait IntegerEffectifMaxTrait {

    /**
     * Effectif max.
     *
     * @var int|null
     */
    private $effectifMax;

    /**
     * Get the effectif max.
     *
     * @return int|null Returns the effectif max.
     */
    public function getEffectifMax(): ?int {
        return $this->effectifMax;
    }

    /**
     * Set the effectif max.
     *
     * @param int|null $effectifMax The effectif max.
     * @return self Returns this instance.
     */
    public function setEffectifMax(?int $effectifMax): self {
        $this->effectifMax = $effectifMax;
        return $this;
    }
}
