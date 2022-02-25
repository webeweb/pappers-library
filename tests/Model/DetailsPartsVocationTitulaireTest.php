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

use WBW\Library\Pappers\Model\DetailsDirects;
use WBW\Library\Pappers\Model\DetailsIndirects;
use WBW\Library\Pappers\Model\DetailsPartsVocationTitulaire;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Détails indirects test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DetailsPartsVocationTitulaireTest extends AbstractTestCase {

    /**
     * Tests setDetailsDirectes()
     *
     * @return void
     */
    public function testSetDetailsDirectes(): void {

        // Set a Details directes mock.
        $detailsDirectes = new DetailsDirects();

        $obj = new DetailsPartsVocationTitulaire();

        $obj->setDetailsDirectes($detailsDirectes);
        $this->assertSame($detailsDirectes, $obj->getDetailsDirectes());
    }

    /**
     * Tests setDetailsIndirectes()
     *
     * @return void
     */
    public function testSetDetailsIndirectes(): void {

        // Set a Details indirectes mock.
        $detailsIndirectes = new DetailsIndirects();

        $obj = new DetailsPartsVocationTitulaire();

        $obj->setDetailsIndirectes($detailsIndirectes);
        $this->assertSame($detailsIndirectes, $obj->getDetailsIndirectes());
    }

    /**
     * Tests setPourcentageDirectes()
     *
     * @return void
     */
    public function testSetPourcentageDirectes(): void {

        $obj = new DetailsPartsVocationTitulaire();

        $obj->setPourcentageDirectes(1);
        $this->assertEquals(1, $obj->getPourcentageDirectes());
    }

    /**
     * Tests setPourcentageIndirectes()
     *
     * @return void
     */
    public function testSetPourcentageIndirectes(): void {

        $obj = new DetailsPartsVocationTitulaire();

        $obj->setPourcentageIndirectes(1);
        $this->assertEquals(1, $obj->getPourcentageIndirectes());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DetailsPartsVocationTitulaire();

        $this->assertNull($obj->getDetailsDirectes());
        $this->assertNull($obj->getDetailsIndirectes());
        $this->assertNull($obj->getPourcentageDirectes());
        $this->assertNull($obj->getPourcentageIndirectes());
    }
}
