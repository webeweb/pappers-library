<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Request;

use WBW\Library\Core\Model\Attribute\IntegerPageTrait;
use WBW\Library\Pappers\Model\Attribute\BooleanEntrepriseCesseeTrait;
use WBW\Library\Pappers\Model\Attribute\StringCategorieJuridiqueTrait;
use WBW\Library\Pappers\Model\Attribute\StringCodeNafTrait;
use WBW\Library\Pappers\Model\Attribute\StringCodePostalTrait;
use WBW\Library\Pappers\Model\Attribute\StringObjetSocialTrait;
use WBW\Library\Pappers\Model\Attribute\StringQTrait;
use WBW\Library\Pappers\Model\Attribute\StringStatutRcsTrait;

/**
 * Abstract recherche request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Request
 * @abstract
 */
abstract class AbstractRechercheRequest extends AbstractRequest {

    use BooleanEntrepriseCesseeTrait;
    use IntegerPageTrait;
    use StringCategorieJuridiqueTrait;
    use StringCodeNafTrait;
    use StringCodePostalTrait;
    use StringObjetSocialTrait;
    use StringQTrait;
    use StringStatutRcsTrait;

    /**
     * Age dirigeant max.
     *
     * @var int|null
     */
    private $ageDirigeantMax;

    /**
     * Age dirigeant min.
     *
     * @var int|null
     */
    private $ageDirigeantMin;

    /**
     * Capital max.
     *
     * @var int|null
     */
    private $capitalMax;

    /**
     * Capital min.
     *
     * @var int|null
     */
    private $capitalMin;

    /**
     * Chiffre affaires max.
     *
     * @var int|null
     */
    private $chiffreAffairesMax;

    /**
     * Chiffre affaires min.
     *
     * @var int|null
     */
    private $chiffreAffairesMin;

    /**
     * Convention collective.
     *
     * @var string|null
     */
    private $conventionCollective;

    /**
     * Date création max.
     *
     * @var string|null
     */
    private $dateCreationMax;

    /**
     * Date création min.
     *
     * @var string|null
     */
    private $dateCreationMin;

    /**
     * Date dépôt document max.
     *
     * @var string|null
     */
    private $dateDepotDocumentMax;

    /**
     * Date dépôt document min.
     *
     * @var string|null
     */
    private $dateDepotDocumentMin;

    /**
     * Date naissance dirigeant max.
     *
     * @var string|null
     */
    private $dateNaissanceDirigeantMax;

    /**
     * Date naissance dirigeant min.
     *
     * @var string|null
     */
    private $dateNaissanceDirigeantMin;

    /**
     * Date publication max.
     *
     * @var string|null
     */
    private $datePublicationMax;

    /**
     * Date publication min.
     *
     * @var string|null
     */
    private $datePublicationMin;

    /**
     * Date radiation R.C.S. max.
     *
     * @var string|null
     */
    private $dateRadiationRcsMax;

    /**
     * Date radiation R.C.S. min.
     *
     * @var string|null
     */
    private $dateRadiationRcsMin;

    /**
     * Département.
     *
     * @var string|null
     */
    private $departement;

    /**
     * Par page.
     *
     * @var int|null
     */
    private $parPage;

    /**
     * Précision.
     *
     * @var string|null
     */
    private $precision;

    /**
     * Région.
     *
     * @var string|null
     */
    private $region;

    /**
     * Résultat max.
     *
     * @var int|null
     */
    private $resultatMax;

    /**
     * Résultat min.
     *
     * @var int|null
     */
    private $resultatMin;

    /**
     * Tranche effectif max.
     *
     * @var int|null
     */
    private $trancheEffectifMax;

    /**
     * Tranche effectif min.
     *
     * @var int|null
     */
    private $trancheEffectifMin;

    /**
     * Type publication.
     *
     * @var string|null
     */
    private $typePublication;

    /**
     * Get the age dirigeant max.
     *
     * @return int|null Returns the age dirigeant max.
     */
    public function getAgeDirigeantMax(): ?int {
        return $this->ageDirigeantMax;
    }

