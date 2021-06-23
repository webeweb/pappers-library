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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestFloatPourcentagePleineProprieteTrait;

/**
 * Float pourcentage pleine propriété trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class FloatPourcentagePleineProprieteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPourcentagePleinePropriete() method().
     *
     * @return void
     */
    public function testSetPourcentagePleinePropriete(): void {

        $obj = new TestFloatPourcentagePleineProprieteTrait();

        $obj->setPourcentagePleinePropriete(0.1);
        $this->assertEquals(0.1, $obj->getPourcentagePleinePropriete());
    }
}