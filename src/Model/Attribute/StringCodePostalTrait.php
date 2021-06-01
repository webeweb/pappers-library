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
 * String code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringCodePostalTrait {

    /**
     * Code postal.
     *
     * @var string|null
     */
    private $codePostal;

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return self Returns this instance.
     */
    public function setCodePostal(?string $codePostal): self {
        $this->codePostal = $codePostal;
        return $this;
    }
}