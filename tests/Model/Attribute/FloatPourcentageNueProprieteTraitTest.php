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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestFloatPourcentageNueProprieteTrait;

/**
 * Float pourcentage nue propriété trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class FloatPourcentageNueProprieteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPourcentageNuePropriete() method().
     *
     * @return void
     */
    public function testSetPourcentageNuePropriete(): void {

        $obj = new TestFloatPourcentageNueProprieteTrait();

        $obj->setPourcentageNuePropriete(0.1);
        $this->assertEquals(0.1, $obj->getPourcentageNuePropriete());
    }
}