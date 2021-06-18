<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\PublicationBodaccInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Publication BODACC interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class PublicationBodaccInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("Création", PublicationBodaccInterface::TYPE_CREATION);
        $this->assertEquals("Dépôt des comptes", PublicationBodaccInterface::TYPE_DEPOT_COMPTES);
        $this->assertEquals("Immatriculation", PublicationBodaccInterface::TYPE_IMMATRICULATION);
        $this->assertEquals("Modification", PublicationBodaccInterface::TYPE_MODIFICATION);
        $this->assertEquals("Procédure collective", PublicationBodaccInterface::TYPE_PROCEDURE_COLLECTIVE);
        $this->assertEquals("Radiation", PublicationBodaccInterface::TYPE_RADIATION);
        $this->assertEquals("Vente", PublicationBodaccInterface::TYPE_VENTE);
    }
}
