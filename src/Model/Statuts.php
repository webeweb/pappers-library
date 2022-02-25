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
use WBW\Library\Pappers\Model\Attribute\StringDateActeFormateeTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateActeTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotFormateeTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotTrait;
use WBW\Library\Pappers\Model\Attribute\StringDecisionTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomFichierPdfTrait;
use WBW\Library\Traits\Strings\StringTokenTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Statuts.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class Statuts {

    use BooleanDisponibleTrait;
    use StringDateActeTrait;
    use StringDateActeFormateeTrait;
    use StringDateDepotTrait;
    use StringDateDepotFormateeTrait;
    use StringDecisionTrait;
    use StringNomFichierPdfTrait;
    use StringTokenTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
