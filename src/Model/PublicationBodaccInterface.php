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
 * Publication  BODACC interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
interface PublicationBodaccInterface {

    /**
     * Type "création".
     *
     * @var string
     */
    const TYPE_CREATION = "Création";

    /**
     * Type "dépôt des comptes".
     *
     * @var string
     */
    const TYPE_DEPOT_COMPTES = "Dépôt des comptes";

    /**
     * Type "immatriculation".
     *
     * @var string
     */
    const TYPE_IMMATRICULATION = "Immatriculation";

    /**
     * Type "modification".
     *
     * @var string
     */
    const TYPE_MODIFICATION = "Modification";

    /**
     * Type "procédure collective".
     *
     * @var string
     */
    const TYPE_PROCEDURE_COLLECTIVE = "Procédure collective";

    /**
     * Type "radiation".
     *
     * @var string
     */
    const TYPE_RADIATION = "Radiation";

    /**
     * Type "vente".
     *
     * @var string
     */
    const TYPE_VENTE = "Vente";
}