<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Floats;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Floats\TestFloatPourcentagePleineProprieteTrait;

/**
 * Float pourcentage pleine propriété trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Floats
 */
class FloatPourcentagePleineProprieteTraitTest extends AbstractTestCase {

    /**
     * Test setPourcentagePleinePropriete() method().
     *
     * @return void
     */
    public function testSetPourcentagePleinePropriete(): void {

        $obj = new TestFloatPourcentagePleineProprieteTrait();

        $obj->setPourcentagePleinePropriete(0.1);
        $this->assertEquals(0.1, $obj->getPourcentagePleinePropriete());
    }
}
