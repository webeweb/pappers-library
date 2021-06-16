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

use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Suggestions request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class SuggestionsRequestTest extends AbstractTestCase {

    /**
     * Tests the setCibles() method.
     *
     * @return void
     */
    public function testSetCibles(): void {

        $obj = new SuggestionsRequest();

        $obj->setCibles("cibles");
        $this->assertEquals("cibles", $obj->getCibles());
    }

    /**
     * Tests the setLongueur() method.
     *
     * @return void
     */
    public function testSetLongueur(): void {

        $obj = new SuggestionsRequest();

        $obj->setLongueur(1);
        $this->assertEquals(1, $obj->getLongueur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/suggestions", SuggestionsRequest::RESOURCES_PATH);

        $obj = new SuggestionsRequest();

        $this->assertNull($obj->getQ());

        $this->assertEquals(SuggestionsRequest::RESOURCES_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getCibles());
        $this->assertNull($obj->getLongueur());
    }
}