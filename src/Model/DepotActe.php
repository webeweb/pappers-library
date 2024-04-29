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

use WBW\Library\Common\Traits\Strings\StringTokenTrait;
use WBW\Library\Pappers\Traits\Booleans\BooleanDisponibleTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateDepotFormateeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateDepotTrait;
use WBW\Library\Pappers\Traits\Strings\StringNomFichierPdfTrait;

/**
 * Dépôt acte.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class DepotActe {

    use BooleanDisponibleTrait;
    use StringDateDepotTrait;
    use StringDateDepotFormateeTrait;
    use StringNomFichierPdfTrait;
    use StringTokenTrait;

    /**
     * Actes.
     *
     * @var Acte[]
     */
    protected $actes;

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
