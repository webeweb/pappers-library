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

use WBW\Library\Pappers\Model\Finance;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Finance test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class FinanceTest extends AbstractTestCase {

    /**
     * Test setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Finance();

        $obj->setAnnee(1);
        $this->assertEquals(1, $obj->getAnnee());
    }

    /**
     * Test setDureeExercice()
     *
     * @return void
     */
    public function testSetDureeExercice(): void {

        $obj = new Finance();

        $obj->setDureeExercice(1);
        $this->assertEquals(1, $obj->getDureeExercice());
    }

    /**
     * Test setEffectif()
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new Finance();

        $obj->setEffectif(1);
        $this->assertEquals(1, $obj->getEffectif());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Finance();

        $this->assertNull($obj->getChiffreAffaires());
        $this->assertNull($obj->getDateClotureExercice());
        $this->assertNull($obj->getResultat());

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getEffectif());
    }
}
