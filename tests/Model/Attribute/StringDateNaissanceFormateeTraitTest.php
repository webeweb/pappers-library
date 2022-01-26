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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringDateNaissanceFormateeTrait;

/**
 * String date naissance formatée trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringDateNaissanceFormateeTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateNaissanceFormatee() method().
     *
     * @return void
     */
    public function testSetDateNaissanceFormatee(): void {

        $obj = new TestStringDateNaissanceFormateeTrait();

        $obj->setDateNaissanceFormatee("dateNaissanceFormatee");
        $this->assertEquals("dateNaissanceFormatee", $obj->getDateNaissanceFormatee());
    }
}
