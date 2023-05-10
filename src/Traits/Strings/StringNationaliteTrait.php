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
 * String nationalité trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringNationaliteTrait {

    /**
     * Nationalité.
     *
     * @var string|null
     */
    protected $nationalite;

    /**
     * Get the nationalité.
     *
     * @return string|null Returns the nationalité.
     */
    public function getNationalite(): ?string {
        return $this->nationalite;
    }

    /**
     * Set the nationalité.
     *
     * @param string|null $nationalite The nationalité.
     * @return self Returns this instance.
     */
    public function setNationalite(?string $nationalite): self {
        $this->nationalite = $nationalite;
        return $this;
    }
}
