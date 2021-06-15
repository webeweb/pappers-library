<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Request;

use WBW\Library\Pappers\Tests\AbstractTestCase;
use WBW\Library\Pappers\Tests\Fixtures\Request\TestRechercheRequest;

/**
 * Abstract recherche request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Request
 */
class AbstractRechercheRequestTest extends AbstractTestCase {

    /**
     * Tests the setAgeDirigeantMax() method.
     *
     * @return void
     */
    public function testSetAgeDirigeantMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setAgeDirigeantMax(1);
        $this->assertEquals(1, $obj->getAgeDirigeantMax());
    }

    /**
     * Tests the setAgeDirigeantMin() method.
     *
     * @return void
     */
    public function testSetAgeDirigeantMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setAgeDirigeantMin(1);
        $this->assertEquals(1, $obj->getAgeDirigeantMin());
    }

    /**
     * Tests the setCapitalMax() method.
     *
     * @return void
     */
    public function testSetCapitalMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setCapitalMax(1);
        $this->assertEquals(1, $obj->getCapitalMax());
    }

    /**
     * Tests the setCapitalMin() method.
     *
     * @return void
     */
    public function testSetCapitalMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setCapitalMin(1);
        $this->assertEquals(1, $obj->getCapitalMin());
    }

    /**
     * Tests the setChiffreAffairesMax() method.
     *
     * @return void
     */
    public function testSetChiffreAffairesMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setChiffreAffairesMax(1);
        $this->assertEquals(1, $obj->getChiffreAffairesMax());
    }

    /**
     * Tests the setChiffreAffairesMin() method.
     *
     * @return void
     */
    public function testSetChiffreAffairesMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setChiffreAffairesMin(1);
        $this->assertEquals(1, $obj->getChiffreAffairesMin());
    }

    /**
     * Tests the setConventionCollective() method.
     *
     * @return void
     */
    public function testSetConventionCollective(): void {

        $obj = new TestRechercheRequest();

        $obj->setConventionCollective("conventionCollective");
        $this->assertEquals("conventionCollective", $obj->getConventionCollective());
    }

    /**
     * Tests the setDateCreationMax() method.
     *
     * @return void
     */
    public function testSetDateCreationMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateCreationMax("dateCReationMax");
        $this->assertEquals("dateCReationMax", $obj->getDateCreationMax());
    }

    /**
     * Tests the setDateCreationMin() method.
     *
     * @return void
     */
    public function testSetDateCreationMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateCreationMin("dateCreationMin");
        $this->assertEquals("dateCreationMin", $obj->getDateCreationMin());
    }

    /**
     * Tests the setDateDepotDocumentMax() method.
     *
     * @return void
     */
    public function testSetDateDepotDocumentMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateDepotDocumentMax("dateDepotDocumentMax");
        $this->assertEquals("dateDepotDocumentMax", $obj->getDateDepotDocumentMax());
    }

    /**
     * Tests the setDateDepotDocumentMin() method.
     *
     * @return void
     */
    public function testSetDateDepotDocumentMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateDepotDocumentMin("dateDepotDocumentMin");
        $this->assertEquals("dateDepotDocumentMin", $obj->getDateDepotDocumentMin());
    }

    /**
     * Tests the setDateNaissanceDirigeantMax() method.
     *
     * @return void
     */
    public function testSetDateNaissanceDirigeantMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateNaissanceDirigeantMax("dateNaissanceDirigeantMax");
        $this->assertEquals("dateNaissanceDirigeantMax", $obj->getDateNaissanceDirigeantMax());
    }

    /**
     * Tests the setDateNaissanceDirigeantMin() method.
     *
     * @return void
     */
    public function testSetDateNaissanceDirigeantMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateNaissanceDirigeantMin("dateNaissanceDirigeantMin");
        $this->assertEquals("dateNaissanceDirigeantMin", $obj->getDateNaissanceDirigeantMin());
    }

    /**
     * Tests the setDatePublicationMax() method.
     *
     * @return void
     */
    public function testSetDatePublicationMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setDatePublicationMax("datePublicationMax");
        $this->assertEquals("datePublicationMax", $obj->getDatePublicationMax());
    }

    /**
     * Tests the setDatePublicationMin() method.
     *
     * @return void
     */
    public function testSetDatePublicationMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setDatePublicationMin("datePublicationMin");
        $this->assertEquals("datePublicationMin", $obj->getDatePublicationMin());
    }

    /**
     * Tests the setDateRadiationRcsMax() method.
     *
     * @return void
     */
    public function testSetDateRadiationRcsMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateRadiationRcsMax("dateRadiationRcsMax");
        $this->assertEquals("dateRadiationRcsMax", $obj->getDateRadiationRcsMax());
    }

    /**
     * Tests the set() method.
     *
     * @return void
     */
    public function testSetDateRadiationRcsMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setDateRadiationRcsMin("dateRadiationRcsMin");
        $this->assertEquals("dateRadiationRcsMin", $obj->getDateRadiationRcsMin());
    }

    /**
     * Tests the setDepartement() method.
     *
     * @return void
     */
    public function testSetDepartement(): void {

        $obj = new TestRechercheRequest();

        $obj->setDepartement("departement");
        $this->assertEquals("departement", $obj->getDepartement());
    }

    /**
     * Tests the setParPage() method.
     *
     * @return void
     */
    public function testSetParPage(): void {

        $obj = new TestRechercheRequest();

        $obj->setParPage(1);
        $this->assertEquals(1, $obj->getParPage());
    }

    /**
     * Tests the setPrecision() method.
     *
     * @return void
     */
    public function testSetPrecision(): void {

        $obj = new TestRechercheRequest();

        $obj->setPrecision("precision");
        $this->assertEquals("precision", $obj->getPrecision());
    }

    /**
     * Tests the setRegion() method.
     *
     * @return void
     */
    public function testSetRegion(): void {

        $obj = new TestRechercheRequest();

        $obj->setRegion("region");
        $this->assertEquals("region", $obj->getRegion());
    }

    /**
     * Tests the setResultatMax() method.
     *
     * @return void
     */
    public function testSetResultatMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setResultatMax(1);
        $this->assertEquals(1, $obj->getResultatMax());
    }

    /**
     * Tests the setResultatMin() method.
     *
     * @return void
     */
    public function testSetResultatMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setResultatMin(1);
        $this->assertEquals(1, $obj->getResultatMin());
    }

    /**
     * Tests the setTrancheEffectifMax() method.
     *
     * @return void
     */
    public function testSetTrancheEffectifMax(): void {

        $obj = new TestRechercheRequest();

        $obj->setTrancheEffectifMax(1);
        $this->assertEquals(1, $obj->getTrancheEffectifMax());
    }

    /**
     * Tests the setTrancheEffectifMin() method.
     *
     * @return void
     */
    public function testSetTrancheEffectifMin(): void {

        $obj = new TestRechercheRequest();

        $obj->setTrancheEffectifMin(1);
        $this->assertEquals(1, $obj->getTrancheEffectifMin());
    }

    /**
     * Tests the setTypePublication() method.
     *
     * @return void
     */
    public function testSetTypePublication(): void {

        $obj = new TestRechercheRequest();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("d-m-Y", TestRechercheRequest::DATE_FORMAT);

        $obj = new TestRechercheRequest();

        $this->assertNull($obj->getEntrepriseCessee());
        $this->assertNull($obj->getPage());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getObjetSocial());
        $this->assertNull($obj->getQ());
        $this->assertNull($obj->getStatutRcs());

        $this->assertNull($obj->getAgeDirigeantMax());
        $this->assertNull($obj->getAgeDirigeantMin());
        $this->assertNull($obj->getCapitalMax());
        $this->assertNull($obj->getCapitalMin());
        $this->assertNull($obj->getChiffreAffairesMax());
        $this->assertNull($obj->getChiffreAffairesMin());
        $this->assertNull($obj->getDateCreationMax());
        $this->assertNull($obj->getDateCreationMin());
        $this->assertNull($obj->getDateDepotDocumentMax());
        $this->assertNull($obj->getDateDepotDocumentMin());
        $this->assertNull($obj->getDateNaissanceDirigeantMax());
        $this->assertNull($obj->getDateNaissanceDirigeantMin());
        $this->assertNull($obj->getDatePublicationMax());
        $this->assertNull($obj->getDatePublicationMin());
        $this->assertNull($obj->getDateRadiationRcsMax());
        $this->assertNull($obj->getDateRadiationRcsMin());
        $this->assertNull($obj->getDepartement());
        $this->assertNull($obj->getParPage());
        $this->assertNull($obj->getPrecision());
        $this->assertNull($obj->getRegion());
        $this->assertNull($obj->getResultatMax());
        $this->assertNull($obj->getResultatMin());
        $this->assertNull($obj->getTrancheEffectifMax());
        $this->assertNull($obj->getTrancheEffectifMin());
        $this->assertNull($obj->getTypePublication());
    }
}
