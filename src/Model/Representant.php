<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

use WBW\Library\Pappers\Model\Attribute\BooleanPersonneMoraleTrait;
use WBW\Library\Pappers\Model\Attribute\StringAdresseLigne1Trait;
use WBW\Library\Pappers\Model\Attribute\StringAdresseLigne2Trait;
use WBW\Library\Pappers\Model\Attribute\StringCodePostalTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateNaissanceFormateTrait;
use WBW\Library\Pappers\Model\Attribute\StringNationaliteTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringPrenomTrait;
use WBW\Library\Pappers\Model\Attribute\StringVilleTrait;

/**
 * Représentant.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Representant {

    use BooleanPersonneMoraleTrait;
    use StringAdresseLigne1Trait;
    use StringAdresseLigne2Trait;
    use StringCodePostalTrait;
    use StringDateNaissanceFormateTrait;
    use StringNationaliteTrait;
    use StringNomTrait;
    use StringPrenomTrait;
    use StringVilleTrait;

    /**
     * Adresse ligne 3.
     *
     * @var string|null
     */
    private $adresseLigne3;

    /**
     * Age.
     *
     * @var int|null
     */
    private $age;

    /**
     * Date naissance.
     *
     * @var string|null
     */
    private $dateNaissance;

    /**
     * Date prise poste.
     *
     * @var string|null
     */
    private $datePrisePoste;

    /**
     * Entreprises
     *
     * @var Entreprise[]
     */
    private $entreprises;

    /**
     * Nb entreprises total.
     *
     * @var int|null
     */
    private $nbEntreprisesTotal;

    /**
     * Nom complet.
     *
     * @var string|null
     */
    private $nomComplet;

    /**
     * Pays.
     *
     * @var string|null
     */
    private $pays;

    /**
     * Pays naissance.
     *
     * @var string|null
     */
    private $paysNaissance;

    /**
     * Qualité.
     *
     * @var string|null
     */
    private $qualite;

    /**
     * Ville naissance.
     *
     * @var string|null
     */
    private $villeNaissance;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setEntreprises([]);
    }

    /**
     * Add an entreprise.
     *
     * @param Entreprise $entreprise The entreprise.
     * @return Representant Returns this représentant.
     */
    public function addEntreprise(Entreprise $entreprise): Representant {
        $this->entreprises[] = $entreprise;
        return $this;
    }

    /**
     * Get the adresse ligne 3.
     *
     * @return string|null Returns the adresse ligne 3.
     */
    public function getAdresseLigne3(): ?string {
        return $this->adresseLigne3;
    }

    /**
     * Get the age.
     *
     * @return int|null Returns the age.
     */
    public function getAge(): ?int {
        return $this->age;
    }

    /**
     * Get the date naissance.
     *
     * @return string|null Returns the date naissance.
     */
    public function getDateNaissance(): ?string {
        return $this->dateNaissance;
    }

    /**
     * Get the date prise poste.
     *
     * @return string|null Returns the date prise poste.
     */
    public function getDatePrisePoste(): ?string {
        return $this->datePrisePoste;
    }

    /**
     * Get the entreprises.
     *
     * @return Entreprise[] Returns the entreprises.
     */
    public function getEntreprises(): array {
        return $this->entreprises;
    }

    /**
     * Get the nb entreprises total.
     *
     * @return int|null Returns the nb entreprises total.
     */
    public function getNbEntreprisesTotal(): ?int {
        return $this->nbEntreprisesTotal;
    }

    /**
     * Get the nom complet.
     *
     * @return string|null Returns the nom complet.
     */
    public function getNomComplet(): ?string {
        return $this->nomComplet;
    }

    /**
     * Get the pays.
     *
     * @return string|null Returns the pays.
     */
    public function getPays(): ?string {
        return $this->pays;
    }

    /**
     * Get the pays naissance.
     *
     * @return string|null Returns the pays naissance.
     */
    public function getPaysNaissance(): ?string {
        return $this->paysNaissance;
    }

    /**
     * Get the qualité.
     *
     * @return string|null Returns the qualité.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Get the ville naissance.
     *
     * @return string|null Returns the ville naissance.
     */
    public function getVilleNaissance(): ?string {
        return $this->villeNaissance;
    }

    /**
     * Set the adresse ligne 3.
     *
     * @param string|null $adresseLigne3 The adresse ligne 3.
     * @return Representant Returns this représentant.
     */
    public function setAdresseLigne3(?string $adresseLigne3): Representant {
        $this->adresseLigne3 = $adresseLigne3;
        return $this;
    }

    /**
     * Set the age.
     *
     * @param int|null $age The age.
     * @return Representant Returns this représentant.
     */
    public function setAge(?int $age): Representant {
        $this->age = $age;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param string|null $dateNaissance The date naissance.
     * @return Representant Returns this représentant.
     */
    public function setDateNaissance(?string $dateNaissance): Representant {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date prise poste.
     *
     * @param string|null $datePrisePoste The date prise poste.
     * @return Representant Returns this représentant.
     */
    public function setDatePrisePoste(?string $datePrisePoste): Representant {
        $this->datePrisePoste = $datePrisePoste;
        return $this;
    }

    /**
     * Set the entreprises.
     *
     * @param Entreprise[] $entreprises The entreprises.
     * @return Representant Returns this représentant.
     */
    protected function setEntreprises(array $entreprises): Representant {
        $this->entreprises = $entreprises;
        return $this;
    }

    /**
     * Set the nb entreprises total.
     *
     * @param int|null $nbEntreprisesTotal The nb entreprises total.
     * @return Representant Returns this représentant.
     */
    public function setNbEntreprisesTotal(?int $nbEntreprisesTotal): Representant {
        $this->nbEntreprisesTotal = $nbEntreprisesTotal;
        return $this;
    }

    /**
     * Set the nom complet.
     *
     * @param string|null $nomComplet The nom complet.
     * @return Representant Returns this représentant.
     */
    public function setNomComplet(?string $nomComplet): Representant {
        $this->nomComplet = $nomComplet;
        return $this;
    }

    /**
     * Set the pays.
     *
     * @param string|null $pays The pays.
     * @return Representant Returns this représentant.
     */
    public function setPays(?string $pays): Representant {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Set the pays naissance.
     *
     * @param string|null $paysNaissance The pays naissance.
     * @return Representant Returns this représentant.
     */
    public function setPaysNaissance(?string $paysNaissance): Representant {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }

    /**
     * Set the qualité.
     *
     * @param string|null $qualite The qualité.
     * @return Representant Returns this représentant.
     */
    public function setQualite(?string $qualite): Representant {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the ville naissance.
     *
     * @param string|null $villeNaissance The ville naissance.
     * @return Representant Returns this représentant.
     */
    public function setVilleNaissance(?string $villeNaissance): Representant {
        $this->villeNaissance = $villeNaissance;
        return $this;
    }
}