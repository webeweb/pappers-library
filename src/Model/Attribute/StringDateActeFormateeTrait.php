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
 * String date acte formatée trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateActeFormateeTrait {

    /**
     * Date acte formatée.
     *
     * @var string|null
     */
    private $dateActeFormatee;

    /**
     * Get the date acte formatée.
     *
     * @return string|null Returns the date acte formatée.
     */
    public function getDateActeFormatee(): ?string {
        return $this->dateActeFormatee;
    }

    /**
     * Set the date acte formatée.
     *
     * @param string|null $dateActeFormatee The date acte formatée.
     * @return self Returns this instance.
     */
    public function setDateActeFormatee(?string $dateActeFormatee): self {
        $this->dateActeFormatee = $dateActeFormatee;
        return $this;
    }
}