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

use WBW\Library\Pappers\Request\EntrepriseRequestInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Entreprise request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class EntrepriseRequestInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("objet", EntrepriseRequestInterface::FORMAT_PUBLICATIONS_BODACC_OBJET);
        $this->assertEquals("texte", EntrepriseRequestInterface::FORMAT_PUBLICATIONS_BODACC_TEXTE);
    }
}
