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

use WBW\Library\Pappers\Model\Acte;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Acte test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class ActeTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Acte();

        $this->assertNull($obj->getDateActe());
        $this->assertNull($obj->getDateActeFormatee());
        $this->assertNull($obj->getDecision());
        $this->assertNull($obj->getType());
    }
}
