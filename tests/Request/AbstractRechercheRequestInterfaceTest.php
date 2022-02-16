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

use WBW\Library\Pappers\Request\AbstractRechercheRequestInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Abstract recherche request interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class AbstractRechercheRequestInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("approximative", AbstractRechercheRequestInterface::PRECISION_APPROXIMATIVE);
        $this->assertEquals("exacte", AbstractRechercheRequestInterface::PRECISION_EXACTE);
        $this->assertEquals("standard", AbstractRechercheRequestInterface::PRECISION_STANDARD);

        $this->assertEquals("inscrit", AbstractRechercheRequestInterface::STATUT_RCS_INSCRIT);
        $this->assertEquals("non inscrit", AbstractRechercheRequestInterface::STATUT_RCS_NON_INSCRIT);
        $this->assertEquals("radie", AbstractRechercheRequestInterface::STATUT_RCS_RADIE);
    }
}
