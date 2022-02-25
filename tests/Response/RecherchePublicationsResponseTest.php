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

use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Response\RecherchePublicationsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche publications response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class RecherchePublicationsResponseTest extends AbstractTestCase {

    /**
     * Tests addResultat()
     *
     * @return void
     */
    public function testAddResultat(): void {

        // Set a Publication BODACC mock.
        $arg = new PublicationBodacc();

        $obj = new RecherchePublicationsResponse();

        $obj->addResultat($arg);
        $this->assertSame($arg, $obj->getResultats()[0]);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RecherchePublicationsResponse();

        $this->assertEquals([], $obj->getResultats());
    }
}
