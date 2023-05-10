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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringCategorieJuridiqueTrait;

/**
 * String catégorie juridique trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringCategorieJuridiqueTraitTest extends AbstractTestCase {

    /**
     * Test setCategorieJuridique() method().
     *
     * @return void
     */
    public function testSetCategorieJuridique(): void {

        $obj = new TestStringCategorieJuridiqueTrait();

        $obj->setCategorieJuridique("categorieJuridique");
        $this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
    }
}
