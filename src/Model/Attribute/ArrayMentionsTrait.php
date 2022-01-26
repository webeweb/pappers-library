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
 * Array Mentions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait ArrayMentionsTrait {

    /**
     * Mentions.
     *
     * @var string[]|null
     */
    private $mentions;

    /**
     * Get the mentions.
     *
     * @return string[]|null Returns the mentions.
     */
    public function getMentions(): ?array {
        return $this->mentions;
    }

    /**
     * Set the mentions.
     *
     * @param string[]|null $mentions The mentions.
     * @return self Returns this instance.
     */
    public function setMentions(?array $mentions): self {
        $this->mentions = $mentions;
        return $this;
    }
}
