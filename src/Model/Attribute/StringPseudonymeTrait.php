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
 * String pseudonyme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringPseudonymeTrait {

    /**
     * Pseudonyme.
     *
     * @var string|null
     */
    private $pseudonyme;

    /**
     * Get the pseudonyme.
     *
     * @return string|null Returns the pseudonyme.
     */
    public function getPseudonyme(): ?string {
        return $this->pseudonyme;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string|null $pseudonyme The pseudonyme.
     * @return self Returns this instance.
     */
    public function setPseudonyme(?string $pseudonyme): self {
        $this->pseudonyme = $pseudonyme;
        return $this;
    }
}