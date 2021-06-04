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

use WBW\Library\Pappers\Model\Attribute\BooleanDisponibleTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotFormateTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomFichierPdfTrait;
use WBW\Library\Pappers\Model\Attribute\StringTokenTrait;

/**
 * Dépôt acte.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class DepotActe {

    use BooleanDisponibleTrait;
    use StringDateDepotTrait;
    use StringDateDepotFormateTrait;
    use StringNomFichierPdfTrait;
    use StringTokenTrait;

    /**
     * Actes.
     *
     * @var Acte[]
     */
    private $actes;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setActes([]);
    }

    /**
     * Add an acte.
     *
     * @param Acte $acte The acte.
     * @return DepotActe Returns this dépôt acte.
     */
    public function addActe(Acte $acte): DepotActe {
        $this->actes[] = $acte;
        return $this;
    }

    /**
     * Get the actes.
     *
     * @return Acte[] Returns the actes.
     */
    public function getActes(): array {
        return $this->actes;
    }

    /**
     * Set the actes.
     *
     * @param Acte[] $actes The actes.
     * @return DepotActe Returns this dépôt acte.
     */
    protected function setActes(array $actes): DepotActe {
        $this->actes = $actes;
        return $this;
    }
}