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
 * String date acte trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateActeTrait {

    /**
     * Date acte.
     *
     * @var string|null
     */
    private $dateActe;

    /**
     * Get the date acte.
     *
     * @return string|null Returns the date acte.
     */
    public function getDateActe(): ?string {
        return $this->dateActe;
    }

    /**
     * Set the date acte.
     *
     * @param string|null $dateActe The date acte.
     * @return self Returns this instance.
     */
    public function setDateActe(?string $dateActe): self {
        $this->dateActe = $dateActe;
        return $this;
    }
}
