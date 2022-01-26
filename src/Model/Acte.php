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

use WBW\Library\Pappers\Model\Attribute\StringDateActeFormateeTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateActeTrait;
use WBW\Library\Pappers\Model\Attribute\StringDecisionTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Acte.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Acte {

    use StringDateActeTrait;
    use StringDateActeFormateeTrait;
    use StringDecisionTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
