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
 * String date dépôt trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateDepotTrait {

    /**
     * Date dépôt.
     *
     * @var string|null
     */
    private $dateDepot;

    /**
     * Get the date dépôt.
     *
     * @return string|null Returns the date dépôt.
     */
    public function getDateDepot(): ?string {
        return $this->dateDepot;
    }

    /**
     * Set the date dépôt.
     *
     * @param string|null $dateDepot The date dépôt.
     * @return self Returns this instance.
     */
    public function setDateDepot(?string $dateDepot): self {
        $this->dateDepot = $dateDepot;
        return $this;
    }
}
