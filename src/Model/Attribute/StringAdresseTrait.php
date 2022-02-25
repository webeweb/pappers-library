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
 * String adresse trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringAdresseTrait {

    /**
     * Adresse.
     *
     * @var string|null
     */
    private $adresse;

    /**
     * Get the adresse.
     *
     * @return string|null Returns the adresse.
     */
    public function getAdresse(): ?string {
        return $this->adresse;
    }

    /**
     * Set the adresse.
     *
     * @param string|null $adresse The adresse.
     * @return self Returns this instance.
     */
    public function setAdresse(?string $adresse): self {
        $this->adresse = $adresse;
        return $this;
    }
}
