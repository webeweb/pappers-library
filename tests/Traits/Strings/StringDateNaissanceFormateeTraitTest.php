<?php

declare(strict_types = 1);

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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringDateNaissanceFormateeTrait;

/**
 * String date naissance formatée trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringDateNaissanceFormateeTraitTest extends AbstractTestCase {

    /**
     * Test setDateNaissanceFormatee() method().
     *
     * @return void
     */
    public function testSetDateNaissanceFormatee(): void {

        $obj = new TestStringDateNaissanceFormateeTrait();

        $obj->setDateNaissanceFormatee("dateNaissanceFormatee");
        $this->assertEquals("dateNaissanceFormatee", $obj->getDateNaissanceFormatee());
    }
}
