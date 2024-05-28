<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\Statuts;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Statuts test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class StatutsTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Statuts();

        $this->assertNull($obj->getDateActe());
        $this->assertNull($obj->getDateActeFormatee());
        $this->assertNull($obj->getDateDepot());
        $this->assertNull($obj->getDateDepotFormatee());
        $this->assertNull($obj->getDecision());
        $this->assertNull($obj->getDisponible());
        $this->assertNull($obj->getNomFichierPdf());
        $this->assertNull($obj->getToken());
        $this->assertNull($obj->getType());
    }
}
