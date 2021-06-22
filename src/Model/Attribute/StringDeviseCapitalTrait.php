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
 * String devise captial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDeviseCapitalTrait {

    /**
     * Devise captial.
     *
     * @var string|null
     */
    private $deviseCapital;

    /**
     * Get the devise captial.
     *
     * @return string|null Returns the devise captial.
     */
    public function getDeviseCapital(): ?string {
        return $this->deviseCapital;
    }

    /**
     * Set the devise captial.
     *
     * @param string|null $deviseCapital The devise captial.
     * @return self Returns this instance.
     */
    public function setDeviseCapital(?string $deviseCapital): self {
        $this->deviseCapital = $deviseCapital;
        return $this;
    }
}