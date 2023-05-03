<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\RechercheRequestInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheRequestInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("dirigeants", RechercheRequestInterface::BASE_DIRIGEANTS);
        $this->assertEquals("documents", RechercheRequestInterface::BASE_DOCUMENTS);
        $this->assertEquals("entreprises", RechercheRequestInterface::BASE_ENTREPRISES);
        $this->assertEquals("publications", RechercheRequestInterface::BASE_PUBLICATIONS);

        $this->assertEquals("csv", RechercheRequestInterface::EXPORT_CSV);
        $this->assertEquals("json", RechercheRequestInterface::EXPORT_JSON);
        $this->assertEquals("xlsx", RechercheRequestInterface::EXPORT_XLSX);

        $this->assertEquals("Création", RechercheRequestInterface::TYPE_PUBLICATION_CREATION);
        $this->assertEquals("Dépôt des comptes", RechercheRequestInterface::TYPE_PUBLICATION_DEPOT_COMPTES);
        $this->assertEquals("Immatriculation", RechercheRequestInterface::TYPE_PUBLICATION_IMMATRICULATION);
        $this->assertEquals("Modification", RechercheRequestInterface::TYPE_PUBLICATION_MODIFICATION);
        $this->assertEquals("Procédure collective", RechercheRequestInterface::TYPE_PUBLICATION_PROCEDURE_COLLECTIVE);
        $this->assertEquals("Radiation", RechercheRequestInterface::TYPE_PUBLICATION_RADIATION);
        $this->assertEquals("Vente", RechercheRequestInterface::TYPE_PUBLICATION_VENTE);
    }
}
