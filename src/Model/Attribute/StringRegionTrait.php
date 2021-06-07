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
 * String région trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringRegionTrait {

    /**
     * Région.
     *
     * @var string|null
     */
    private $region;

    /**
     * Get the région.
     *
     * @return string|null Returns the région.
     */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Set the région.
     *
     * @param string|null $region The région.
     * @return self Returns this instance.
     */
    public function setRegion(?string $region): self {
        $this->region = $region;
        return $this;
    }
}