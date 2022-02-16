<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\ProcedureCollectiveInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Procédure collective interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class ProcedureCollectiveInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("Liquidation judiciaire ou Procédure de sauvegarde", ProcedureCollectiveInterface::TYPE_LIQUIDATION_JUDICIAIRE);
        $this->assertEquals("Redressement judiciaire", ProcedureCollectiveInterface::TYPE_REDRESSEMENT_JUDICIAIRE);
    }
}
