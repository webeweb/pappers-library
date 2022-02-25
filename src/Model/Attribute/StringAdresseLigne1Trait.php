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
 * String adresse ligne 1 trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringAdresseLigne1Trait {

    /**
     * Adresse ligne 1.
     *
     * @var string|null
     */
    private $adresseLigne1;

    /**
     * Get the adresse ligne 1.
     *
     * @return string|null Returns the adresse ligne 1.
     */
    public function getAdresseLigne1(): ?string {
        return $this->adresseLigne1;
    }

    /**
     * Set the adresse ligne 1.
     *
     * @param string|null $adresseLigne1 The adresse ligne 1.
     * @return self Returns this instance.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self {
        $this->adresseLigne1 = $adresseLigne1;
        return $this;
    }
}
