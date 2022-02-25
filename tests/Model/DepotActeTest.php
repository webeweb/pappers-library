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

use WBW\Library\Pappers\Model\Acte;
use WBW\Library\Pappers\Model\DepotActe;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Dépôt acte test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DepotActeTest extends AbstractTestCase {

    /**
     * Tests addActe()
     *
     * @return void
     */
    public function testAddActe(): void {

        // Set an Acte mock.
        $acte = new Acte();

        $obj = new DepotActe();

        $obj->addActe($acte);
        $this->assertSame($acte, $obj->getActes()[0]);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DepotActe();

        $this->assertNull($obj->getDateDepot());
        $this->assertNull($obj->getDateDepotFormatee());
        $this->assertNull($obj->getDisponible());
        $this->assertNull($obj->getNomFichierPdf());
        $this->assertNull($obj->getToken());

        $this->assertEquals([], $obj->getActes());
    }
}
