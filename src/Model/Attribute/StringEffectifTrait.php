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
 * String effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringEffectifTrait {

    /**
     * Effectif.
     *
     * @var string|null
     */
    private $effectif;

    /**
     * Get the effectif.
     *
     * @return string|null Returns the effectif.
     */
    public function getEffectif(): ?string {
        return $this->effectif;
    }

    /**
     * Set the effectif.
     *
     * @param string|null $effectif The effectif.
     * @return self Returns this instance.
     */
    public function setEffectif(?string $effectif): self {
        $this->effectif = $effectif;
        return $this;
    }
}