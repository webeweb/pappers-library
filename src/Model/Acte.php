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

use WBW\Library\Common\Traits\Strings\StringTypeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateActeFormateeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateActeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDecisionTrait;

/**
 * Acte.
 *
 * @author webeweb <https://github.com/webeweb>
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
