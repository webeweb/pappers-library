<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Traits\Objects;

use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Traits\Objects\TestEntrepriseEntrepriseTrait;

/**
 * Entreprise entreprise trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Traits\Objects
 */
class EntrepriseEntrepriseTraitTest extends AbstractTestCase {

    /**
     * Tests setEntreprise()
     *
     * @return void
     */
    public function testSetEntreprise(): void {

        // Set an Entreprise mock.
        $entreprise = new Entreprise();

        $obj = new TestEntrepriseEntrepriseTrait();

        $obj->setEntreprise($entreprise);
        $this->assertSame($entreprise, $obj->getEntreprise());
    }
}
