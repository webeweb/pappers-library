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
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestStringObjetSocialTrait;

/**
 * String objet social trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class StringObjetSocialTraitTest extends AbstractTestCase {

    /**
     * Tests the setObjetSocial() method().
     *
     * @return void
     */
    public function testSetObjetSocial(): void {

        $obj = new TestStringObjetSocialTrait();

        $obj->setObjetSocial("objetSocial");
        $this->assertEquals("objetSocial", $obj->getObjetSocial());
    }
}
