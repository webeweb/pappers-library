<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Response;

use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Response\SuggestionsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Suggestions response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Response
 */
class SuggestionsResponseTest extends AbstractTestCase {

    /**
     * Tests the addResultatDenomination() method.
     *
     * @return void
     */
    public function testAddResultatDenomination(): void {

        // Set an Entreprise mock.
        $arg = new Entreprise();

        $obj = new SuggestionsResponse();

        $obj->addResultatDenomination($arg);
        $this->assertSame($arg, $obj->getResultatsDenomination()[0]);
    }

    /**
     * Tests the addResultatNomComplet() method.
     *
     * @return void
     */
    public function testAddResultatNomComplet(): void {

        // Set a Résultat mock.
        $resultat = new Entreprise();

        $obj = new SuggestionsResponse();

        $obj->addResultatNomComplet($resultat);
        $this->assertSame($resultat, $obj->getResultatsNomComplet()[0]);
    }

    /**
     * Tests the addResultatNomEntreprise() method.
     *
     * @return void
     */
    public function testAddResultatNomEntreprise(): void {

        // Set a Résultat mock.
        $resultat = new Entreprise();

        $obj = new SuggestionsResponse();

        $obj->addResultatNomEntreprise($resultat);
        $this->assertSame($resultat, $obj->getResultatsNomEntreprise()[0]);
    }

    /**
     * Tests the addResultatRepresentant() method.
     *
     * @return void
     */
    public function testAddResultatRepresentant(): void {

        // Set a Résultat mock.
        $resultat = new Representant();

        $obj = new SuggestionsResponse();

        $obj->addResultatRepresentant($resultat);
        $this->assertSame($resultat, $obj->getResultatsRepresentant()[0]);
    }

    /**
     * Tests the addResultatSiren() method.
     *
     * @return void
     */
    public function testAddResultatSiren(): void {

        // Set a Résultat mock.
        $resultat = new Entreprise();

        $obj = new SuggestionsResponse();

        $obj->addResultatSiren($resultat);
        $this->assertSame($resultat, $obj->getResultatsSiren()[0]);
    }

    /**
     * Tests the addResultatSiret() method.
     *
     * @return void
     */
    public function testAddResultatSiret(): void {

        // Set a Résultat mock.
        $resultat = new Entreprise();

        $obj = new SuggestionsResponse();

        $obj->addResultatSiret($resultat);
        $this->assertSame($resultat, $obj->getResultatsSiret()[0]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuggestionsResponse();

        $this->assertEquals([], $obj->getResultatsDenomination());
        $this->assertEquals([], $obj->getResultatsNomComplet());
        $this->assertEquals([], $obj->getResultatsNomEntreprise());
        $this->assertEquals([], $obj->getResultatsRepresentant());
        $this->assertEquals([], $obj->getResultatsSiren());
        $this->assertEquals([], $obj->getResultatsSiret());
    }
}