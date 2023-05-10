<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Strings;

/**
 * String tranche effectif trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringTrancheEffectifTrait {

    /**
     * Tranche effectif.
     *
     * @var string|null
     */
    protected $trancheEffectif;

    /**
     * Get the tranche effectif.
     *
     * @return string|null Returns the tranche effectif.
     */
    public function getTrancheEffectif(): ?string {
        return $this->trancheEffectif;
    }

    /**
     * Set the tranche effectif.
     *
     * @param string|null $trancheEffectif The tranche effectif.
     * @return self Returns this instance.
     */
    public function setTrancheEffectif(?string $trancheEffectif): self {
        $this->trancheEffectif = $trancheEffectif;
        return $this;
    }
}
