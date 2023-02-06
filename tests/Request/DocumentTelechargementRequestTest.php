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

use WBW\Library\Pappers\Request\AbstractRequest;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Document téléchargement request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class DocumentTelechargementRequestTest extends AbstractTestCase {

    /**
     * Tests deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new DocumentTelechargementRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(DocumentTelechargementResponse::class, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */

    public function test__construct(): void {

        $this->assertEquals("/document/telechargement", DocumentTelechargementRequest::RESOURCES_PATH);

        $obj = new DocumentTelechargementRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertNull($obj->getToken());

        $this->assertEquals(DocumentTelechargementRequest::RESOURCES_PATH, $obj->getResourcePath());
    }
}
