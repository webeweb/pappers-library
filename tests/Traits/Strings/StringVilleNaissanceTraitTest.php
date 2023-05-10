<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringVilleNaissanceTrait;

/**
 * String ville naissance trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringVilleNaissanceTraitTest extends AbstractTestCase {

    /**
     * Test setVilleNaissance() method().
     *
     * @return void
     */
    public function testSetVilleNaissance(): void {

        $obj = new TestStringVilleNaissanceTrait();

        $obj->setVilleNaissance("villeNaissance");
        $this->assertEquals("villeNaissance", $obj->getVilleNaissance());
    }
}
