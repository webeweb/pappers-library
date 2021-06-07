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
 * String convention collective trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringConventionCollectiveTrait {

    /**
     * Convention collective.
     *
     * @var string|null
     */
    private $conventionCollective;

    /**
     * Get the convention collective.
     *
     * @return string|null Returns the convention collective.
     */
    public function getConventionCollective(): ?string {
        return $this->conventionCollective;
    }

    /**
     * Set the convention collective.
     *
     * @param string|null $conventionCollective The convention collective.
     * @return self Returns this instance.
     */
    public function setConventionCollective(?string $conventionCollective): self {
        $this->conventionCollective = $conventionCollective;
        return $this;
    }
}