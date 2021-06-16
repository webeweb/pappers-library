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

use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche documents request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RechercheDocumentsRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/recherche-documents", RechercheDocumentsRequest::RESOURCES_PATH);

        $obj = new RechercheDocumentsRequest();

        $this->assertEquals(RechercheDocumentsRequest::RESOURCES_PATH, $obj->getResourcePath());
    }
}