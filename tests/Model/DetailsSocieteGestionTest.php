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

use WBW\Library\Pappers\Model\DetailsSocieteGestion;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Détails société gestion test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DetailsSocieteGestionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailsSocieteGestion();

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getGreffe());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getVille());
    }
}
