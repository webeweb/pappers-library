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

use WBW\Library\Pappers\Model\Attribute\StringDateNaissanceFormateTrait;
use WBW\Library\Pappers\Model\Attribute\StringNationaliteTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringPrenomTrait;

/**
 * Bénéficiaire effectif.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers
 */
class BeneficiaireEffectif {

    use StringDateNaissanceFormateTrait;
    use StringNationaliteTrait;
    use StringPrenomTrait;
    use StringNomTrait;

    /**
     * Bénéficiaire représentant légal.
     *
     * @var bool|null
     */
    private $beneficiaireRepresentantLegal;

    /**
     * Date greffe.
     *
     * @var string|null
     */
    private $dateGreffe;

    /**
     * Détails parts directes.
     *
     * @var DetailsDirects|null
     */
    private $detailsPartsDirectes;

    /**
     * Détails parts indirectes.
     *
     * @var DetailsIndirects|null
     */
    private $detailsPartsIndirectes;

    /**
     * Détails parts vocation titulaire.
     *
     * @var DetailsPartsVocationTitulaire|null
     */
    private $detailsPartsVocationTitulaire;

    /**
     * Détails société gestion.
     *
     * @var DetailsSocieteGestion|null
     */
    private $detailsSocieteGestion;

    /**
     * Détails votes directs.
     *
     * @var DetailsDirects|null
     */
    private $detailsVotesDirects;

    /**
     * Détails votes indirects.
     *
     * @var DetailsIndirects|null
     */
    private $detailsVotesIndirects;

    /**
     * Détention autres moyens contrôle.
     *
     * @var bool|null
     */
    private $detentionAutresMoyensControle;

    /**
     * Détention pouvoir décision AG.
     *
     * @var bool|null
     */
    private $detentionPouvoirDecisionAg;

    /**
     * Détention pouvoir nom membre conseil administration.
     *
     * @var bool|null
     */
    private $detentionPouvoirNomMembreConseilAdministration;

    /**
     * Nom usage.
     *
     * @var string|null
     */
    private $nomUsage;

    /**
     * Pourcentages parts.
     *
     * @var int|null
     */
    private $pourcentageParts;

    /**
     * Pourcentages parts directes.
     *
     * @var int|null
     */
    private $pourcentagePartsDirectes;

    /**
     * Pourcentages parts indirectes.
     *
     * @var int|null
     */
    private $pourcentagePartsIndirectes;

    /**
     * Pourcentages parts vocation titulaire.
     *
     * @var int|null
     */
    private $pourcentagePartsVocationTitulaire;

    /**
     * Pourcentage votes.
     *
     * @var int|null
     */
    private $pourcentageVotes;

    /**
     * Pourcentage votes directs.
     *
     * @var int|null
     */
    private $pourcentageVotesDirects;

    /**
     * Pourcentage votes indirects.
     *
     * @var int|null
     */
    private $pourcentageVotesIndirects;

    /**
     * Pseudonyme.
     *
     * @var string|null
     */
    private $pseudonyme;

    /**
     * Représentant légal placement sans gestion délégation.
     *
     * @var bool|null
     */
    private $representantLegalPlacementSansGestionDelegation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bénéficiaire représentant légal.
     *
     * @return bool|null Returns the bénéficiaire représentant légal.
     */
    public function getBeneficiaireRepresentantLegal(): ?bool {
        return $this->beneficiaireRepresentantLegal;
    }

    /**
     * Get the date greffe.
     *
     * @return string|null Returns the date greffe.
     */
    public function getDateGreffe(): ?string {
        return $this->dateGreffe;
    }

    /**
     * Get the détails parts directes.
     *
     * @return DetailsDirects|null Returns the détails parts directes.
     */
    public function getDetailsPartsDirectes(): ?DetailsDirects {
        return $this->detailsPartsDirectes;
    }

