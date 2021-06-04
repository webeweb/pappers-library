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

use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Model\Attribute\TestArrayPublicationsBodaccTrait;

/**
 * Array publications BODACC trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model\Attribute
 */
class ArrayPublicationsBodaccTraitTest extends AbstractTestCase {

    /**
     * Tests the addPublicationBodacc() method.
     *
     * @return void
     */
    public function testAddPublicationBodacc(): void {

        // Set a Publication BODACC mock.
        $publicationBodacc = new PublicationBodacc();

        $obj = new TestArrayPublicationsBodaccTrait();

        $obj->addPublicationBodacc($publicationBodacc);
        $this->assertSame($publicationBodacc, $obj->getPublicationsBodacc()[0]);
    }
}