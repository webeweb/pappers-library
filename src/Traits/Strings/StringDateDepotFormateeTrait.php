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
 * String date dépôt formatée trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringDateDepotFormateeTrait {

    /**
     * Date dépôt formatée.
     *
     * @var string|null
     */
    private $dateDepotFormatee;

    /**
     * Get the date dépôt formatée.
     *
     * @return string|null Returns the date dépôt formatée.
     */
    public function getDateDepotFormatee(): ?string {
        return $this->dateDepotFormatee;
    }

    /**
     * Set the date dépôt formatée.
     *
     * @param string|null $dateDepotFormatee The date dépôt formatée.
     * @return self Returns this instance.
     */
    public function setDateDepotFormatee(?string $dateDepotFormatee): self {
        $this->dateDepotFormatee = $dateDepotFormatee;
        return $this;
    }
}
