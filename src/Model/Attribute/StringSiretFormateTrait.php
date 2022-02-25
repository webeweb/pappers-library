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
 * String SIRET formaté trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringSiretFormateTrait {

    /**
     * SIRET formaté.
     *
     * @var string|null
     */
    private $siretFormate;

    /**
     * Get the SIRET formaté.
     *
     * @return string|null Returns the SIRET formaté.
     */
    public function getSiretFormate(): ?string {
        return $this->siretFormate;
    }

    /**
     * Set the SIRET formaté.
     *
     * @param string|null $siretFormate The SIRET formaté.
     * @return self Returns this instance.
     */
    public function setSiretFormate(?string $siretFormate): self {
        $this->siretFormate = $siretFormate;
        return $this;
    }
}
