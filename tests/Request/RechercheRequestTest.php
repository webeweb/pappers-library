<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheRequestTest extends AbstractTestCase {

    /**
     * Tests the setBases() method.
     *
     * @return void
     */
    public function testSetBases(): void {

        $obj = new RechercheRequest();

        $obj->setBases("bases");
        $this->assertEquals("bases", $obj->getBases());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/recherche", RechercheRequest::RESOURCES_PATH);

        $obj = new RechercheRequest();

        $this->assertEquals(RechercheRequest::RESOURCES_PATH, $obj->getResourcesPath());

        $this->assertNull($obj->getBases());
    }
}