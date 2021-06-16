<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Response;

use WBW\Library\Pappers\Model\PublicationBodacc;

/**
 * Recherche publications response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
class RecherchePublicationsResponse extends AbstractRechercheResponse {

    /**
     * Résultats.
     *
     * @var PublicationBodacc[]
     */
    private $resultats;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setResultats([]);
    }

    /**
     * Add a résultat.
     *
     * @param PublicationBodacc $resultat The résultat.
     * @return RecherchePublicationsResponse Returns this recherche publications response.
     */
    public function addResultat(PublicationBodacc $resultat): RecherchePublicationsResponse {
        $this->resultats[] = $resultat;
        return $this;
    }

    /**
     * Get the résultats.
     *
     * @return PublicationBodacc[] Returns the résultats.
     */
    public function getResultats(): array {
        return $this->resultats;
    }

    /**
     * Set the résultats.
     *
     * @param PublicationBodacc[] $resultats The résultats.
     * @return RecherchePublicationsResponse Returns this recherche publications response.
     */
    protected function setResultats(array $resultats): RecherchePublicationsResponse {
        $this->resultats = $resultats;
        return $this;
    }
}