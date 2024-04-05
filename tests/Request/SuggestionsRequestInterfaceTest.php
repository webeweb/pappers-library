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

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Request\SuggestionsRequestInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Suggestions request interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Request
 */
class SuggestionsRequestInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("denomination", SuggestionsRequestInterface::CIBLE_DENOMINATION);
        $this->assertEquals("nom_complet", SuggestionsRequestInterface::CIBLE_NOM_COMPLET);
        $this->assertEquals("nom_entreprise", SuggestionsRequestInterface::CIBLE_NOM_ENTREPRISE);
        $this->assertEquals("representant", SuggestionsRequestInterface::CIBLE_REPRESENTANT);
        $this->assertEquals("siren", SuggestionsRequestInterface::CIBLE_SIREN);
        $this->assertEquals("siret", SuggestionsRequestInterface::CIBLE_SIRET);
    }
}
