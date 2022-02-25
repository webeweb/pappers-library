<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\ConventionCollective;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Convention collective test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class ConventionCollectiveTest extends AbstractTestCase {

    /**
     * Tests setConfirmee()
     *
     * @return void
     */
    public function testSetConfirmee(): void {

        $obj = new ConventionCollective();

        $obj->setConfirmee(true);
        $this->assertTrue($obj->getConfirmee());
    }

    /**
     * Tests setIdcc()
     *
     * @return void
     */
    public function testSetIdcc(): void {

        $obj = new ConventionCollective();

        $obj->setIdcc(1);
        $this->assertEquals(1, $obj->getIdcc());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionCollective();

        $this->assertNull($obj->getNom());

        $this->assertNull($obj->getConfirmee());
        $this->assertNull($obj->getIdcc());
    }
}