    /**
     * Get the age dirigeant min.
     *
     * @return int|null Returns the age dirigeant min.
     */
    public function getAgeDirigeantMin(): ?int {
        return $this->ageDirigeantMin;
    }

    /**
     * Get the capital max.
     *
     * @return int|null Returns the capital max.
     */
    public function getCapitalMax(): ?int {
        return $this->capitalMax;
    }

    /**
     * Get the capital min.
     *
     * @return int|null Returns the capital min.
     */
    public function getCapitalMin(): ?int {
        return $this->capitalMin;
    }

    /**
     * Get the chiffre affaires max.
     *
     * @return int|null Returns the chiffre affaires max.
     */
    public function getChiffreAffairesMax(): ?int {
        return $this->chiffreAffairesMax;
    }

    /**
     * Get the chiffre affaires min.
     *
     * @return int|null Returns the chiffre affaires min.
     */
    public function getChiffreAffairesMin(): ?int {
        return $this->chiffreAffairesMin;
    }

    /**
     * Get the convention collective.
     *
     * @return string|null Returns the convention collective.
     */
    public function getConventionCollective(): ?string {
        return $this->conventionCollective;
    }

    /**
     * Get the date création max.
     *
     * @return string|null Returns the date création max.
     */
    public function getDateCreationMax(): ?string {
        return $this->dateCreationMax;
    }

    /**
     * Get the data création min.
     *
     * @return string|null Returns the date création min.
     */
    public function getDateCreationMin(): ?string {
        return $this->dateCreationMin;
    }

    /**
     * Get the date dépôt document max.
     *
     * @return string|null Returns the date dépôt document max.
     */
    public function getDateDepotDocumentMax(): ?string {
        return $this->dateDepotDocumentMax;
    }

    /**
     * Get the date dépôt document min.
     *
     * @return string|null Returns the date dépôt document min.
     */
    public function getDateDepotDocumentMin(): ?string {
        return $this->dateDepotDocumentMin;
    }

    /**
     * Get the date naissance dirigeant max.
     *
     * @return string|null Returns the date naissance dirigeant max.
     */
    public function getDateNaissanceDirigeantMax(): ?string {
        return $this->dateNaissanceDirigeantMax;
    }

    /**
     * Get the date naissance dirigeant min.
     *
     * @return string|null Returns the date naissance dirigeant min.
     */
    public function getDateNaissanceDirigeantMin(): ?string {
        return $this->dateNaissanceDirigeantMin;
    }

    /**
     * Get the date publication max.
     *
     * @return string|null Returns the date publication max.
     */
    public function getDatePublicationMax(): ?string {
        return $this->datePublicationMax;
    }

    /**
     * Get the date publication min.
     *
     * @return string|null Returns the date publication min.
     */
    public function getDatePublicationMin(): ?string {
        return $this->datePublicationMin;
    }

    /**
     * Get the date radiation R.C.S. max.
     *
     * @return string|null Returns the date radiation R.C.S. max.
     */
    public function getDateRadiationRcsMax(): ?string {
        return $this->dateRadiationRcsMax;
    }

    /**
     * Get the date radiation R.C.S. min.
     *
     * @return string|null Returns the date radiation R.C.S. min.
     */
    public function getDateRadiationRcsMin(): ?string {
        return $this->dateRadiationRcsMin;
    }

    /**
     * Get the département.
     *
     * @return string|null Returns the département.
     */
    public function getDepartement(): ?string {
        return $this->departement;
    }

    /**
     * Get the par page.
     *
     * @return int|null Returns the par page.
     */
    public function getParPage(): ?int {
        return $this->parPage;
    }

    /**
     * Get the précision.
     *
     * @return string|null Returns the précision.
     */
    public function getPrecision(): ?string {
        return $this->precision;
    }

