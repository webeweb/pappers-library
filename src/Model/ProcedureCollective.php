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

use WBW\Library\Core\Model\Attribute\StringTypeTrait;
use WBW\Library\Pappers\Model\Attribute\ArrayPublicationsBodaccTrait;

/**
 * Procédure collective.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class ProcedureCollective {

    use ArrayPublicationsBodaccTrait;
    use StringTypeTrait;

    /**
     * Date début.
     *
     * @var string|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var string|null
     */
    private $dateFin;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setPublicationsBodacc([]);
    }

    /**
     * Get the date début.
     *
     * @return string|null Returns the date début.
     */
    public function getDateDebut(): ?string {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return string|null Returns the date fin.
     */
    public function getDateFin(): ?string {
        return $this->dateFin;
    }

    /**
     * Set the date début.
     *
     * @param string|null $dateDebut The date début.
     * @return ProcedureCollective Returns this procédure collective.
     */
    public function setDateDebut(?string $dateDebut): ProcedureCollective {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param string|null $dateFin The date fin.
     * @return ProcedureCollective Returns this procédure collective.
     */
    public function setDateFin(?string $dateFin): ProcedureCollective {
        $this->dateFin = $dateFin;
        return $this;
    }
}