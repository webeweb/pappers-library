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
 * String pays trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringPaysTrait {

    /**
     * Pays.
     *
     * @var string|null
     */
    private $pays;

    /**
     * Get the pays.
     *
     * @return string|null Returns the pays.
     */
    public function getPays(): ?string {
        return $this->pays;
    }

    /**
     * Set the pays.
     *
     * @param string|null $pays The pays.
     * @return self Returns this instance.
     */
    public function setPays(?string $pays): self {
        $this->pays = $pays;
        return $this;
    }
}