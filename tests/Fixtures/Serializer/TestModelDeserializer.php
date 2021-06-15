<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Fixtures\Serializer;

use WBW\Library\Pappers\Model\Acte;
use WBW\Library\Pappers\Model\BeneficiaireEffectif;
use WBW\Library\Pappers\Model\Compte;
use WBW\Library\Pappers\Model\ConventionCollective;
use WBW\Library\Pappers\Model\DepotActe;
use WBW\Library\Pappers\Model\DetailsDirects;
use WBW\Library\Pappers\Model\DetailsIndirects;
use WBW\Library\Pappers\Model\DetailsIndivision;
use WBW\Library\Pappers\Model\DetailsPartsVocationTitulaire;
use WBW\Library\Pappers\Model\DetailsPersonneMorale;
use WBW\Library\Pappers\Model\DetailsSocieteGestion;
use WBW\Library\Pappers\Model\Etablissement;
use WBW\Library\Pappers\Model\ExtraitImmatriculation;
use WBW\Library\Pappers\Model\Finance;
use WBW\Library\Pappers\Model\ProcedureCollective;
use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Model\Statuts;
use WBW\Library\Pappers\Serializer\ModelDeserializer;

/**
 * Test model deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Tests\Fixtures\Serializer
 */
class TestModelDeserializer extends ModelDeserializer {

    /**
     * {@inheritDoc}
     */
    public static function deserializeActe(array $data): Acte {
        return parent::deserializeActe($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeBeneficiaireEffectif(array $data): BeneficiaireEffectif {
        return parent::deserializeBeneficiaireEffectif($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeCompte(array $data): Compte {
        return parent::deserializeCompte($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeConventionCollective(array $data): ConventionCollective {
        return parent::deserializeConventionCollective($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDepotActe(array $data): DepotActe {
        return parent::deserializeDepotActe($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsDirects(array $data): DetailsDirects {
        return parent::deserializeDetailsDirects($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsIndirects(array $data): DetailsIndirects {
        return parent::deserializeDetailsIndirects($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsIndivision(array $data): DetailsIndivision {
        return parent::deserializeDetailsIndivision($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsPartsVocationTitulaire(array $data): DetailsPartsVocationTitulaire {
        return parent::deserializeDetailsPartsVocationTitulaire($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsPersonneMorale(array $data): DetailsPersonneMorale {
        return parent::deserializeDetailsPersonneMorale($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeDetailsSocieteGestion(array $data): DetailsSocieteGestion {
        return parent::deserializeDetailsSocieteGestion($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeEtablissement(array $data): Etablissement {
        return parent::deserializeEtablissement($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeExtraitImmatriculation(array $data): ExtraitImmatriculation {
        return parent::deserializeExtraitImmatriculation($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeFinance(array $data): Finance {
        return parent::deserializeFinance($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeProcedureCollective(array $data): ProcedureCollective {
        return parent::deserializeProcedureCollective($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializePublicationBodacc(array $data): PublicationBodacc {
        return parent::deserializePublicationBodacc($data);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeStatuts(array $data): Statuts {
        return parent::deserializeStatuts($data);
    }

}