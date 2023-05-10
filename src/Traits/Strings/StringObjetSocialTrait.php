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
 * String objet social trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringObjetSocialTrait {

    /**
     * Objet social.
     *
     * @var string|null
     */
    protected $objetSocial;

    /**
     * Get the objet social.
     *
     * @return string|null Returns the objet social.
     */
    public function getObjetSocial(): ?string {
        return $this->objetSocial;
    }

    /**
     * Set the objet social.
     *
     * @param string|null $objetSocial The objet social.
     * @return self Returns this instance.
     */
    public function setObjetSocial(?string $objetSocial): self {
        $this->objetSocial = $objetSocial;
        return $this;
    }
}
