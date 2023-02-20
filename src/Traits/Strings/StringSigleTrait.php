<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Strings;

/**
 * String sigle trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringSigleTrait {

    /**
     * Sigle.
     *
     * @var string|null
     */
    private $sigle;

    /**
     * Get the sigle.
     *
     * @return string|null Returns the sigle.
     */
    public function getSigle(): ?string {
        return $this->sigle;
    }

    /**
     * Set the sigle.
     *
     * @param string|null $sigle The sigle.
     * @return self Returns this instance.
     */
    public function setSigle(?string $sigle): self {
        $this->sigle = $sigle;
        return $this;
    }
}
