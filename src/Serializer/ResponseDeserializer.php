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

use WBW\Library\Pappers\Response\AbstractRechercheResponse;
use WBW\Library\Pappers\Response\AbstractResponse;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Response\EntrepriseResponse;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;
use WBW\Library\Pappers\Response\RechercheDocumentsResponse;
use WBW\Library\Pappers\Response\RecherchePublicationsResponse;
use WBW\Library\Pappers\Response\RechercheResponse;
use WBW\Library\Pappers\Response\SuggestionsResponse;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize an abstract recherche response.
     *
     * @param string $rawResponse The raw response.
     * @param AbstractRechercheResponse $model The response.
     * @return array|null Returns the decoded response.
     */
    protected static function deserializeAbstractRechercheResponse(string $rawResponse, AbstractRechercheResponse $model): ?array {

        $decodedResponse = static::deserializeAbstractResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return null;
        }

        $key = "total";
        if (false === array_key_exists($key, $decodedResponse)) {
            $key = "total_entreprises";
        }

        $model->setTotal(ArrayHelper::get($decodedResponse, $key));
        $model->setPage(ArrayHelper::get($decodedResponse, "page"));

        return $decodedResponse;
    }

    /**
     * Deserialize an abstract response.
     *
     * @param string $rawResponse The raw response.
     * @param AbstractResponse $model The response.
     * @return array|null Returns the decoded response.
     */
    protected static function deserializeAbstractResponse(string $rawResponse, AbstractResponse $model): ?array {

        $model->setRawResponse($rawResponse);

        return json_decode(trim($rawResponse), true);
    }

    /**
     * Deserialize a document téléchargement response.
     *
     * @param string $rawResponse The raw response.
     * @return DocumentTelechargementResponse Returns the document téléchargement response.
     */
    public static function deserializeDocumentTelechargementResponse(string $rawResponse): DocumentTelechargementResponse {

        $model = new DocumentTelechargementResponse();
        $model->setRawResponse($rawResponse);

        return $model;
    }

    /**
     * Deserialize an entreprise response.
     *
     * @param string $rawResponse The raw response.
     * @return EntrepriseResponse Returns the entreprise response.
     */
    public static function deserializeEntrepriseResponse(string $rawResponse): EntrepriseResponse {

        $model = new EntrepriseResponse();

        $decodedResponse = static::deserializeAbstractResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        $model->setEntreprise(JsonDeserializer::deserializeEntreprise($decodedResponse));

        return $model;
    }

    /**
     * Deserialize a recherche dirigeants response.
     *
     * @param string $rawResponse The raw response.
     * @return RechercheDirigeantsResponse Returns the recherche dirigeants response.
     */
    public static function deserializeRechercheDirigeantsResponse(string $rawResponse): RechercheDirigeantsResponse {

        $model = new RechercheDirigeantsResponse();

        $decodedResponse = static::deserializeAbstractRechercheResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats", []) as $current) {
            $model->addResultat(JsonDeserializer::deserializeRepresentant($current));
        }

        return $model;
    }

    /**
     * Deserialize a recherche documents response.
     *
     * @param string $rawResponse The raw response.
     * @return RechercheDocumentsResponse Returns the recherche documents response.
     */
    public static function deserializeRechercheDocumentsResponse(string $rawResponse): RechercheDocumentsResponse {

        $model = new RechercheDocumentsResponse();

        $decodedResponse = static::deserializeAbstractRechercheResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats", []) as $current) {
            $model->addResultat(JsonDeserializer::deserializeDocument($current));
        }

        return $model;
    }

    /**
     * Deserialize a recherche publications response.
     *
     * @param string $rawResponse The raw response.
     * @return RecherchePublicationsResponse Returns the recherche publications response.
     */
    public static function deserializeRecherchePublicationsResponse(string $rawResponse): RecherchePublicationsResponse {

        $model = new RecherchePublicationsResponse();

        $decodedResponse = static::deserializeAbstractRechercheResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats", []) as $current) {
            $model->addResultat(JsonDeserializer::deserializePublicationBodacc($current));
        }

        return $model;
    }

    /**
     * Deserialize a recherche response.
     *
     * @param string $rawResponse The raw response.
     * @return RechercheResponse Returns the recherche response.
     */
    public static function deserializeRechercheResponse(string $rawResponse): RechercheResponse {

        $model = new RechercheResponse();

        $decodedResponse = static::deserializeAbstractRechercheResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        $key = "resultats";
        if (false === array_key_exists($key, $decodedResponse)) {
            $key = "entreprises";
        }

        foreach (ArrayHelper::get($decodedResponse, $key, []) as $current) {
            $model->addResultat(JsonDeserializer::deserializeEntreprise($current));
        }

        return $model;
    }

    /**
     * Deserialize a suggestions response.
     *
     * @param string $rawResponse The raw response.
     * @return SuggestionsResponse Returns the suggestions response.
     */
    public static function deserializeSuggestionsResponse(string $rawResponse): SuggestionsResponse {

        $model = new SuggestionsResponse();

        $decodedResponse = static::deserializeAbstractResponse($rawResponse, $model);
        if (null === $decodedResponse) {
            return $model;
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_nom_entreprise", []) as $current) {
            $model->addResultatNomEntreprise(JsonDeserializer::deserializeEntreprise($current));
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_denomination", []) as $current) {
            $model->addResultatDenomination(JsonDeserializer::deserializeEntreprise($current));
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_nom_complet", []) as $current) {
            $model->addResultatNomComplet(JsonDeserializer::deserializeEntreprise($current));
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_representant", []) as $current) {
            $model->addResultatRepresentant(JsonDeserializer::deserializeRepresentant($current));
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_siren", []) as $current) {
            $model->addResultatSiren(JsonDeserializer::deserializeEntreprise($current));
        }

        foreach (ArrayHelper::get($decodedResponse, "resultats_siret", []) as $current) {
            $model->addResultatSiret(JsonDeserializer::deserializeEntreprise($current));
        }

        return $model;
    }
}
