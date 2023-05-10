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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringNomEntrepriseTrait;

/**
 * String nom entreprise trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringNomEntrepriseTraitTest extends AbstractTestCase {

    /**
     * Test setNomEntreprise() method().
     *
     * @return void
     */
    public function testSetNomEntreprise(): void {

        $obj = new TestStringNomEntrepriseTrait();

        $obj->setNomEntreprise("nomEntreprise");
        $this->assertEquals("nomEntreprise", $obj->getNomEntreprise());
    }
}
