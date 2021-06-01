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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Model
 */
class FinanceTest extends AbstractTestCase {

    /**
     * Tests the setAnnee() method.
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Finance();

        $obj->setAnnee(1);
        $this->assertEquals(1, $obj->getAnnee());
    }

    /**
     * Tests the setChiffreAffaires() method.
     *
     * @return void
     */
    public function testSetChiffreAffaires(): void {

        $obj = new Finance();

        $obj->setChiffreAffaires(1);
        $this->assertEquals(1, $obj->getChiffreAffaires());
    }

    /**
     * Tests the setDureeExercice() method.
     *
     * @return void
     */
    public function testSetDureeExercice(): void {

        $obj = new Finance();

        $obj->setDureeExercice(1);
        $this->assertEquals(1, $obj->getDureeExercice());
    }

    /**
     * Tests the setEffectif() method.
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new Finance();

        $obj->setEffectif(1);
        $this->assertEquals(1, $obj->getEffectif());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new Finance();

        $obj->setResultat(1);
        $this->assertEquals(1, $obj->getResultat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Finance();

        $this->assertNull($obj->getDateClotureExercice());

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getChiffreAffaires());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getResultat());
    }
}
