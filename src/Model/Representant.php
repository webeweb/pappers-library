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

use WBW\Library\Pappers\Traits\Booleans\BooleanPersonneMoraleTrait;
use WBW\Library\Pappers\Traits\Strings\StringAdresseLigne1Trait;
use WBW\Library\Pappers\Traits\Strings\StringAdresseLigne2Trait;
use WBW\Library\Pappers\Traits\Strings\StringAdresseLigne3Trait;
use WBW\Library\Pappers\Traits\Strings\StringCodePostalTrait;
use WBW\Library\Pappers\Traits\Strings\StringDateNaissanceFormateeTrait;
use WBW\Library\Pappers\Traits\Strings\StringDenominationTrait;
use WBW\Library\Pappers\Traits\Strings\StringFormeJuridiqueTrait;
use WBW\Library\Pappers\Traits\Strings\StringNationaliteTrait;
use WBW\Library\Pappers\Traits\Strings\StringNomTrait;
use WBW\Library\Pappers\Traits\Strings\StringPaysNaissanceTrait;
use WBW\Library\Pappers\Traits\Strings\StringPaysTrait;
use WBW\Library\Pappers\Traits\Strings\StringPrenomTrait;
use WBW\Library\Pappers\Traits\Strings\StringSirenTrait;
use WBW\Library\Pappers\Traits\Strings\StringVilleNaissanceTrait;
use WBW\Library\Pappers\Traits\Strings\StringVilleTrait;
use WBW\Library\Traits\Strings\StringMentionTrait;

/**
 * Représentant.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model
 */
class Representant {

    use BooleanPersonneMoraleTrait;
    use StringAdresseLigne1Trait;
    use StringAdresseLigne2Trait;
    use StringAdresseLigne3Trait;
    use StringCodePostalTrait;
    use StringDateNaissanceFormateeTrait;
    use StringDenominationTrait;
    use StringFormeJuridiqueTrait;
    use StringMentionTrait;

    // A supprimer

    use StringNationaliteTrait;
    use StringNomTrait;
    use StringPaysNaissanceTrait;
    use StringPaysTrait;
    use StringPrenomTrait;
    use StringSirenTrait;
    use StringVilleNaissanceTrait;
    use StringVilleTrait;

    /**
     * Actuel.
     *
     * @var bool|null
     */
    private $actuel;

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
     * Qualité.
     *
     * @var string|null
     */
    private $qualite;

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
     * Get the actuel.
     *
     * @return bool|null Returns the actuel.
     */
    public function getActuel(): ?bool {
        return $this->actuel;
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
     * Get the qualité.
     *
     * @return string|null Returns the qualité.
     */
    public function getQualite(): ?string {
        return $this->qualite;
    }

    /**
     * Set the actuel.
     *
     * @param bool|null $actuel The actuel.
     * @return Representant Returns this représentant.
     */
    public function setActuel(?bool $actuel): Representant {
        $this->actuel = $actuel;
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
     * Set the qualité.
     *
     * @param string|null $qualite The qualité.
     * @return Representant Returns this représentant.
     */
    public function setQualite(?string $qualite): Representant {
        $this->qualite = $qualite;
        return $this;
    }
}
