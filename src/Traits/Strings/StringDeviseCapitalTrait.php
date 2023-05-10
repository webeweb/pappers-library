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
 * String devise capital trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringDeviseCapitalTrait {

    /**
     * Devise capital.
     *
     * @var string|null
     */
    protected $deviseCapital;

    /**
     * Get the devise capital.
     *
     * @return string|null Returns the devise capital.
     */
    public function getDeviseCapital(): ?string {
        return $this->deviseCapital;
    }

    /**
     * Set the devise capital.
     *
     * @param string|null $deviseCapital The devise capital.
     * @return self Returns this instance.
     */
    public function setDeviseCapital(?string $deviseCapital): self {
        $this->deviseCapital = $deviseCapital;
        return $this;
    }
}
