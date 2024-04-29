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
use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\Pappers\Traits\Booleans\BooleanDisponibleTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateActeFormateeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateActeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateDepotFormateeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateDepotTrait;
use WBW\Library\Pappers\Traits\Strings\StringDecisionTrait;
use WBW\Library\Pappers\Traits\Strings\StringNomFichierPdfTrait;

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
