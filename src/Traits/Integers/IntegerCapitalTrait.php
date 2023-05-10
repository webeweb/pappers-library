<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Integers;

/**
 * Integer capital trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Integers
 */
trait IntegerCapitalTrait {

    /**
     * Capital.
     *
     * @var int|null
     */
    protected $capital;

    /**
     * Get the capital.
     *
     * @return int|null Returns the capital.
     */
    public function getCapital(): ?int {
        return $this->capital;
    }

    /**
     * Set the capital.
     *
     * @param int|null $capital The capital.
     * @return self Returns this instance.
     */
    public function setCapital(?int $capital): self {
        $this->capital = $capital;
        return $this;
    }
}
