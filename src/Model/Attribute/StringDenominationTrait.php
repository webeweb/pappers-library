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
 * String dénomination trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDenominationTrait {

    /**
     * Denomination.
     *
     * @var string|null
     */
    private $denomination;

    /**
     * Get the denomination.
     *
     * @return string|null Returns the denomination.
     */
    public function getDenomination(): ?string {
        return $this->denomination;
    }

    /**
     * Set the denomination.
     *
     * @param string|null $denomination The denomination.
     * @return self Returns this instance.
     */
    public function setDenomination(?string $denomination): self {
        $this->denomination = $denomination;
        return $this;
    }
}
