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

namespace WBW\Library\Pappers\Tests\Response;

use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche dirigeants response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class RechercheDirigeantsResponseTest extends AbstractTestCase {

    /**
     * Test addResultat()
     *
     * @return void
     */
    public function testAddResultat(): void {

        // Set a Représentant mock.
        $arg = new Representant();

        $obj = new RechercheDirigeantsResponse();

        $obj->addResultat($arg);
        $this->assertSame($arg, $obj->getResultats()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RechercheDirigeantsResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertEquals([], $obj->getResultats());
    }
}
