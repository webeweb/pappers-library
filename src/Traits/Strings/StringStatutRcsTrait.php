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
 * String statut R.C.S. trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringStatutRcsTrait {

    /**
     * Statut R.C.S.
     *
     * @var string|null
     */
    protected $statutRcs;

    /**
     * Get the statut R.C.S.
     *
     * @return string|null Returns the statut R.C.S.
     */
    public function getStatutRcs(): ?string {
        return $this->statutRcs;
    }

    /**
     * Set the statut R.C.S.
     *
     * @param string|null $statutRcs The statut R.C.S.
     * @return self Returns this instance.
     */
    public function setStatutRcs(?string $statutRcs): self {
        $this->statutRcs = $statutRcs;
        return $this;
    }
}
