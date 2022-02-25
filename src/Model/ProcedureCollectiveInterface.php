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

/**
 * Procédure collective interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
interface ProcedureCollectiveInterface {

    /**
     * Type "liquidation judiciaire ou Procédure de sauvegarde".
     *
     * @var string
     */
    const TYPE_LIQUIDATION_JUDICIAIRE = "Liquidation judiciaire ou Procédure de sauvegarde";

    /**
     * Type "redressement judiciaire".
     *
     * @var string
     */
    const TYPE_REDRESSEMENT_JUDICIAIRE = "Redressement judiciaire";
}
