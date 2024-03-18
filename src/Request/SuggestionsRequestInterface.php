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
 * Suggestions request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
interface SuggestionsRequestInterface {

    /**
     * Cible "dénomination".
     *
     * @var string
     */
    public const CIBLE_DENOMINATION = "denomination";

    /**
     * Cible "com complet".
     *
     * @var string
     */
    public const CIBLE_NOM_COMPLET = "nom_complet";

    /**
     * Cible "nom entreprise".
     *
     * @var string
     */
    public const CIBLE_NOM_ENTREPRISE = "nom_entreprise";

    /**
     * Cible "représentant".
     *
     * @var string
     */
    public const CIBLE_REPRESENTANT = "representant";

    /**
     * Cible "SIREN".
     *
     * @var string
     */
    public const CIBLE_SIREN = "siren";

    /**
     * Cible "SIRET".
     *
     * @var string
     */
    public const CIBLE_SIRET = "siret";
}
