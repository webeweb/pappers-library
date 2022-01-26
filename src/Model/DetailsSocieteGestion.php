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

use WBW\Library\Pappers\Model\Attribute\StringAdresseTrait;
use WBW\Library\Pappers\Model\Attribute\StringCodePostalTrait;
use WBW\Library\Pappers\Model\Attribute\StringGreffeTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringSirenTrait;
use WBW\Library\Pappers\Model\Attribute\StringVilleTrait;

/**
 * Détails société gestion.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class DetailsSocieteGestion {

    use StringAdresseTrait;
    use StringCodePostalTrait;
    use StringGreffeTrait;
    use StringNomTrait;
    use StringSirenTrait;
    use StringVilleTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
