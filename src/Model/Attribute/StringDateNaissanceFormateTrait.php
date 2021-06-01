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
 * String date naissance formaté trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateNaissanceFormateTrait {

    /**
     * Date naissance formaté.
     *
     * @var string|null
     */
    private $dateNaissanceFormate;

    /**
     * Get the date naissance formaté.
     *
     * @return string|null Returns the date naissance formaté.
     */
    public function getDateNaissanceFormate(): ?string {
        return $this->dateNaissanceFormate;
    }

    /**
     * Set the date naissance formaté.
     *
     * @param string|null $dateNaissanceFormate The date naissance formaté.
     * @return self Returns this instance.
     */
    public function setDateNaissanceFormate(?string $dateNaissanceFormate): self {
        $this->dateNaissanceFormate = $dateNaissanceFormate;
        return $this;
    }
}