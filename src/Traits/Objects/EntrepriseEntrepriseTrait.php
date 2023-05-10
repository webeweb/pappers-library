<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Objects;

use WBW\Library\Pappers\Model\Entreprise;

/**
 * Entreprise entreprise trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Objects
 */
trait EntrepriseEntrepriseTrait {

    /**
     * Entreprise.
     *
     * @var Entreprise|null
     */
    protected $entreprise;

    /**
     * Get the entreprise.
     *
     * @return Entreprise|null Returns the entreprise.
     */
    public function getEntreprise(): ?Entreprise {
        return $this->entreprise;
    }

    /**
     * Set the entreprise.
     *
     * @param Entreprise|null $entreprise The entreprise.
     * @return self Returns this instance.
     */
    public function setEntreprise(?Entreprise $entreprise): self {
        $this->entreprise = $entreprise;
        return $this;
    }
}
