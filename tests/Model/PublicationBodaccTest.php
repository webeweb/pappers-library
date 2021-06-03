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

use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Publication BODACC test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class PublicationBodaccTest extends AbstractTestCase {

    /**
     * Tests the setBodacc() method.
     *
     * @return void
     */
    public function testSetBodacc(): void {

        $obj = new PublicationBodacc();

        $obj->setBodacc("bodacc");
        $this->assertEquals("bodacc", $obj->getBodacc());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate(): void {

        $obj = new PublicationBodacc();

        $obj->setDate("date");
        $this->assertEquals("date", $obj->getDate());
    }

    /**
     * Tests the setNumeroAnnonce() method.
     *
     * @return void
     */
    public function testSetNumeroAnnonce(): void {

        $obj = new PublicationBodacc();

        $obj->setNumeroAnnonce("numeroAnnonce");
        $this->assertEquals("numeroAnnonce", $obj->getNumeroAnnonce());
    }

    /**
     * Tests the setNumeroParution() method.
     *
     * @return void
     */
    public function testSetNumeroParution(): void {

        $obj = new PublicationBodacc();

        $obj->setNumeroParution("numeroParution");
        $this->assertEquals("numeroParution", $obj->getNumeroParution());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PublicationBodacc();

        $this->assertNull($obj->getType());

        $this->assertNull($obj->getBodacc());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getNumeroAnnonce());
        $this->assertNull($obj->getNumeroParution());
    }
}
