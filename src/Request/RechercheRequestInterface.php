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

use WBW\Library\Pappers\Model\PublicationBodaccInterface;

/**
 * Recherche request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Request
 */
interface RechercheRequestInterface {

    /**
     * Base "dirigeants".
     *
     * @var string
     */
    const BASE_DIRIGEANTS = "dirigeants";

    /**
     * Base "documents".
     *
     * @var string
     */
    const BASE_DOCUMENTS = "documents";

    /**
     * Base "entreprises".
     *
     * @var string
     */
    const BASE_ENTREPRISES = "entreprises";

    /**
     * Base "publications".
     *
     * @var string
     */
    const BASE_PUBLICATIONS = "publications";

    /**
     * Type publication "création".
     *
     * @var string
     */
    const TYPE_PUBLICATION_CREATION = PublicationBodaccInterface::TYPE_CREATION;

    /**
     * Type publication "dépôt des comptes".
     *
     * @var string
     */
    const TYPE_PUBLICATION_DEPOT_COMPTES = PublicationBodaccInterface::TYPE_DEPOT_COMPTES;

    /**
     * Type publication "immatriculation".
     *
     * @var string
     */
    const TYPE_PUBLICATION_IMMATRICULATION = PublicationBodaccInterface::TYPE_IMMATRICULATION;

    /**
     * Type publication "modification".
     *
     * @var string
     */
    const TYPE_PUBLICATION_MODIFICATION = PublicationBodaccInterface::TYPE_MODIFICATION;

    /**
     * Type publication "procédure collective".
     *
     * @var string
     */
    const TYPE_PUBLICATION_PROCEDURE_COLLECTIVE = PublicationBodaccInterface::TYPE_PROCEDURE_COLLECTIVE;

    /**
     * Type publication "radiation".
     *
     * @var string
     */
    const TYPE_PUBLICATION_RADIATION = PublicationBodaccInterface::TYPE_RADIATION;

    /**
     * Type publication "vente".
     *
     * @var string
     */
    const TYPE_PUBLICATION_VENTE = PublicationBodaccInterface::TYPE_VENTE;
}