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
 * String prénom trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringPrenomTrait {

    /**
     * Prénom.
     *
     * @var string|null
     */
    protected $prenom;

    /**
     * Get the prénom.
     *
     * @return string|null Returns the prénom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Set the prénom.
     *
     * @param string|null $prenom The prénom.
     * @return self Returns this instance.
     */
    public function setPrenom(?string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }
}
