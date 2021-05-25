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
 * String Date acte formaté trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateActeFormateTrait {

    /**
     * Date acte formaté.
     *
     * @var string|null
     */
    private $dateActeFormate;

    /**
     * Get the date acte formaté.
     *
     * @return string|null Returns the date acte formaté.
     */
    public function getDateActeFormate(): ?string {
        return $this->dateActeFormate;
    }

    /**
     * Set the date acte formaté.
     *
     * @param string|null $dateActeFormate The date acte formaté.
     * @return self Returns this instance.
     */
    public function setDateActeFormate(?string $dateActeFormate): self {
        $this->dateActeFormate = $dateActeFormate;
        return $this;
    }
}