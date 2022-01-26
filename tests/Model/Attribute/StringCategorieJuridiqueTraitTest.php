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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringCategorieJuridiqueTrait;

/**
 * String catégorie juridique trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringCategorieJuridiqueTraitTest extends AbstractTestCase {

    /**
     * Tests the setCategorieJuridique() method().
     *
     * @return void
     */
    public function testSetCategorieJuridique(): void {

        $obj = new TestStringCategorieJuridiqueTrait();

        $obj->setCategorieJuridique("categorieJuridique");
        $this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
    }
}
