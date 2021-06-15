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

use WBW\Library\Pappers\Model\Document;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Document test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DocumentTest extends AbstractTestCase {

    /**
     * Tests the setTitres() method.
     *
     * @return void
     */
    public function testSetTitres(): void {

        $obj = new Document();

        $obj->setTitres("titres");
        $this->assertEquals("titres", $obj->getTitres());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Document();

        $this->assertNull($obj->getDateDepot());
        $this->assertNull($obj->getEntreprise());
        $this->assertNull($obj->getMentions());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getTitres());
    }
}
