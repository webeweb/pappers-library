<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Response;

use Throwable;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Document téléchargement response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class DocumentTelechargementResponseTest extends AbstractTestCase {

    /**
     * Test saveAs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSaveAs(): void {

        // Set a filename mock.
        $filename = __DIR__ . "/../../var/cache/DocumentTelechargementResponse.pdf";
        if (true === file_exists($filename)) {
            unlink($filename);
        }

        $obj = new DocumentTelechargementResponse();

        $obj->saveAs($filename);
        $this->assertFileExists($filename);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DocumentTelechargementResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);
    }
}
