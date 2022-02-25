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
trait BooleanEntrepriseCesseeTrait {

    /**
     * Personne morale.
     *
     * @var bool|null
     */
    private $entrepriseCessee;

    /**
     * Get the personne morale.
     *
     * @return bool|null Returns the personne morale.
     */
    public function getEntrepriseCessee(): ?bool {
        return $this->entrepriseCessee;
    }

    /**
     * Set the personne morale.
     *
     * @param bool|null $entrepriseCessee The personne morale.
     * @return self Returns this instance.
     */
    public function setEntrepriseCessee(?bool $entrepriseCessee): self {
        $this->entrepriseCessee = $entrepriseCessee;
        return $this;
    }
}
