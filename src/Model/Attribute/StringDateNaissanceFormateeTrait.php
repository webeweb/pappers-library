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
 * String date naissance formatée trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateNaissanceFormateeTrait {

    /**
     * Date naissance formatée.
     *
     * @var string|null
     */
    private $dateNaissanceFormatee;

    /**
     * Get the date naissance formatée.
     *
     * @return string|null Returns the date naissance formatée.
     */
    public function getDateNaissanceFormatee(): ?string {
        return $this->dateNaissanceFormatee;
    }

    /**
     * Set the date naissance formatée.
     *
     * @param string|null $dateNaissanceFormatee The date naissance formatée.
     * @return self Returns this instance.
     */
    public function setDateNaissanceFormatee(?string $dateNaissanceFormatee): self {
        $this->dateNaissanceFormatee = $dateNaissanceFormatee;
        return $this;
    }
}