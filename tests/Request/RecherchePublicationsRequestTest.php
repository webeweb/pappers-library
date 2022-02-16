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

use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Recherche publications request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class RecherchePublicationsRequestTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/recherche-publications", RecherchePublicationsRequest::RESOURCES_PATH);

        $obj = new RecherchePublicationsRequest();

        $this->assertEquals(RecherchePublicationsRequest::RESOURCES_PATH, $obj->getResourcePath());
    }
}
