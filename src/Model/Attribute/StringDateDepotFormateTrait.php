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
 * String date dépôt formaté trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateDepotFormateTrait {

    /**
     * Date dépôt formaté.
     *
     * @var string|null
     */
    private $dateDepotFormate;

    /**
     * Get the date dépôt formaté.
     *
     * @return string|null Returns the date dépôt formaté.
     */
    public function getDateDepotFormate(): ?string {
        return $this->dateDepotFormate;
    }

    /**
     * Set the date dépôt formaté.
     *
     * @param string|null $dateDepotFormate The date dépôt formaté.
     * @return self Returns this instance.
     */
    public function setDateDepotFormate(?string $dateDepotFormate): self {
        $this->dateDepotFormate = $dateDepotFormate;
        return $this;
    }
}