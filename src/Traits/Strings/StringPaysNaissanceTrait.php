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
 * String pays naissance trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringPaysNaissanceTrait {

    /**
     * Pays naissance.
     *
     * @var string|null
     */
    private $paysNaissance;

    /**
     * Get the pays naissance.
     *
     * @return string|null Returns the pays naissance.
     */
    public function getPaysNaissance(): ?string {
        return $this->paysNaissance;
    }

    /**
     * Set the pays naissance.
     *
     * @param string|null $paysNaissance The pays naissance.
     * @return self Returns this instance.
     */
    public function setPaysNaissance(?string $paysNaissance): self {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }
}
