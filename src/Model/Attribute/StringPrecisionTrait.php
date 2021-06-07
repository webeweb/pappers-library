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
 * String précision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringPrecisionTrait {

    /**
     * Précision.
     *
     * @var string|null
     */
    private $precision;

    /**
     * Get the précision.
     *
     * @return string|null Returns the précision.
     */
    public function getPrecision(): ?string {
        return $this->precision;
    }

    /**
     * Set the précision.
     *
     * @param string|null $precision The précision.
     * @return self Returns this instance.
     */
    public function setPrecision(?string $precision): self {
        $this->precision = $precision;
        return $this;
    }
}