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
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\SuggestionsResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Suggestions response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Response
 */
class SuggestionsResponseTest extends AbstractTestCase {

    /**
     * Tests addResultatDenomination()
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
     * Tests addResultatNomComplet()
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
     * Tests addResultatNomEntreprise()
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
     * Tests addResultatRepresentant()
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
     * Tests addResultatSiren()
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
     * Tests addResultatSiret()
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
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuggestionsResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertEquals([], $obj->getResultatsDenomination());
        $this->assertEquals([], $obj->getResultatsNomComplet());
        $this->assertEquals([], $obj->getResultatsNomEntreprise());
        $this->assertEquals([], $obj->getResultatsRepresentant());
        $this->assertEquals([], $obj->getResultatsSiren());
        $this->assertEquals([], $obj->getResultatsSiret());
    }
}
