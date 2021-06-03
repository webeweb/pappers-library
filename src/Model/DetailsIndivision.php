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

use WBW\Library\Pappers\Model\Attribute\IntegerPourcentageNueProprieteTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerPourcentagePleineProprieteTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerPourcentageUsufruitTrait;

/**
 * Détails indivision.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class DetailsIndivision {

    use IntegerPourcentageNueProprieteTrait;
    use IntegerPourcentagePleineProprieteTrait;
    use IntegerPourcentageUsufruitTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}