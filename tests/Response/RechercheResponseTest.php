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

use PHPUnit\Framework\TestCase;
use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Response\RechercheResponse;

/**
 * Recherche response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Response
 */
class RechercheResponseTest extends TestCase {

    /**
     * Tests the addResultat() method.
     *
     * @return void
     */
    public function testAddResultat(): void {

        // Set an Entreprise mock.
        $arg = new Entreprise();

        $obj = new RechercheResponse();

        $obj->addResultat($arg);
        $this->assertSame($arg, $obj->getResultats()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RechercheResponse();

        $this->assertEquals([], $obj->getResultats());
    }
}
