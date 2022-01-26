<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Response;

use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Model\Representant;

/**
 * Suggestions response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
class SuggestionsResponse extends AbstractResponse {

    /**
     * Résultats "dénomination".
     *
     * @var Entreprise[]
     */
    private $resultatsDenomination;

    /**
     * Résultats "nom complet".
     *
     * @var Entreprise[]
     */
    private $resultatsNomComplet;

    /**
     * Résultats "nom entreprise".
     *
     * @var Entreprise[]
     */
    private $resultatsNomEntreprise;

    /**
     * Résultats "représentant".
     *
     * @var Representant[]
     */
    private $resultatsRepresentant;

    /**
     * Résultats "SIREN".
     *
     * @var Entreprise[]
     */
    private $resultatsSiren;

    /**
     * Résultats "SIRET".
     *
     * @var Entreprise[]
     */
    private $resultatsSiret;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setResultatsDenomination([]);
        $this->setResultatsNomComplet([]);
        $this->setResultatsNomEntreprise([]);
        $this->setResultatsRepresentant([]);
        $this->setResultatsSiren([]);
        $this->setResultatsSiret([]);
    }

    /**
     * Add a résultat "dénomination".
     *
     * @param Entreprise $resultat The résultat "dénomination".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatDenomination(Entreprise $resultat): SuggestionsResponse {
        $this->resultatsDenomination[] = $resultat;
        return $this;
    }

    /**
     * Add a résultat "nom complet".
     *
     * @param Entreprise $resultat The résultat "nom complet".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatNomComplet(Entreprise $resultat): SuggestionsResponse {
        $this->resultatsNomComplet[] = $resultat;
        return $this;
    }

    /**
     * Add a résultat "nom entreprise".
     *
     * @param Entreprise $resultat The résultat "nom entreprise".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatNomEntreprise(Entreprise $resultat): SuggestionsResponse {
        $this->resultatsNomEntreprise[] = $resultat;
        return $this;
    }

    /**
     * Add a résultat "représentant".
     *
     * @param Representant $resultat The résultat "représentant".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatRepresentant(Representant $resultat): SuggestionsResponse {
        $this->resultatsRepresentant[] = $resultat;
        return $this;
    }

    /**
     * Add a résultat "SIREN".
     *
     * @param Entreprise $resultat The résultat "SIREN".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatSiren(Entreprise $resultat): SuggestionsResponse {
        $this->resultatsSiren[] = $resultat;
        return $this;
    }

    /**
     * Add a résultat "SIRET".
     *
     * @param Entreprise $resultat The résultat "SIRET".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    public function addResultatSiret(Entreprise $resultat): SuggestionsResponse {
        $this->resultatsSiret[] = $resultat;
        return $this;
    }

    /**
     * Get the résultats "dénomination".
     *
     * @return Entreprise[] Returns the résultats "dénomination".
     */
    public function getResultatsDenomination(): array {
        return $this->resultatsDenomination;
    }

    /**
     * Get the résultats "nom complet".
     *
     * @return Entreprise[] Returns the résultats "nom complet".
     */
    public function getResultatsNomComplet(): array {
        return $this->resultatsNomComplet;
    }

    /**
     * Get the résultats "nom entreprise".
     *
     * @return Entreprise[] Returns the résultats "nom entreprise".
     */
    public function getResultatsNomEntreprise(): array {
        return $this->resultatsNomEntreprise;
    }

    /**
     * Get the résultats "représentant".
     *
     * @return Representant[] Returns the résultats "représentant".
     */
    public function getResultatsRepresentant(): array {
        return $this->resultatsRepresentant;
    }

    /**
     * Get the résultats "SIREN".
     *
     * @return Entreprise[] Returns the résultats "SIREN".
     */
    public function getResultatsSiren(): array {
        return $this->resultatsSiren;
    }

    /**
     * Get the résultats "SIRET".
     *
     * @return Entreprise[] Returns the résultats "SIRET".
     */
    public function getResultatsSiret(): array {
        return $this->resultatsSiret;
    }

    /**
     * Set the résultats "dénomination".
     *
     * @param Entreprise[] $resultatsDenomination The résultats "dénomination".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsDenomination(array $resultatsDenomination): SuggestionsResponse {
        $this->resultatsDenomination = $resultatsDenomination;
        return $this;
    }

    /**
     * Set the résultats "nom complet".
     *
     * @param Entreprise[] $resultatsNomComplet The résultats "nom complet".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsNomComplet(array $resultatsNomComplet): SuggestionsResponse {
        $this->resultatsNomComplet = $resultatsNomComplet;
        return $this;
    }

    /**
     * Set the résultats "nom entreprise".
     *
     * @param Entreprise[] $resultatsNomEntreprise The résultats "nom entreprise".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsNomEntreprise(array $resultatsNomEntreprise): SuggestionsResponse {
        $this->resultatsNomEntreprise = $resultatsNomEntreprise;
        return $this;
    }

    /**
     * Set the résultats "représentant".
     *
     * @param Representant[] $resultatsRepresentant The résultats "représentant".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsRepresentant(array $resultatsRepresentant): SuggestionsResponse {
        $this->resultatsRepresentant = $resultatsRepresentant;
        return $this;
    }

    /**
     * Set the résultats "SIREN".
     *
     * @param Entreprise[] $resultatsSiren The résultats "SIREN".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsSiren(array $resultatsSiren): SuggestionsResponse {
        $this->resultatsSiren = $resultatsSiren;
        return $this;
    }

    /**
     * Set the résultats "SIRET".
     *
     * @param Entreprise[] $resultatsSiret The résultats "SIRET".
     * @return SuggestionsResponse Returns this suggestions response.
     */
    protected function setResultatsSiret(array $resultatsSiret): SuggestionsResponse {
        $this->resultatsSiret = $resultatsSiret;
        return $this;
    }
}
