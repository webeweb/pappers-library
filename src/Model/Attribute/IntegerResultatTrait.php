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
 * Integer résultat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerResultatTrait {

    /**
     * Résultat.
     *
     * @var int|null
     */
    private $resultat;

    /**
     * Get the résultat.
     *
     * @return int|null Returns the résultat.
     */
    public function getResultat(): ?int {
        return $this->resultat;
    }

    /**
     * Set the résultat.
     *
     * @param int|null $resultat The résultat.
     * @return self Returns this instance.
     */
    public function setResultat(?int $resultat): self {
        $this->resultat = $resultat;
        return $this;
    }
}