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

use WBW\Library\Pappers\Traits\Floats\FloatPourcentageNueProprieteTrait;
use WBW\Library\Pappers\Traits\Floats\FloatPourcentagePleineProprieteTrait;
use WBW\Library\Pappers\Traits\Floats\FloatPourcentageUsufruitTrait;

/**
 * Détails indivision.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class DetailsIndivision {

    use FloatPourcentageNueProprieteTrait;
    use FloatPourcentagePleineProprieteTrait;
    use FloatPourcentageUsufruitTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
