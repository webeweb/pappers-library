<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Response;

use WBW\Library\Pappers\Model\Document;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\RechercheDocumentsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche documents response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class RechercheDocumentsResponseTest extends AbstractTestCase {

    /**
     * Test addResultat()
     *
     * @return void
     */
    public function testAddResultat(): void {

        // Set a Document mock.
        $arg = new Document();

        $obj = new RechercheDocumentsResponse();

        $obj->addResultat($arg);
        $this->assertSame($arg, $obj->getResultats()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RechercheDocumentsResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertEquals([], $obj->getResultats());
    }
}
