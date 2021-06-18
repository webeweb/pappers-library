<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Serializer;

use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\Argument\Helper\StringHelper;
use WBW\Library\Pappers\Request\AbstractRechercheRequest;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Request\SuggestionsRequest;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Serializer
 */
class RequestSerializer {

    /**
     * Serialize an abstract recherche request.
     *
     * @param AbstractRechercheRequest $request The request.
     * @return array Returns the serialized request.
     */
    protected static function serializeAbstractRechercheRequest(AbstractRechercheRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "par_page", $request->getParPage(), [null, 20]);
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "precision", $request->getPrecision(), [null, AbstractRechercheRequest::PRECISION_STANDARD]);
        ArrayHelper::set($result, "q", $request->getQ(), [null]);
        ArrayHelper::set($result, "code_naf", $request->getCodeNaf(), [null]);
        ArrayHelper::set($result, "departement", $request->getDepartement(), [null]);
        ArrayHelper::set($result, "region", $request->getRegion(), [null]);
        ArrayHelper::set($result, "code_postal", $request->getCodePostal(), [null]);
        ArrayHelper::set($result, "convention_collective", $request->getConventionCollective(), [null]);
        ArrayHelper::set($result, "categorie_juridique", $request->getCategorieJuridique(), [null]);
        ArrayHelper::set($result, "entreprise_cessee", $request->getEntrepriseCessee(), [null]);
        ArrayHelper::set($result, "statut_rcs", $request->getStatutRcs(), [null]);
        ArrayHelper::set($result, "objet_social", $request->getObjetSocial(), [null]);
        ArrayHelper::set($result, "date_radiation_rcs_min", $request->getDateRadiationRcsMin(), [null]);
        ArrayHelper::set($result, "date_radiation_rcs_max", $request->getDateRadiationRcsMax(), [null]);
        ArrayHelper::set($result, "capital_min", $request->getCapitalMin(), [null]);
        ArrayHelper::set($result, "capital_max", $request->getCapitalMax(), [null]);
        ArrayHelper::set($result, "chiffre_affaires_min", $request->getChiffreAffairesMin(), [null]);
        ArrayHelper::set($result, "chiffre_affaires_max", $request->getChiffreAffairesMax(), [null]);
        ArrayHelper::set($result, "resultat_min", $request->getResultatMin(), [null]);
        ArrayHelper::set($result, "resultat_max", $request->getResultatMax(), [null]);
        ArrayHelper::set($result, "date_creation_min", $request->getDateCreationMin(), [null]);
        ArrayHelper::set($result, "date_creation_max", $request->getDateCreationMax(), [null]);
        ArrayHelper::set($result, "tranche_effectif_min", $request->getTrancheEffectifMin(), [null]);
        ArrayHelper::set($result, "tranche_effectif_max", $request->getTrancheEffectifMax(), [null]);
        ArrayHelper::set($result, "age_dirigeant_min", $request->getAgeDirigeantMin(), [null]);
        ArrayHelper::set($result, "age_dirigeant_max", $request->getAgeDirigeantMax(), [null]);
        ArrayHelper::set($result, "date_de_naissance_dirigeant_min", $request->getDateNaissanceDirigeantMin(), [null]);
        ArrayHelper::set($result, "date_de_naissance_dirigeant_max", $request->getDateNaissanceDirigeantMax(), [null]);
        ArrayHelper::set($result, "date_depot_document_min", $request->getDateDepotDocumentMin(), [null]);
        ArrayHelper::set($result, "date_depot_document_max", $request->getDateDepotDocumentMax(), [null]);
        ArrayHelper::set($result, "type_publication", $request->getTypePublication(), [null]);
        ArrayHelper::set($result, "date_publication_min", $request->getDatePublicationMin(), [null]);
        ArrayHelper::set($result, "date_publication_max", $request->getDatePublicationMax(), [null]);

        $entrepriseCessee = ArrayHelper::get($result, "entreprise_cessee");
        if (null !== $entrepriseCessee) {
            $result["entreprise_cessee"] = StringHelper::parseBoolean($entrepriseCessee);
        }

        return $result;
    }

    /**
     * Serializes a document téléchargement request.
     *
     * @param DocumentTelechargementRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeDocumentTelechargementRequest(DocumentTelechargementRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "token", $request->getToken(), [null]);

        return $result;
    }

    /**
     * Serializes an entreprise request.
     *
     * @param EntrepriseRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeEntrepriseRequest(EntrepriseRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "siren", $request->getSiren(), [null]);
        ArrayHelper::set($result, "siret", $request->getSiret(), [null]);
        ArrayHelper::set($result, "format_publications_bodacc", $request->getFormatPublicationsBodacc(), [null, EntrepriseRequest::FORMAT_PUBLICATIONS_BODACC_OBJET]);

        return $result;
    }

    /**
     * Serializes a recherche dirigeants request.
     *
     * @param RechercheDirigeantsRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeRechercheDirigeantsRequest(RechercheDirigeantsRequest $request): array {
        return static::serializeAbstractRechercheRequest($request);
    }

    /**
     * Serializes a recherche documents request.
     *
     * @param RechercheDocumentsRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeRechercheDocumentsRequest(RechercheDocumentsRequest $request): array {
        return static::serializeAbstractRechercheRequest($request);
    }

    /**
     * Serializes a recherche publications request.
     *
     * @param RecherchePublicationsRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeRecherchePublicationsRequest(RecherchePublicationsRequest $request): array {
        return static::serializeAbstractRechercheRequest($request);
    }

    /**
     * Serializes a recherche request.
     *
     * @param RechercheRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeRechercheRequest(RechercheRequest $request): array {

        $result = static::serializeAbstractRechercheRequest($request);

        ArrayHelper::set($result, "bases", $request->getBases(), [null, RechercheRequest::BASE_ENTREPRISES]);

        return $result;
    }

    /**
     * Serializes a suggestions request.
     *
     * @param SuggestionsRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeSuggestionsRequest(SuggestionsRequest $request): array {

        $result = [];

        ArrayHelper::set($result, "q", $request->getQ(), [null]);
        ArrayHelper::set($result, "longueur", $request->getLongueur(), [null, 10]);
        ArrayHelper::set($result, "cibles", $request->getCibles(), [null, SuggestionsRequest::CIBLE_NOM_ENTREPRISE]);

        return $result;
    }
}