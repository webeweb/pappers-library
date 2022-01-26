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
 * String adresse ligne 2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringAdresseLigne2Trait {

    /**
     * Adresse ligne 2.
     *
     * @var string|null
     */
    private $adresseLigne2;

    /**
     * Get the adresse ligne 2.
     *
     * @return string|null Returns the adresse ligne 2.
     */
    public function getAdresseLigne2(): ?string {
        return $this->adresseLigne2;
    }

    /**
     * Set the adresse ligne 2.
     *
     * @param string|null $adresseLigne2 The adresse ligne 2.
     * @return self Returns this instance.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self {
        $this->adresseLigne2 = $adresseLigne2;
        return $this;
    }
}
