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
 * String nom trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringNomTrait {

    /**
     * Nom.
     *
     * @var string|null
     */
    protected $nom;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return self Returns this instance.
     */
    public function setNom(?string $nom): self {
        $this->nom = $nom;
        return $this;
    }
}
