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

use WBW\Library\Pappers\Model\Representant;

/**
 * Recherche dirigeants response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
class RechercheDirigeantsResponse extends AbstractRechercheResponse {

    /**
     * Résultats.
     *
     * @var Representant[]
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
     * @param Representant $resultat The résultat.
     * @return RechercheDirigeantsResponse Returns this recherche dirigeants response.
     */
    public function addResultat(Representant $resultat): RechercheDirigeantsResponse {
        $this->resultats[] = $resultat;
        return $this;
    }

    /**
     * Get the résultats.
     *
     * @return Representant[] Returns the résultats.
     */
    public function getResultats(): array {
        return $this->resultats;
    }

    /**
     * Set the résultats.
     *
     * @param Representant[] $resultats The résultats.
     * @return RechercheDirigeantsResponse Returns this recherche dirigeants response.
     */
    protected function setResultats(array $resultats): RechercheDirigeantsResponse {
        $this->resultats = $resultats;
        return $this;
    }
}