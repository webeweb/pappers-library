<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Booleans;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Booleans\TestBooleanEntrepriseCesseeTrait;

/**
 * Boolean entreprise cessée trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Booleans
 */
class BooleanEntrepriseCesseeTraitTest extends AbstractTestCase {

    /**
     * Test setEntrepriseCessee() method().
     *
     * @return void
     */
    public function testSetEntrepriseCessee(): void {

        $obj = new TestBooleanEntrepriseCesseeTrait();

        $obj->setEntrepriseCessee(true);
        $this->assertTrue($obj->getEntrepriseCessee());
    }
}
