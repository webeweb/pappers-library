<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

use WBW\Library\Pappers\Traits\Strings\StringNomTrait;

/**
 * Convention collective.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class ConventionCollective {

    use StringNomTrait;

    /**
     * Confirmée.
     *
     * @var bool|null
     */
    protected $confirmee;

    /**
     * IDCC.
     *
     * @var int|null
     */
    protected $idcc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the confirmée.
     *
     * @return bool|null Returns the confirmée.
     */
    public function getConfirmee(): ?bool {
        return $this->confirmee;
    }

    /**
     * Get the IDCC.
     *
     * @return int|null Returns the IDCC.
     */
    public function getIdcc(): ?int {
        return $this->idcc;
    }

    /**
     * Set the confirmée.
     *
     * @param bool|null $confirmee The confirmée.
     * @return ConventionCollective Returns this convention collective.
     */
    public function setConfirmee(?bool $confirmee): ConventionCollective {
        $this->confirmee = $confirmee;
        return $this;
    }

    /**
     * Set the IDCC.
     *
     * @param int|null $idcc The IDCC.
     * @return ConventionCollective Returns this convention collective.
     */
    public function setIdcc(?int $idcc): ConventionCollective {
        $this->idcc = $idcc;
        return $this;
    }
}