    /**
     * Get the détails parts indirectes.
     *
     * @return DetailsIndirects|null Returns the détails parts indirectes.
     */
    public function getDetailsPartsIndirectes(): ?DetailsIndirects {
        return $this->detailsPartsIndirectes;
    }

    /**
     * Get the détails parts vocation titulaire.
     *
     * @return DetailsPartsVocationTitulaire|null Returns the détails parts vocation titulaire.
     */
    public function getDetailsPartsVocationTitulaire(): ?DetailsPartsVocationTitulaire {
        return $this->detailsPartsVocationTitulaire;
    }

    /**
     * Get the détails société gestion.
     *
     * @return DetailsSocieteGestion|null Returns the détails société gestion.
     */
    public function getDetailsSocieteGestion(): ?DetailsSocieteGestion {
        return $this->detailsSocieteGestion;
    }

    /**
     * Get the détails votes directs.
     *
     * @return DetailsDirects|null Returns the détails votes directs.
     */
    public function getDetailsVotesDirects(): ?DetailsDirects {
        return $this->detailsVotesDirects;
    }

    /**
     * Get the détails votes indirects.
     *
     * @return DetailsIndirects|null Returns the détails votes indirects.
     */
    public function getDetailsVotesIndirects(): ?DetailsIndirects {
        return $this->detailsVotesIndirects;
    }

    /**
     * Get the détention autres moyens contrôle.
     *
     * @return bool|null Returns the détention autres moyens contrôle.
     */
    public function getDetentionAutresMoyensControle(): ?bool {
        return $this->detentionAutresMoyensControle;
    }

    /**
     * Get the détention pouvoir décision AG.
     *
     * @return bool|null Returns the détention pouvoir décision AG.
     */
    public function getDetentionPouvoirDecisionAg(): ?bool {
        return $this->detentionPouvoirDecisionAg;
    }

    /**
     * Get the détention pouvoir nom membre conseil administration.
     *
     * @return bool|null Returns the détention pouvoir nom membre conseil administration.
     */
    public function getDetentionPouvoirNomMembreConseilAdministration(): ?bool {
        return $this->detentionPouvoirNomMembreConseilAdministration;
    }

    /**
     * Get the nom usage.
     *
     * @return string|null Returns the nom usage.
     */
    public function getNomUsage(): ?string {
        return $this->nomUsage;
    }

    /**
     * Get the pourcentage parts.
     *
     * @return int|null Returns the pourcentage parts.
     */
    public function getPourcentageParts(): ?int {
        return $this->pourcentageParts;
    }

    /**
     * Get the pourcentage parts directes.
     *
     * @return int|null Returns the pourcentage parts directes.
     */
    public function getPourcentagePartsDirectes(): ?int {
        return $this->pourcentagePartsDirectes;
    }

    /**
     * Get the pourcentage parts indirectes.
     *
     * @return int|null Returns the pourcentage parts indirectes.
     */
    public function getPourcentagePartsIndirectes(): ?int {
        return $this->pourcentagePartsIndirectes;
    }

    /**
     * Get the pourcentage parts vocation titulaire.
     *
     * @return int|null Returns the pourcentage parts vocation titulaire.
     */
    public function getPourcentagePartsVocationTitulaire(): ?int {
        return $this->pourcentagePartsVocationTitulaire;
    }

    /**
     * Get the pourcentage votes.
     *
     * @return int|null Returns the pourcentage votes.
     */
    public function getPourcentageVotes(): ?int {
        return $this->pourcentageVotes;
    }

    /**
     * Get the pourcentage votes directs.
     *
     * @return int|null Returns the pourcentage votes directs.
     */
    public function getPourcentageVotesDirects(): ?int {
        return $this->pourcentageVotesDirects;
    }

    /**
     * Get the pourcentage votes indirects.
     *
     * @return int|null Returns the pourcentage votes indirects.
     */
    public function getPourcentageVotesIndirects(): ?int {
        return $this->pourcentageVotesIndirects;
    }

