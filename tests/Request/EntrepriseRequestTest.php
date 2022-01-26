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
     * Tests the setFormatPublicationsBodacc() method.
     *
     * @return void
     */
    public function testSetFormatPublicationsBodacc(): void {

        $obj = new EntrepriseRequest();

        $obj->setFormatPublicationsBodacc(EntrepriseRequest::FORMAT_PUBLICATIONS_BODACC_OBJET);
        $this->assertEquals(EntrepriseRequest::FORMAT_PUBLICATIONS_BODACC_OBJET, $obj->getFormatPublicationsBodacc());
    }

    /**
     * Tests the setMarques() method.
     *
     * @return void
     */
    public function testSetMarques(): void {

        $obj = new EntrepriseRequest();

        $obj->setMarques(true);
        $this->assertTrue($obj->getMarques());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/entreprise", EntrepriseRequest::RESOURCES_PATH);

        $obj = new EntrepriseRequest();

        $this->assertEquals(EntrepriseRequest::RESOURCES_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());

        $this->assertNull($obj->getFormatPublicationsBodacc());
        $this->assertNull($obj->getMarques());
    }
}
