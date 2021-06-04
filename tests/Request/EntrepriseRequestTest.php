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

use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Entreprise request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class EntrepriseRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/entreprise", EntrepriseRequest::RESOURCES_PATH);

        $obj = new EntrepriseRequest();

        $this->assertEquals(EntrepriseRequest::RESOURCES_PATH, $obj->getResourcesPath());

        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());

        $this->assertNull($obj->getFormatPublicationsBodacc());
    }
}