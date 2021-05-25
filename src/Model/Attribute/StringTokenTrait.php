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
 * String Token trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringTokenTrait {

    /**
     * Token.
     *
     * @var string|null
     */
    private $token;

    /**
     * Get the token.
     *
     * @return string|null Returns the token.
     */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Set the token.
     *
     * @param string|null $token The token.
     * @return self Returns this instance.
     */
    public function setToken(?string $token): self {
        $this->token = $token;
        return $this;
    }
}