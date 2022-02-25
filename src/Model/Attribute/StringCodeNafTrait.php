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
 * String code NAF trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringCodeNafTrait {

    /**
     * Code NAF.
     *
     * @var string|null
     */
    private $codeNaf;

    /**
     * Get the code NAF.
     *
     * @return string|null Returns the code NAF.
     */
    public function getCodeNaf(): ?string {
        return $this->codeNaf;
    }

    /**
     * Set the code NAF.
     *
     * @param string|null $codeNaf The code NAF.
     * @return self Returns this instance.
     */
    public function setCodeNaf(?string $codeNaf): self {
        $this->codeNaf = $codeNaf;
        return $this;
    }
}
