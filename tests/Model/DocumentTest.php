<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\Document;
use WBW\Library\Pappers\Model\Titre;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Document test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DocumentTest extends AbstractTestCase {

    /**
     * Test addTitre()
     *
     * @return void
     */
    public function testAddTitres(): void {

        // Set a Titre mock.
        $titre = new Titre();

        $obj = new Document();

        $obj->addTitre($titre);
        $this->assertSame($titre, $obj->getTitres()[0]);
    }

    /**
     * Test setIdFichier()
     *
     * @return void
     */
    public function testSetIdFichier(): void {

        $obj = new Document();

        $obj->setIdFichier(1);
        $this->assertEquals(1, $obj->getIdFichier());
    }

    /**
     * Test setNumChrono()
     *
     * @return void
     */
    public function testSetNumChrono(): void {

        $obj = new Document();

        $obj->setNumChrono("numChrono");
        $this->assertEquals("numChrono", $obj->getNumChrono());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Document();

        $this->assertNull($obj->getDateDepot());
        $this->assertNull($obj->getEntreprise());
        $this->assertNull($obj->getMentions());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getToken());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getIdFichier());
        $this->assertNull($obj->getNumChrono());
        $this->assertEquals([], $obj->getTitres());
    }
}
