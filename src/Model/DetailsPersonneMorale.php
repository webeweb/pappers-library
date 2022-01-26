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

use WBW\Library\Pappers\Model\Attribute\FloatPourcentageNueProprieteTrait;
use WBW\Library\Pappers\Model\Attribute\FloatPourcentagePleineProprieteTrait;
use WBW\Library\Pappers\Model\Attribute\FloatPourcentageUsufruitTrait;

/**
 * Détails personne morale.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class DetailsPersonneMorale {

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
