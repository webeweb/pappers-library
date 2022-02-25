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
 * String SIREN trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringSirenTrait {

    /**
     * SIREN.
     *
     * @var string|null
     */
    private $siren;

    /**
     * Get the SIREN.
     *
     * @return string|null Returns the SIREN.
     */
    public function getSiren(): ?string {
        return $this->siren;
    }

    /**
     * Set the SIREN.
     *
     * @param string|null $siren The SIREN.
     * @return self Returns this instance.
     */
    public function setSiren(?string $siren): self {
        $this->siren = $siren;
        return $this;
    }
}
