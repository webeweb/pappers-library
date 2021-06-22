<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model\Attribute;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringFormeJuridiqueTrait;

/**
 * String forme juridique trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringFormeJuridiqueTraitTest extends AbstractTestCase {

    /**
     * Tests the setFormeJuridique() method().
     *
     * @return void
     */
    public function testSetFormeJuridique(): void {

        $obj = new TestStringFormeJuridiqueTrait();

        $obj->setFormeJuridique("formeJuridique");
        $this->assertEquals("formeJuridique", $obj->getFormeJuridique());
    }
}