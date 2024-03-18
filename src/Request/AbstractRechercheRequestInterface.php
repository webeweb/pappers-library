<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Request;

/**
 * Abstract recherche request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
interface AbstractRechercheRequestInterface {

    /**
     * Précision "approximative".
     *
     * @var string
     */
    public const PRECISION_APPROXIMATIVE = "approximative";

    /**
     * Précision "exacte".
     *
     * @var string
     */
    public const PRECISION_EXACTE = "exacte";

    /**
     * Précision "standard".
     *
     * @var string
     */
    public const PRECISION_STANDARD = "standard";

    /**
     * Statut R.C.S. "inscrit".
     *
     * @var string
     */
    public const STATUT_RCS_INSCRIT = "inscrit";

    /**
     * Statut R.C.S. "non inscrit".
     *
     * @var string
     */
    public const STATUT_RCS_NON_INSCRIT = "non inscrit";

    /**
     * Statut R.C.S. "radie".
     *
     * @var string
     */
    public const STATUT_RCS_RADIE = "radie";
}
