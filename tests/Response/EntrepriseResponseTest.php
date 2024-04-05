<?php

declare(strict_types = 1);

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
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\EntrepriseResponse;

/**
 * Entreprise response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class EntrepriseResponseTest extends TestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EntrepriseResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertNull($obj->getEntreprise());
    }
}
