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

use WBW\Library\Pappers\Model\Document;

/**
 * Recherche documents response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Response
 */
class RechercheDocumentsResponse extends AbstractRechercheResponse {

    /**
     * Résultats.
     *
     * @var Document[]
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
     * @param Document $resultat The résultat.
     * @return RechercheDocumentsResponse Returns this recherche documents response.
     */
    public function addResultat(Document $resultat): RechercheDocumentsResponse {
        $this->resultats[] = $resultat;
        return $this;
    }

    /**
     * Get the résultats.
     *
     * @return Document[] Returns the résultats.
     */
    public function getResultats(): array {
        return $this->resultats;
    }

    /**
     * Set the résultats.
     *
     * @param Document[] $resultats The résultats.
     * @return RechercheDocumentsResponse Returns this recherche documents response.
     */
    protected function setResultats(array $resultats): RechercheDocumentsResponse {
        $this->resultats = $resultats;
        return $this;
    }
}
