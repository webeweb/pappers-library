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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDateClotureExerciceTrait;

/**
 * String date clôture exercice trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDateClotureExerciceTraitTest extends AbstractTestCase {

    /**
     * Test setDateClotureExercice() method().
     *
     * @return void
     */
    public function testSetDateClotureExercice(): void {

        $obj = new TestStringDateClotureExerciceTrait();

        $obj->setDateClotureExercice("dateClotureExercice");
        $this->assertEquals("dateClotureExercice", $obj->getDateClotureExercice());
    }
}
