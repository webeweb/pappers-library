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
 * String nom entreprise trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringNomEntrepriseTrait {

    /**
     * Nom entreprise.
     *
     * @var string|null
     */
    protected $nomEntreprise;

    /**
     * Get the nom entreprise.
     *
     * @return string|null Returns the nom entreprise.
     */
    public function getNomEntreprise(): ?string {
        return $this->nomEntreprise;
    }

    /**
     * Set the nom entreprise.
     *
     * @param string|null $nomEntreprise The nom entreprise.
     * @return self Returns this instance.
     */
    public function setNomEntreprise(?string $nomEntreprise): self {
        $this->nomEntreprise = $nomEntreprise;
        return $this;
    }
}
