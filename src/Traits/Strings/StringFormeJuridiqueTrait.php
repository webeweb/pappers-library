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
 * String forme juridique trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringFormeJuridiqueTrait {

    /**
     * Forme juridique.
     *
     * @var string|null
     */
    private $formeJuridique;

    /**
     * Get the forme juridique.
     *
     * @return string|null Returns the forme juridique.
     */
    public function getFormeJuridique(): ?string {
        return $this->formeJuridique;
    }

    /**
     * Set the forme juridique.
     *
     * @param string|null $formeJuridique The forme juridique.
     * @return self Returns this instance.
     */
    public function setFormeJuridique(?string $formeJuridique): self {
        $this->formeJuridique = $formeJuridique;
        return $this;
    }
}