    /**
     * Get the région.
     *
     * @return string|null Returns the région.
     */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Get the résultat max.
     *
     * @return int|null Returns the résultat max.
     */
    public function getResultatMax(): ?int {
        return $this->resultatMax;
    }

    /**
     * Get the résultat min.
     *
     * @return int|null Returns the résultat min.
     */
    public function getResultatMin(): ?int {
        return $this->resultatMin;
    }

    /**
     * Get tht tranche effectif max.
     *
     * @return int|null Returns the tranche effectif max.
     */
    public function getTrancheEffectifMax(): ?int {
        return $this->trancheEffectifMax;
    }

    /**
     * Get the tranche effectif min.
     *
     * @return int|null Returns the tranche effectif min.
     */
    public function getTrancheEffectifMin(): ?int {
        return $this->trancheEffectifMin;
    }

    /**
     * Get the type publication.
     *
     * @return string|null Returns the type publication.
     */
    public function getTypePublication(): ?string {
        return $this->typePublication;
    }

    /**
     * Set the age dirigeant max.
     *
     * @param int|null $ageDirigeantMax The age dirigeant max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setAgeDirigeantMax(?int $ageDirigeantMax): AbstractRechercheRequest {
        $this->ageDirigeantMax = $ageDirigeantMax;
        return $this;
    }

    /**
     * Set the age dirigeant min.
     *
     * @param int|null $ageDirigeantMin The age dirigeant min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setAgeDirigeantMin(?int $ageDirigeantMin): AbstractRechercheRequest {
        $this->ageDirigeantMin = $ageDirigeantMin;
        return $this;
    }

    /**
     * Set the capital max.
     *
     * @param int|null $capitalMax The capital max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setCapitalMax(?int $capitalMax): AbstractRechercheRequest {
        $this->capitalMax = $capitalMax;
        return $this;
    }

    /**
     * Set the capital min.
     *
     * @param int|null $capitalMin The capital min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setCapitalMin(?int $capitalMin): AbstractRechercheRequest {
        $this->capitalMin = $capitalMin;
        return $this;
    }

    /**
     * Set the chiffre affaires max.
     *
     * @param int|null $chiffreAffairesMax The chiffre affaires max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setChiffreAffairesMax(?int $chiffreAffairesMax): AbstractRechercheRequest {
        $this->chiffreAffairesMax = $chiffreAffairesMax;
        return $this;
    }

    /**
     * Set the chiffre affaires min.
     *
     * @param int|null $chiffreAffairesMin The chiffre affaires min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setChiffreAffairesMin(?int $chiffreAffairesMin): AbstractRechercheRequest {
        $this->chiffreAffairesMin = $chiffreAffairesMin;
        return $this;
    }

    /**
     * Set the convention collective.
     *
     * @param string|null $conventionCollective The convention collective.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setConventionCollective(?string $conventionCollective): AbstractRechercheRequest {
        $this->conventionCollective = $conventionCollective;
        return $this;
    }

    /**
     * Set the date création max.
     *
     * @param string|null $dateCreationMax The date création max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateCreationMax(?string $dateCreationMax): AbstractRechercheRequest {
        $this->dateCreationMax = $dateCreationMax;
        return $this;
    }

    /**
     * Set the date création min.
     *
     * @param string|null $dateCreationMin The date création min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateCreationMin(?string $dateCreationMin): AbstractRechercheRequest {
        $this->dateCreationMin = $dateCreationMin;
        return $this;
    }

    /**
     * Set the date dépôt document max.
     *
     * @param string|null $dateDepotDocumentMax The date dépôt document max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateDepotDocumentMax(?string $dateDepotDocumentMax): AbstractRechercheRequest {
        $this->dateDepotDocumentMax = $dateDepotDocumentMax;
        return $this;
    }

    /**
     * Set the date dépôt document min.
     *
     * @param string|null $dateDepotDocumentMin The date dépôt document min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateDepotDocumentMin(?string $dateDepotDocumentMin): AbstractRechercheRequest {
        $this->dateDepotDocumentMin = $dateDepotDocumentMin;
        return $this;
    }

    /**
     * Set the date naissance dirigeant max.
     *
     * @param string|null $dateNaissanceDirigeantMax The date naissance dirigeant max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateNaissanceDirigeantMax(?string $dateNaissanceDirigeantMax): AbstractRechercheRequest {
        $this->dateNaissanceDirigeantMax = $dateNaissanceDirigeantMax;
        return $this;
    }

    /**
     * Set the date naissance dirigeant min.
     *
     * @param string|null $dateNaissanceDirigeantMin The date naissaince dirigeant min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateNaissanceDirigeantMin(?string $dateNaissanceDirigeantMin): AbstractRechercheRequest {
        $this->dateNaissanceDirigeantMin = $dateNaissanceDirigeantMin;
        return $this;
    }

    /**
     * Set the date publication max.
     *
     * @param string|null $datePublicationMax The date publication max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDatePublicationMax(?string $datePublicationMax): AbstractRechercheRequest {
        $this->datePublicationMax = $datePublicationMax;
        return $this;
    }

    /**
     * Set the date publication min.
     *
     * @param string|null $datePublicationMin The date publication min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDatePublicationMin(?string $datePublicationMin): AbstractRechercheRequest {
        $this->datePublicationMin = $datePublicationMin;
        return $this;
    }

    /**
     * Set the date radiation R.C.S. max.
     *
     * @param string|null $dateRadiationRcsMax The date radiation R.C.S. max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateRadiationRcsMax(?string $dateRadiationRcsMax): AbstractRechercheRequest {
        $this->dateRadiationRcsMax = $dateRadiationRcsMax;
        return $this;
    }

    /**
     * Set the radiation min.
     *
     * @param string|null $dateRadiationRcsMin The date radiation R.C.S. min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDateRadiationRcsMin(?string $dateRadiationRcsMin): AbstractRechercheRequest {
        $this->dateRadiationRcsMin = $dateRadiationRcsMin;
        return $this;
    }

    /**
     * Set the département.
     *
     * @param string|null $departement The département.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setDepartement(?string $departement): AbstractRechercheRequest {
        $this->departement = $departement;
        return $this;
    }

    /**
     * Set the par page.
     *
     * @param int|null $parPage The par page.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setParPage(?int $parPage): AbstractRechercheRequest {
        $this->parPage = $parPage;
        return $this;
    }

    /**
     * Set the précision.
     *
     * @param string|null $precision The précision.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setPrecision(?string $precision): AbstractRechercheRequest {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Set the région.
     *
     * @param string|null $region The région.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setRegion(?string $region): AbstractRechercheRequest {
        $this->region = $region;
        return $this;
    }

    /**
     * Set the résultat max.
     *
     * @param int|null $resultatMax The résultat max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setResultatMax(?int $resultatMax): AbstractRechercheRequest {
        $this->resultatMax = $resultatMax;
        return $this;
    }

    /**
     * Set the résultat min.
     *
     * @param int|null $resultatMin The résultat min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setResultatMin(?int $resultatMin): AbstractRechercheRequest {
        $this->resultatMin = $resultatMin;
        return $this;
    }

    /**
     * Set the tranche effectif max.
     *
     * @param int|null $trancheEffectifMax The tranche effectif max.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setTrancheEffectifMax(?int $trancheEffectifMax): AbstractRechercheRequest {
        $this->trancheEffectifMax = $trancheEffectifMax;
        return $this;
    }

    /**
     * Set the tranche effectif min.
     *
     * @param int|null $trancheEffectifMin The tranche effectif min.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setTrancheEffectifMin(?int $trancheEffectifMin): AbstractRechercheRequest {
        $this->trancheEffectifMin = $trancheEffectifMin;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string|null $typePublication The type publication.
     * @return AbstractRechercheRequest Returns this recherche request.
     */
    public function setTypePublication(?string $typePublication): AbstractRechercheRequest {
        $this->typePublication = $typePublication;
        return $this;
    }
}