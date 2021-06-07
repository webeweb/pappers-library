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
 * String département trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDepartementTrait {

    /**
     * Département.
     *
     * @var string|null
     */
    private $departement;

    /**
     * Get the département.
     *
     * @return string|null Returns the département.
     */
    public function getDepartement(): ?string {
        return $this->departement;
    }

    /**
     * Set the département.
     *
     * @param string|null $departement The département.
     * @return self Returns this instance.
     */
    public function setDepartement(?string $departement): self {
        $this->departement = $departement;
        return $this;
    }
}