    /**
     * Get the pseudonyme.
     *
     * @return string|null Returns the pseudonyme.
     */
    public function getPseudonyme(): ?string {
        return $this->pseudonyme;
    }

    /**
     * Get the représentant légal placement sans gestion délégation.
     *
     * @return bool|null Returns the représentant légal placement sans gestion délégation.
     */
    public function getRepresentantLegalPlacementSansGestionDelegation(): ?bool {
        return $this->representantLegalPlacementSansGestionDelegation;
    }

    /**
     * Set the bénéficiaire représentant légal.
     *
     * @param bool|null $beneficiaireRepresentantLegal The bénéficiaire représentant légal.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setBeneficiaireRepresentantLegal(?bool $beneficiaireRepresentantLegal): BeneficiaireEffectif {
        $this->beneficiaireRepresentantLegal = $beneficiaireRepresentantLegal;
        return $this;
    }

    /**
     * Set the date greffe.
     *
     * @param string|null $dateGreffe The date greffe.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDateGreffe(?string $dateGreffe): BeneficiaireEffectif {
        $this->dateGreffe = $dateGreffe;
        return $this;
    }

    /**
     * Set the détails parts directes.
     *
     * @param DetailsDirects|null $detailsPartsDirectes The détails parts directes.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsPartsDirectes(?DetailsDirects $detailsPartsDirectes): BeneficiaireEffectif {
        $this->detailsPartsDirectes = $detailsPartsDirectes;
        return $this;
    }

    /**
     * Set the détails parts indirectes.
     *
     * @param DetailsIndirects|null $detailsPartsIndirectes The détails parts indirectes.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsPartsIndirectes(?DetailsIndirects $detailsPartsIndirectes): BeneficiaireEffectif {
        $this->detailsPartsIndirectes = $detailsPartsIndirectes;
        return $this;
    }

    /**
     * Set the détails parts vocation titulaire.
     *
     * @param DetailsPartsVocationTitulaire|null $detailsPartsVocationTitulaire The détails parts vocation titulaire.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsPartsVocationTitulaire(?DetailsPartsVocationTitulaire $detailsPartsVocationTitulaire): BeneficiaireEffectif {
        $this->detailsPartsVocationTitulaire = $detailsPartsVocationTitulaire;
        return $this;
    }

    /**
     * Set the détails société gestion.
     *
     * @param DetailsSocieteGestion|null $detailsSocieteGestion The détails société gestion.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsSocieteGestion(?DetailsSocieteGestion $detailsSocieteGestion): BeneficiaireEffectif {
        $this->detailsSocieteGestion = $detailsSocieteGestion;
        return $this;
    }

    /**
     * Set the détails votes directs.
     *
     * @param DetailsDirects|null $detailsVotesDirects The détails votes directs
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsVotesDirects(?DetailsDirects $detailsVotesDirects): BeneficiaireEffectif {
        $this->detailsVotesDirects = $detailsVotesDirects;
        return $this;
    }

    /**
     * Set the détails votes indirects.
     *
     * @param DetailsIndirects|null $detailsVotesIndirects The détails votes indirects.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetailsVotesIndirects(?DetailsIndirects $detailsVotesIndirects): BeneficiaireEffectif {
        $this->detailsVotesIndirects = $detailsVotesIndirects;
        return $this;
    }

    /**
     * Set the détention autres moyens contrôle.
     *
     * @param bool|null $detentionAutresMoyensControle The détention autres moyens contrôle.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetentionAutresMoyensControle(?bool $detentionAutresMoyensControle): BeneficiaireEffectif {
        $this->detentionAutresMoyensControle = $detentionAutresMoyensControle;
        return $this;
    }

    /**
     * Set the détention pouvoir décision AG.
     *
     * @param bool|null $detentionPouvoirDecisionAg The détention pouvoir décision AG.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetentionPouvoirDecisionAg(?bool $detentionPouvoirDecisionAg): BeneficiaireEffectif {
        $this->detentionPouvoirDecisionAg = $detentionPouvoirDecisionAg;
        return $this;
    }

    /**
     * Set the détention pouvoir nom membre conseil administration.
     *
     * @param bool|null $detentionPouvoirNomMembreConseilAdministration The détention pouvoir nom membre conseil administration.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setDetentionPouvoirNomMembreConseilAdministration(?bool $detentionPouvoirNomMembreConseilAdministration): BeneficiaireEffectif {
        $this->detentionPouvoirNomMembreConseilAdministration = $detentionPouvoirNomMembreConseilAdministration;
        return $this;
    }

    /**
     * Set the nom usage.
     *
     * @param string|null $nomUsage The nom usage.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setNomUsage(?string $nomUsage): BeneficiaireEffectif {
        $this->nomUsage = $nomUsage;
        return $this;
    }

    /**
     * Set the pourcentage parts.
     *
     * @param int|null $pourcentageParts The pourcentage parts.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentageParts(?int $pourcentageParts): BeneficiaireEffectif {
        $this->pourcentageParts = $pourcentageParts;
        return $this;
    }

    /**
     * Set the pourcentages parts directes.
     *
     * @param int|null $pourcentagePartsDirectes The pourcentage parts directes.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentagePartsDirectes(?int $pourcentagePartsDirectes): BeneficiaireEffectif {
        $this->pourcentagePartsDirectes = $pourcentagePartsDirectes;
        return $this;
    }

    /**
     * Set the pourcentage parts indirectes.
     *
     * @param int|null $pourcentagePartsIndirectes The pourcentage parts indirectes.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentagePartsIndirectes(?int $pourcentagePartsIndirectes): BeneficiaireEffectif {
        $this->pourcentagePartsIndirectes = $pourcentagePartsIndirectes;
        return $this;
    }

    /**
     * Set the pourcentage parts vocation titulaire.
     *
     * @param int|null $pourcentagePartsVocationTitulaire The pourcentage parts vocation titulaire.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentagePartsVocationTitulaire(?int $pourcentagePartsVocationTitulaire): BeneficiaireEffectif {
        $this->pourcentagePartsVocationTitulaire = $pourcentagePartsVocationTitulaire;
        return $this;
    }

    /**
     * Set the pourcentage votes.
     *
     * @param int|null $pourcentageVotes The pourcentage votes.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentageVotes(?int $pourcentageVotes): BeneficiaireEffectif {
        $this->pourcentageVotes = $pourcentageVotes;
        return $this;
    }

    /**
     * Set the pourcentage votes directs.
     *
     * @param int|null $pourcentageVotesDirects Set the pourcentage votes directs.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentageVotesDirects(?int $pourcentageVotesDirects): BeneficiaireEffectif {
        $this->pourcentageVotesDirects = $pourcentageVotesDirects;
        return $this;
    }

    /**
     * Set the pourcentage votes indirects.
     *
     * @param int|null $pourcentageVotesIndirects The pourcentage votes indirects.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPourcentageVotesIndirects(?int $pourcentageVotesIndirects): BeneficiaireEffectif {
        $this->pourcentageVotesIndirects = $pourcentageVotesIndirects;
        return $this;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string|null $pseudonyme The pseudonyme.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setPseudonyme(?string $pseudonyme): BeneficiaireEffectif {
        $this->pseudonyme = $pseudonyme;
        return $this;
    }

    /**
     * Set the représentant légal placement sans gestion délégation.
     *
     * @param bool|null $representantLegalPlacementSansGestionDelegation The représentant légal placement sans gestion délégation.
     * @return BeneficiaireEffectif Returns this bénéficiaire effectif.
     */
    public function setRepresentantLegalPlacementSansGestionDelegation(?bool $representantLegalPlacementSansGestionDelegation): BeneficiaireEffectif {
        $this->representantLegalPlacementSansGestionDelegation = $representantLegalPlacementSansGestionDelegation;
        return $this;
    }
}