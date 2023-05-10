<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Booleans;

/**
 * Boolean disponible trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Booleans
 */
trait BooleanDisponibleTrait {

    /**
     * Disponible.
     *
     * @var bool|null
     */
    protected $disponible;

    /**
     * Get the disponible.
     *
     * @return bool|null Returns the disponible.
     */
    public function getDisponible(): ?bool {
        return $this->disponible;
    }

    /**
     * Set the disponible.
     *
     * @param bool|null $disponible The disponible.
     * @return self Returns this instance.
     */
    public function setDisponible(?bool $disponible): self {
        $this->disponible = $disponible;
        return $this;
    }
}
