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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringDateClotureExerciceTrait;

/**
 * String date clôture exercice trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringDateClotureExerciceTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateClotureExercice() method().
     *
     * @return void
     */
    public function testSetDateClotureExercice(): void {

        $obj = new TestStringDateClotureExerciceTrait();

        $obj->setDateClotureExercice("dateClotureExercice");
        $this->assertEquals("dateClotureExercice", $obj->getDateClotureExercice());
    }
}
