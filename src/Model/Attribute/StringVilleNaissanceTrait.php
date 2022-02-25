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
 * String ville naissance trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringVilleNaissanceTrait {

    /**
     * Ville naissance.
     *
     * @var string|null
     */
    private $villeNaissance;

    /**
     * Get the ville naissance.
     *
     * @return string|null Returns the ville naissance.
     */
    public function getVilleNaissance(): ?string {
        return $this->villeNaissance;
    }

    /**
     * Set the ville naissance.
     *
     * @param string|null $villeNaissance The ville naissance.
     * @return self Returns this instance.
     */
    public function setVilleNaissance(?string $villeNaissance): self {
        $this->villeNaissance = $villeNaissance;
        return $this;
    }
}
