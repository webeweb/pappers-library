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
 * String NIC trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringNicTrait {

    /**
     * NIC.
     *
     * @var string|null
     */
    private $nic;

    /**
     * Get the NIC.
     *
     * @return string|null Returns the NIC.
     */
    public function getNic(): ?string {
        return $this->nic;
    }

    /**
     * Set the NIC.
     *
     * @param string|null $nic The NIC.
     * @return self Returns this instance.
     */
    public function setNic(?string $nic): self {
        $this->nic = $nic;
        return $this;
    }
}
