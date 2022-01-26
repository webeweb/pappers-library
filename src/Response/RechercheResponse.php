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

use WBW\Library\Pappers\Model\Entreprise;

/**
 * Recherche response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
class RechercheResponse extends AbstractRechercheResponse {

    /**
     * Résultats.
     *
     * @var Entreprise[]
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
     * @param Entreprise $resultat The résultat.
     * @return RechercheResponse Returns this recherche response.
     */
    public function addResultat(Entreprise $resultat): RechercheResponse {
        $this->resultats[] = $resultat;
        return $this;
    }

    /**
     * Get the résultats.
     *
     * @return Entreprise[] Returns the résultats.
     */
    public function getResultats(): array {
        return $this->resultats;
    }

    /**
     * Set the résultats.
     *
     * @param Entreprise[] $resultats The résultats.
     * @return RechercheResponse Returns this recherche response.
     */
    protected function setResultats(array $resultats): RechercheResponse {
        $this->resultats = $resultats;
        return $this;
    }
}
