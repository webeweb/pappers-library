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
 * Boolean personne morale trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait BooleanPersonneMoraleTrait {

    /**
     * Personne morale.
     *
     * @var bool|null
     */
    private $personneMorale;

    /**
     * Get the personne morale.
     *
     * @return bool|null Returns the personne morale.
     */
    public function getPersonneMorale(): ?bool {
        return $this->personneMorale;
    }

    /**
     * Set the personne morale.
     *
     * @param bool|null $personneMorale The personne morale.
     * @return self Returns this instance.
     */
    public function setPersonneMorale(?bool $personneMorale): self {
        $this->personneMorale = $personneMorale;
        return $this;
    }
}
