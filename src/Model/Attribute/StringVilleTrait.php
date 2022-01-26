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
 * String ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringVilleTrait {

    /**
     * Ville.
     *
     * @var string|null
     */
    private $ville;

    /**
     * Get the ville.
     *
     * @return string|null Returns the ville.
     */
    public function getVille(): ?string {
        return $this->ville;
    }

    /**
     * Set the ville.
     *
     * @param string|null $ville The ville.
     * @return self Returns this instance.
     */
    public function setVille(?string $ville): self {
        $this->ville = $ville;
        return $this;
    }
}
