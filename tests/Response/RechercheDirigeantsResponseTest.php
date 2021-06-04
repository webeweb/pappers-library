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

use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche dirigeants response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Response
 */
class RechercheDirigeantsResponseTest extends AbstractTestCase {

    /**
     * Tests the addResultat() method.
     *
     * @return void
     */
    public function testAddResultat(): void {

        // Set a Résultat mock.
        $resultat = new Representant();

        $obj = new RechercheDirigeantsResponse();

        $obj->addResultat($resultat);
        $this->assertSame($resultat, $obj->getResultats()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RechercheDirigeantsResponse();

        $this->assertEquals([], $obj->getResultats());
    }
}