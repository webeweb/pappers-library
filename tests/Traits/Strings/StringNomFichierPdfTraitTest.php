<?php

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
use WBW\Library\Pappers\Tests\Fixtures\Traits\Strings\TestStringNomFichierPdfTrait;

/**
 * String nom fichier PDF trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Strings
 */
class StringNomFichierPdfTraitTest extends AbstractTestCase {

    /**
     * Tests the setNomFichierPdf() method().
     *
     * @return void
     */
    public function testSetNomFichierPdf(): void {

        $obj = new TestStringNomFichierPdfTrait();

        $obj->setNomFichierPdf("nomFichierPdf");
        $this->assertEquals("nomFichierPdf", $obj->getNomFichierPdf());
    }
}
