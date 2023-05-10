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
 * String adresse ligne 3 trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringAdresseLigne3Trait {

    /**
     * Adresse ligne 3.
     *
     * @var string|null
     */
    protected $adresseLigne3;

    /**
     * Get the adresse ligne 3.
     *
     * @return string|null Returns the adresse ligne 3.
     */
    public function getAdresseLigne3(): ?string {
        return $this->adresseLigne3;
    }

    /**
     * Set the adresse ligne 3.
     *
     * @param string|null $adresseLigne3 The adresse ligne 3.
     * @return self Returns this instance.
     */
    public function setAdresseLigne3(?string $adresseLigne3): self {
        $this->adresseLigne3 = $adresseLigne3;
        return $this;
    }
}
