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
 * String greffe trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringGreffeTrait {

    /**
     * Greffe.
     *
     * @var string|null
     */
    protected $greffe;

    /**
     * Get the greffe.
     *
     * @return string|null Returns the greffe.
     */
    public function getGreffe(): ?string {
        return $this->greffe;
    }

    /**
     * Set the greffe.
     *
     * @param string|null $greffe The greffe.
     * @return self Returns this instance.
     */
    public function setGreffe(?string $greffe): self {
        $this->greffe = $greffe;
        return $this;
    }
}
