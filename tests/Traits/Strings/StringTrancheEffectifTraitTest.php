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

namespace WBW\Library\Pappers\Tests\Traits\Strings;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringTrancheEffectifTrait;

/**
 * String tranche effectif trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringTrancheEffectifTraitTest extends AbstractTestCase {

    /**
     * Test setTrancheEffectif() method().
     *
     * @return void
     */
    public function testSetTrancheEffectif(): void {

        $obj = new TestStringTrancheEffectifTrait();

        $obj->setTrancheEffectif("trancheEffectif");
        $this->assertEquals("trancheEffectif", $obj->getTrancheEffectif());
    }
}
