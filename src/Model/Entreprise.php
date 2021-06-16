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

use WBW\Library\Pappers\Model\Attribute\ArrayPublicationsBodaccTrait;
use WBW\Library\Pappers\Model\Attribute\BooleanEntrepriseCesseeTrait;
use WBW\Library\Pappers\Model\Attribute\BooleanPersonneMoraleTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerAnneeEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerCapitalTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerChiffreAffairesTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerEffectifMaxTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerEffectifMinTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerResultatTrait;
use WBW\Library\Pappers\Model\Attribute\StringCategorieJuridiqueTrait;
use WBW\Library\Pappers\Model\Attribute\StringCodeNafTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateClotureExerciceTrait;
use WBW\Library\Pappers\Model\Attribute\StringDenominationTrait;
use WBW\Library\Pappers\Model\Attribute\StringEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\StringGreffeTrait;
use WBW\Library\Pappers\Model\Attribute\StringMentionTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomEntrepriseTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringObjetSocialTrait;
use WBW\Library\Pappers\Model\Attribute\StringPrenomTrait;
use WBW\Library\Pappers\Model\Attribute\StringSirenTrait;
use WBW\Library\Pappers\Model\Attribute\StringStatutRcsTrait;
use WBW\Library\Pappers\Model\Attribute\StringTrancheEffectifTrait;

/**
 * Entreprise.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Entreprise {

    use ArrayPublicationsBodaccTrait;
    use BooleanEntrepriseCesseeTrait;
    use BooleanPersonneMoraleTrait;
    use IntegerAnneeEffectifTrait;
    use IntegerCapitalTrait;
    use IntegerChiffreAffairesTrait;
    use IntegerEffectifMaxTrait;
    use IntegerEffectifMinTrait;
    use IntegerResultatTrait;
    use StringCategorieJuridiqueTrait;
    use StringCodeNafTrait;
    use StringDateClotureExerciceTrait;
    use StringDenominationTrait;
    use StringEffectifTrait;
    use StringGreffeTrait;
    use StringMentionTrait;
    use StringNomEntrepriseTrait;
    use StringNomTrait;
    use StringObjetSocialTrait;
    use StringPrenomTrait;
    use StringSirenTrait;
    use StringStatutRcsTrait;
    use StringTrancheEffectifTrait;

    /**
     * Année finances.
     *
     * @var string|null
     */
    private $anneeFinances;

    /**
     * Associé unique.
     *
     * @var bool|null
     */
    private $associeUnique;

    /**
     * Bénéficiaires effectifs.
     *
     * @var BeneficiaireEffectif[]
     */
    private $beneficiairesEffectifs;

    /**
     * Capital actuel variable.
     *
     * @var int|null
     */
    private $capitalActuelVariable;

    /**
     * Capital formaté.
     *
     * @var string|null
     */
    private $capitalFormate;

    /**
     * Comptes.
     *
     * @var Compte[]
     */
    private $comptes;

    /**
     * Conventions collectives.
     *
     * @var ConventionCollective[]
     */
    private $conventionCollectives;

    /**
     * Date cessation.
     *
     * @var string|null
     */
    private $dateCessation;

    /**
     * Date clôture exceptionnelle.
     *
     * @var string|null
     */
    private $dateClotureExceptionnelle;

    /**
     * Date clôture exercice exceptionnelle.
     *
     * @var string|null
     */
    private $dateClotureExerciceExceptionnelle;

    /**
     * Date clôture exercice exceptionnelle formaté.
     *
     * @var string|null
     */
    private $dateClotureExerciceExceptionnelleFormate;

    /**
     * Date création.
     *
     * @var string|null
     */
    private $dateCreation;

    /**
     * Date création formaté.
     *
     * @var string|null
     */
    private $dateCreationFormate;

    /**
     * Date immatriculation R.C.S.
     *
     * @var string|null
     */
    private $dateImmatriculationRcs;

    /**
     * Date première immatriculation R.C.S.
     *
     * @var string|null
     */
    private $datePremiereImmatriculationRcs;

    /**
     * Date radiation R.C.S.
     *
     * @var string|null
     */
    private $dateRadiationRcs;

    /**
     * Dépôts actes.
     *
     * @var DepotActe[]
     */
    private $depotsActes;

    /**
     * Dernier traitement.
     *
     * @var string|null
     */
    private $dernierTraitement;

    /**
     * Dernière mise jour R.C.S.
     *
     * @var string|null
     */
    private $derniereMiseJourRcs;

    /**
     * Dernière mise jour SIRENE.
     *
     * @var string|null
     */
    private $derniereMiseJourSirene;

    /**
     * Derniers statuts.
     *
     * @var Statuts|null
     */
    private $derniersStatuts;

    /**
     * Devise capital.
     *
     * @var string|null
     */
    private $deviseCapital;

    /**
     * Diffusable.
     *
     * @var bool|null
     */
    private $diffusable;

    /**
     * Documents.
     *
     * @var Document[]
     */
    private $documents;

    /**
     * Domaine activité.
     *
     * @var string|null
     */
    private $domaineActivite;

    /**
     * Durée personne morale.
     *
     * @var string|null
     */
    private $dureePersonneMorale;

    /**
     * Economie sociale solidaire.
     *
     * @var bool|null
     */
    private $economieSocialeSolidaire;

    /**
     * Effectifs finances.
     *
     * @var int|null
     */
    private $effectifsFinances;

    /**
     * Entreprise employeuse.
     *
     * @var bool|null
     */
    private $entrepriseEmployeuse;

    /**
     * Etablissements.
     *
     * @var Etablissement[]
     */
    private $etablissements;

    /**
     * Extrait immatriculation.
     *
     * @var ExtraitImmatriculation|null
     */
    private $extraitImmatriculation;

    /**
     * Finances.
     *
     * @var Finance[]
     */
    private $finances;

    /**
     * Forme juridique.
     *
     * @var string|null
     */
    private $formeJuridique;

    /**
     * Libellé code NAF.
     *
     * @var string|null
     */
    private $libelleCodeNaf;

    /**
     * Nb dirigeants total.
     *
     * @var int|null
     */
    private $nbDirigeantsTotal;

    /**
     * Nb documents avec mentions.
     *
     * @var int|null
     */
    private $nbDocumentsAvecMentions;

    /**
     * Nb documents total.
     *
     * @var int|null
     */
    private $nbDocumentsTotal;

    /**
     * Nb publications avec mentions.
     *
     * @var int|null
     */
    private $nbPublicationsAvecMentions;

    /**
     * Nb publications total.
     *
     * @var int|null
     */
    private $nbPublicationsTotal;

    /**
     * Numéro R.C.S.
     *
     * @var string|null
     */
    private $numeroRcs;

    /**
     * Numéro T.V.A. intracommunautaire.
     *
     * @var string|null
     */
    private $numeroTvaIntracommunautaire;

    /**
     * Procédure collective en cours.
     *
     * @var bool|null
     */
    private $procedureCollectiveEnCours;

    /**
     * Procédure collective existe.
     *
     * @var bool|null
     */
    private $procedureCollectiveExiste;

    /**
     * Procédures collectives.
     *
     * @var ProcedureCollective[]
     */
    private $proceduresCollectives;

    /**
     * Prochaine date clôture exercice.
     *
     * @var string|null
     */
    private $prochaineDateClotureExercice;

    /**
     * Prochaine date clôture exercice formaté.
     *
     * @var string|null
     */
    private $prochaineDateClotureExerciceFormate;

    /**
     * Représentants.
     *
     * @var Representant[]
     */
    private $representants;

    /**
     * Sexe.
     *
     * @var string|null
     */
    private $sexe;

    /**
     * Siege.
     *
     * @var Etablissement|null
     */
    private $siege;

    /**
     * Sigle.
     *
     * @var string|null
     */
    private $sigle;

    /**
     * SIREN formaté.
     *
     * @var string|null
     */
    private $sirenFormate;

    /**
     * Villes.
     *
     * @var string[]
     */
    private $villes;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setBeneficiairesEffectifs([]);
        $this->setComptes([]);
        $this->setConventionCollectives([]);
        $this->setDepotsActes([]);
        $this->setDocuments([]);
        $this->setEtablissements([]);
        $this->setFinances([]);
        $this->setProceduresCollectives([]);
        $this->setPublicationsBodacc([]);
        $this->setRepresentants([]);
        $this->setVilles([]);
    }

    /**
     * Add a bénéficiaire effectif.
     *
     * @param BeneficiaireEffectif $beneficiaireEffectif The bénéficiaire effectif.
     * @return Entreprise Returns this entreprise.
     */
    public function addBeneficiaireEffectif(BeneficiaireEffectif $beneficiaireEffectif): Entreprise {
        $this->beneficiairesEffectifs[] = $beneficiaireEffectif;
        return $this;
    }

    /**
     * Add a compte.
     *
     * @param Compte $compte The compte.
     * @return Entreprise Returns this entreprise.
     */
    public function addCompte(Compte $compte): Entreprise {
        $this->comptes[] = $compte;
        return $this;
    }

    /**
     * Add a convention collective.
     *
     * @param ConventionCollective $conventionCollective The convention collective.
     * @return Entreprise Returns this entreprise.
     */
    public function addConventionCollective(ConventionCollective $conventionCollective): Entreprise {
        $this->conventionCollectives[] = $conventionCollective;
        return $this;
    }

    /**
     * Add a dépôt acte.
     *
     * @param DepotActe $depotActe The dépôt acte.
     * @return Entreprise Returns this entreprise.
     */
    public function addDepotActe(DepotActe $depotActe): Entreprise {
        $this->depotsActes[] = $depotActe;
        return $this;
    }

    /**
     * Add a document.
     *
     * @param Document $document The document.
     * @return Entreprise Returns this entreprise.
     */
    public function addDocument(Document $document): Entreprise {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * Add an établissement.
     *
     * @param Etablissement $etablissement The établissement.
     * @return $this
     */
    public function addEtablissement(Etablissement $etablissement): Entreprise {
        $this->etablissements[] = $etablissement;
        return $this;
    }

    /**
     * Add a finance.
     *
     * @param Finance $finance The finance.
     * @return Entreprise Returns this entreprise.
     */
    public function addFinance(Finance $finance): Entreprise {
        $this->finances[] = $finance;
        return $this;
    }

    /**
     * Add a procédure collective.
     *
     * @param ProcedureCollective $procedureCollective The procédure collective.
     * @return Entreprise Returns this entreprise.
     */
    public function addProcedureCollective(ProcedureCollective $procedureCollective): Entreprise {
        $this->proceduresCollectives[] = $procedureCollective;
        return $this;
    }

    /**
     * Add a représentant.
     *
     * @param Representant $representant The représentant.
     * @return $this
     */
    public function addRepresentant(Representant $representant): Entreprise {
        $this->representants[] = $representant;
        return $this;
    }

    /**
     * Get the année finances.
     *
     * @return string|null Returns the année finances.
     */
    public function getAnneeFinances(): ?string {
        return $this->anneeFinances;
    }

    /**
     * Get the associé unique.
     *
     * @return bool|null Returns the associé unique.
     */
    public function getAssocieUnique(): ?bool {
        return $this->associeUnique;
    }

    /**
     * Get the bénéficiaires effectifs.
     *
     * @return BeneficiaireEffectif[] Returns the bénéficiaires effectifs.
     */
    public function getBeneficiairesEffectifs(): array {
        return $this->beneficiairesEffectifs;
    }

    /**
     * Get the capital actuel variable.
     *
     * @return int|null Returns the capital actuel variable.
     */
    public function getCapitalActuelVariable(): ?int {
        return $this->capitalActuelVariable;
    }

    /**
     * Get the capital formaté.
     *
     * @return string|null Returns the capital formaté.
     */
    public function getCapitalFormate(): ?string {
        return $this->capitalFormate;
    }

    /**
     * Get the comptes.
     *
     * @return Compte[] Returns the comptes.
     */
    public function getComptes(): array {
        return $this->comptes;
    }

    /**
     * Get the conventions collectives.
     *
     * @return ConventionCollective[] Returns the conventions collectives.
     */
    public function getConventionCollectives(): array {
        return $this->conventionCollectives;
    }

    /**
     * Get the date cessation.
     *
     * @return string|null Returns the date cessation.
     */
    public function getDateCessation(): ?string {
        return $this->dateCessation;
    }

    /**
     * Get the date clôture exceptionnelle.
     *
     * @return string|null Returns the date clôture exceptionnelle.
     */
    public function getDateClotureExceptionnelle(): ?string {
        return $this->dateClotureExceptionnelle;
    }

    /**
     * Get the date clôture exercice exceptionnelle.
     *
     * @return string|null Returns the date clôture exercice exceptionnelle.
     */
    public function getDateClotureExerciceExceptionnelle(): ?string {
        return $this->dateClotureExerciceExceptionnelle;
    }

    /**
     * Get the date clôture exercice exceptionnelle formaté.
     *
     * @return string|null Returns the date clôture exercice exceptionnelle formaté.
     */
    public function getDateClotureExerciceExceptionnelleFormate(): ?string {
        return $this->dateClotureExerciceExceptionnelleFormate;
    }

    /**
     * Get the date création.
     *
     * @return string|null Returns the date création.
     */
    public function getDateCreation(): ?string {
        return $this->dateCreation;
    }

    /**
     * Get the date création formaté.
     *
     * @return string|null Returns the date création formaté.
     */
    public function getDateCreationFormate(): ?string {
        return $this->dateCreationFormate;
    }

    /**
     * Get the date immatriculation R.C.S.
     *
     * @return string|null Returns the date immatriculation R.C.S.
     */
    public function getDateImmatriculationRcs(): ?string {
        return $this->dateImmatriculationRcs;
    }

    /**
     * Get the date première immatriculation R.C.S.
     *
     * @return string|null Returns the date première immatriculation R.C.S.
     */
    public function getDatePremiereImmatriculationRcs(): ?string {
        return $this->datePremiereImmatriculationRcs;
    }

    /**
     * Get the date radiation R.C.S.
     *
     * @return string|null Returns the date radiation R.C.S.
     */
    public function getDateRadiationRcs(): ?string {
        return $this->dateRadiationRcs;
    }

    /**
     * Get the dépôts actes.
     *
     * @return DepotActe[] Returns the dépôts actes.
     */
    public function getDepotsActes(): array {
        return $this->depotsActes;
    }

    /**
     * Get the dernier traitement.
     *
     * @return string|null Returns the dernier traitement.
     */
    public function getDernierTraitement(): ?string {
        return $this->dernierTraitement;
    }

    /**
     * Get the dernière mise jour R.C.S.
     *
     * @return string|null Returns the dernière mise jour R.C.S.
     */
    public function getDerniereMiseJourRcs(): ?string {
        return $this->derniereMiseJourRcs;
    }

    /**
     * Get the dernière mise jour SIRENE.
     *
     * @return string|null Returns the dernière mise jour SIRENE.
     */
    public function getDerniereMiseJourSirene(): ?string {
        return $this->derniereMiseJourSirene;
    }

    /**
     * Get the derniers statuts.
     *
     * @return Statuts|null Returns the derniers statuts.
     */
    public function getDerniersStatuts(): ?Statuts {
        return $this->derniersStatuts;
    }

    /**
     * Get the devise capital.
     *
     * @return string|null Returns the devise capital.
     */
    public function getDeviseCapital(): ?string {
        return $this->deviseCapital;
    }

    /**
     * Get the diffusable.
     *
     * @return bool|null Returns the diffusable.
     */
    public function getDiffusable(): ?bool {
        return $this->diffusable;
    }

    /**
     * Get the document.
     *
     * @return Document[] Returns the documents.
     */
    public function getDocuments(): array {
        return $this->documents;
    }

    /**
     * Get the domaine activité.
     *
     * @return string|null Returns the domaine activité.
     */
    public function getDomaineActivite(): ?string {
        return $this->domaineActivite;
    }

    /**
     * Get the durée personne morale.
     *
     * @return string|null Returns the durée personne morale.
     */
    public function getDureePersonneMorale(): ?string {
        return $this->dureePersonneMorale;
    }

    /**
     * Get the économie sociale morale.
     *
     * @return bool|null Returns the économie sociale solidaire.
     */
    public function getEconomieSocialeSolidaire(): ?bool {
        return $this->economieSocialeSolidaire;
    }

    /**
     * Get the effectifs finances.
     *
     * @return int|null Returns the effectifs finances.
     */
    public function getEffectifsFinances(): ?int {
        return $this->effectifsFinances;
    }

    /**
     * Get the entreprise employeuse.
     *
     * @return bool|null Returns the entreprise employeuse.
     */
    public function getEntrepriseEmployeuse(): ?bool {
        return $this->entrepriseEmployeuse;
    }

    /**
     * Get the établissements.
     *
     * @return Etablissement[] Returns the établissements.
     */
    public function getEtablissements(): array {
        return $this->etablissements;
    }

    /**
     * Get theextrait immatriculation.
     *
     * @return ExtraitImmatriculation|null Returns the immatriculation.
     */
    public function getExtraitImmatriculation(): ?ExtraitImmatriculation {
        return $this->extraitImmatriculation;
    }

    /**
     * Get the finances.
     *
     * @return Finance[] Returns the finances.
     */
    public function getFinances(): array {
        return $this->finances;
    }

    /**
     * Get the forme juridique.
     *
     * @return string|null Returns the forme juridique.
     */
    public function getFormeJuridique(): ?string {
        return $this->formeJuridique;
    }

    /**
     * Get the libellé code NAF.
     *
     * @return string|null Returns the libellé code NAF.
     */
    public function getLibelleCodeNaf(): ?string {
        return $this->libelleCodeNaf;
    }

    /**
     * Get the nb dirigeants total.
     *
     * @return int|null Returns the nb dirigeants total.
     */
    public function getNbDirigeantsTotal(): ?int {
        return $this->nbDirigeantsTotal;
    }

    /**
     * Get the nb documents avec mentions.
     *
     * @return int|null Returns the nb documents avec mentions.
     */
    public function getNbDocumentsAvecMentions(): ?int {
        return $this->nbDocumentsAvecMentions;
    }

    /**
     * Get the nb documents total.
     *
     * @return int|null Returns the nb documents total.
     */
    public function getNbDocumentsTotal(): ?int {
        return $this->nbDocumentsTotal;
    }

    /**
     * Get the nb publications avec mentions.
     *
     * @return int|null Returns the nb publications avec mentions.
     */
    public function getNbPublicationsAvecMentions(): ?int {
        return $this->nbPublicationsAvecMentions;
    }

    /**
     * Get the nb publications total.
     *
     * @return int|null Returns the nb publications total.
     */
    public function getNbPublicationsTotal(): ?int {
        return $this->nbPublicationsTotal;
    }

    /**
     * Get the numéro R.C.S.
     *
     * @return string|null Returns the numéro R.C.S.
     */
    public function getNumeroRcs(): ?string {
        return $this->numeroRcs;
    }

    /**
     * Get the numéro T.V.A. intracommunautaire.
     *
     * @return string|null Returns the numéro T.V.A. intracommunautaire.
     */
    public function getNumeroTvaIntracommunautaire(): ?string {
        return $this->numeroTvaIntracommunautaire;
    }

    /**
     * Get the procédure collective en cours.
     *
     * @return bool|null Returns teh procédure collective en cours.
     */
    public function getProcedureCollectiveEnCours(): ?bool {
        return $this->procedureCollectiveEnCours;
    }

    /**
     * Get the procédure collective existe.
     *
     * @return bool|null Returns the procédure collective existe.
     */
    public function getProcedureCollectiveExiste(): ?bool {
        return $this->procedureCollectiveExiste;
    }

    /**
     * Get the procédures collectives.
     *
     * @return ProcedureCollective[] Returns the procédures collectives.
     */
    public function getProceduresCollectives(): array {
        return $this->proceduresCollectives;
    }

    /**
     * Get the prochaine date clôture exercice.
     *
     * @return string|null Returns the prochaine date clôture exercice.
     */
    public function getProchaineDateClotureExercice(): ?string {
        return $this->prochaineDateClotureExercice;
    }

    /**
     * Get the prochaine date clôture exercice formaté.
     *
     * @return string|null Returns the prochaine date clôture exercice formaté.
     */
    public function getProchaineDateClotureExerciceFormate(): ?string {
        return $this->prochaineDateClotureExerciceFormate;
    }

    /**
     * Get the représentants.
     *
     * @return Representant[] Returns the représentants.
     */
    public function getRepresentants(): array {
        return $this->representants;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Get the siège.
     *
     * @return Etablissement|null Returns the siège.
     */
    public function getSiege(): ?Etablissement {
        return $this->siege;
    }

    /**
     * Get the sigle.
     *
     * @return string|null Returns the sigle.
     */
    public function getSigle(): ?string {
        return $this->sigle;
    }

    /**
     * Get the SIREN formaté.
     *
     * @return string|null Returns the SIREN formaté.
     */
    public function getSirenFormate(): ?string {
        return $this->sirenFormate;
    }

    /**
     * Get the villes.
     *
     * @return string[] Returns the villes.
     */
    public function getVilles(): array {
        return $this->villes;
    }

    /**
     * Set the année finances.
     *
     * @param string|null $anneeFinances The année finances.
     * @return Entreprise Returns this entreprise.
     */
    public function setAnneeFinances(?string $anneeFinances): Entreprise {
        $this->anneeFinances = $anneeFinances;
        return $this;
    }

    /**
     * Set the associé unique.
     *
     * @param bool|null $associeUnique The associé unique.
     * @return Entreprise Returns this entreprise.
     */
    public function setAssocieUnique(?bool $associeUnique): Entreprise {
        $this->associeUnique = $associeUnique;
        return $this;
    }

    /**
     * Set the bénéficiaires effectifs.
     *
     * @param BeneficiaireEffectif[] $beneficiairesEffectifs The bénéficiaires effectifs.
     * @return Entreprise Returns this entreprise.
     */
    protected function setBeneficiairesEffectifs(array $beneficiairesEffectifs): Entreprise {
        $this->beneficiairesEffectifs = $beneficiairesEffectifs;
        return $this;
    }

    /**
     * Set the capital actuel variable.
     *
     * @param mixed $capitalActuelVariable The capital actuel variable.
     * @return Entreprise Returns this entreprise.
     */
    public function setCapitalActuelVariable(?int $capitalActuelVariable): Entreprise {
        $this->capitalActuelVariable = $capitalActuelVariable;
        return $this;
    }

    /**
     * Set the capital formaté.
     *
     * @param string|null $capitalFormate The capital formaté.
     * @return Entreprise Returns this entreprise.
     */
    public function setCapitalFormate(?string $capitalFormate): Entreprise {
        $this->capitalFormate = $capitalFormate;
        return $this;
    }

    /**
     * Set the comptes.
     *
     * @param Compte[] $comptes The comptes.
     * @return Entreprise Returns this entreprise.
     */
    protected function setComptes(array $comptes): Entreprise {
        $this->comptes = $comptes;
        return $this;
    }

    /**
     * Set the conventions collectives.
     *
     * @param ConventionCollective[] $conventionCollectives The conventions collectives.
     * @return Entreprise Returns this entreprise.
     */
    protected function setConventionCollectives(array $conventionCollectives): Entreprise {
        $this->conventionCollectives = $conventionCollectives;
        return $this;
    }

    /**
     * Set the date cessation.
     *
     * @param string|null $dateCessation The date cessation.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateCessation(?string $dateCessation): Entreprise {
        $this->dateCessation = $dateCessation;
        return $this;
    }

    /**
     * Set the date clôture exceptionnelle.
     *
     * @param string|null $dateClotureExceptionnelle The date clôture exceptionnelle.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExceptionnelle(?string $dateClotureExceptionnelle): Entreprise {
        $this->dateClotureExceptionnelle = $dateClotureExceptionnelle;
        return $this;
    }

    /**
     * Set the date clôture exercice exceptionnelle.
     *
     * @param string|null $dateClotureExerciceExceptionnelle The date clôture exercice exceptionnelle.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExerciceExceptionnelle(?string $dateClotureExerciceExceptionnelle): Entreprise {
        $this->dateClotureExerciceExceptionnelle = $dateClotureExerciceExceptionnelle;
        return $this;
    }

    /**
     * Set the date clôture exercice exceptionnelle formaté.
     *
     * @param string|null $dateClotureExerciceExceptionnelleFormate The date clôture exercice exceptionnelle formaté.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExerciceExceptionnelleFormate(?string $dateClotureExerciceExceptionnelleFormate): Entreprise {
        $this->dateClotureExerciceExceptionnelleFormate = $dateClotureExerciceExceptionnelleFormate;
        return $this;
    }

    /**
     * Set the date création.
     *
     * @param string|null $dateCreation The date création.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateCreation(?string $dateCreation): Entreprise {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date création formaté.
     *
     * @param string|null $dateCreationFormate The date création formaté.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateCreationFormate(?string $dateCreationFormate): Entreprise {
        $this->dateCreationFormate = $dateCreationFormate;
        return $this;
    }

    /**
     * Set the date immatriculation R.C.S.
     *
     * @param string|null $dateImmatriculationRcs The date immatriculation R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateImmatriculationRcs(?string $dateImmatriculationRcs): Entreprise {
        $this->dateImmatriculationRcs = $dateImmatriculationRcs;
        return $this;
    }

    /**
     * Set the date première immatriculation R.C.S.
     *
     * @param string|null $datePremiereImmatriculationRcs The date première immatriculation R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setDatePremiereImmatriculationRcs(?string $datePremiereImmatriculationRcs): Entreprise {
        $this->datePremiereImmatriculationRcs = $datePremiereImmatriculationRcs;
        return $this;
    }

    /**
     * Get the date radiation R.C.S.
     *
     * @param string|null $dateRadiationRcs The date radiation R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateRadiationRcs(?string $dateRadiationRcs): Entreprise {
        $this->dateRadiationRcs = $dateRadiationRcs;
        return $this;
    }

    /**
     * Set the dépôts actes.
     *
     * @param DepotActe[] $depotsActes The dépôts actes.
     * @return Entreprise Returns this entreprise.
     */
    protected function setDepotsActes(array $depotsActes): Entreprise {
        $this->depotsActes = $depotsActes;
        return $this;
    }

    /**
     * Set the dernier traitement.
     *
     * @param string|null $dernierTraitement The dernier traitement.
     * @return Entreprise Returns this entreprise.
     */
    public function setDernierTraitement(?string $dernierTraitement): Entreprise {
        $this->dernierTraitement = $dernierTraitement;
        return $this;
    }

    /**
     * Set the dernière mise jour R.C.S.
     *
     * @param string|null $derniereMiseJourRcs The dernière mise jour R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setDerniereMiseJourRcs(?string $derniereMiseJourRcs): Entreprise {
        $this->derniereMiseJourRcs = $derniereMiseJourRcs;
        return $this;
    }

    /**
     * Set the dernière mise jour SIRENE.
     *
     * @param string|null $derniereMiseJourSirene The dernière mise jour SIRENE.
     * @return Entreprise Returns this entreprise.
     */
    public function setDerniereMiseJourSirene(?string $derniereMiseJourSirene): Entreprise {
        $this->derniereMiseJourSirene = $derniereMiseJourSirene;
        return $this;
    }

    /**
     * Set the derniers statuts.
     *
     * @param Statuts|null $derniersStatuts The derniers statuts.
     * @return Entreprise Returns this entreprise.
     */
    public function setDerniersStatuts(?Statuts $derniersStatuts): Entreprise {
        $this->derniersStatuts = $derniersStatuts;
        return $this;
    }

    /**
     * Set the devise capital.
     *
     * @param string|null $deviseCapital The devise capital.
     * @return Entreprise Returns this entreprise.
     */
    public function setDeviseCapital(?string $deviseCapital): Entreprise {
        $this->deviseCapital = $deviseCapital;
        return $this;
    }

    /**
     * Set the diffusable.
     *
     * @param bool|null $diffusable The diffusable.
     * @return Entreprise Returns this entreprise.
     */
    public function setDiffusable(?bool $diffusable): Entreprise {
        $this->diffusable = $diffusable;
        return $this;
    }

    /**
     * Set the documents.
     *
     * @param Document[] $documents The documents.
     * @return Entreprise Returns this entreprise.
     */
    protected function setDocuments(array $documents): Entreprise {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Set the domaine activité.
     *
     * @param string|null $domaineActivite The domaine activité.
     * @return Entreprise Returns this entreprise.
     */
    public function setDomaineActivite(?string $domaineActivite): Entreprise {
        $this->domaineActivite = $domaineActivite;
        return $this;
    }

    /**
     * Set the durée personne morale.
     *
     * @param string|null $dureePersonneMorale The durée personne morale.
     * @return Entreprise Returns this entreprise.
     */
    public function setDureePersonneMorale(?string $dureePersonneMorale): Entreprise {
        $this->dureePersonneMorale = $dureePersonneMorale;
        return $this;
    }

    /**
     * Set the économie sociale solidaire.
     *
     * @param bool|null $economieSocialeSolidaire The économie sociale solidaire.
     * @return Entreprise Returns this entreprise.
     */
    public function setEconomieSocialeSolidaire(?bool $economieSocialeSolidaire): Entreprise {
        $this->economieSocialeSolidaire = $economieSocialeSolidaire;
        return $this;
    }

    /**
     * Set the effectifs finances.
     *
     * @param int|null $effectifsFinances The effectifs finances.
     * @return Entreprise Returns this entreprise.
     */
    public function setEffectifsFinances(?int $effectifsFinances): Entreprise {
        $this->effectifsFinances = $effectifsFinances;
        return $this;
    }

    /**
     * Set the entreprise employeuse.
     *
     * @param bool|null $entrepriseEmployeuse The entreprise employeuse.
     * @return Entreprise Returns this entreprise.
     */
    public function setEntrepriseEmployeuse(?bool $entrepriseEmployeuse): Entreprise {
        $this->entrepriseEmployeuse = $entrepriseEmployeuse;
        return $this;
    }

    /**
     * Set the établissements.
     *
     * @param Etablissement[] $etablissements The établissement.
     * @return Entreprise Returns this entreprise.
     */
    protected function setEtablissements(array $etablissements): Entreprise {
        $this->etablissements = $etablissements;
        return $this;
    }

    /**
     * Set the extrait immatriculation.
     *
     * @param ExtraitImmatriculation|null $extraitImmatriculation The extrait immatriculation.
     * @return Entreprise Returns this entreprise.
     */
    public function setExtraitImmatriculation(?ExtraitImmatriculation $extraitImmatriculation): Entreprise {
        $this->extraitImmatriculation = $extraitImmatriculation;
        return $this;
    }

    /**
     * Set the finances.
     *
     * @param Finance[] $finances The finances.
     * @return Entreprise Returns this entreprise.
     */
    protected function setFinances(array $finances): Entreprise {
        $this->finances = $finances;
        return $this;
    }

    /**
     * Set the forme juridique.
     *
     * @param string|null $formeJuridique The forme juridique.
     * @return Entreprise Returns this entreprise.
     */
    public function setFormeJuridique(?string $formeJuridique): Entreprise {
        $this->formeJuridique = $formeJuridique;
        return $this;
    }

    /**
     * Set the libellé code NAF.
     *
     * @param string|null $libelleCodeNaf The libellé code NAF.
     * @return Entreprise Returns this entreprise.
     */
    public function setLibelleCodeNaf(?string $libelleCodeNaf): Entreprise {
        $this->libelleCodeNaf = $libelleCodeNaf;
        return $this;
    }

    /**
     * Set the nb dirigeants total.
     *
     * @param int|null $nbDirigeantsTotal The nb dirigeants total.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbDirigeantsTotal(?int $nbDirigeantsTotal): Entreprise {
        $this->nbDirigeantsTotal = $nbDirigeantsTotal;
        return $this;
    }

    /**
     * Set the nb documents avec mentions.
     *
     * @param int|null $nbDocumentsAvecMentions The nb documents avec mentions.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbDocumentsAvecMentions(?int $nbDocumentsAvecMentions): Entreprise {
        $this->nbDocumentsAvecMentions = $nbDocumentsAvecMentions;
        return $this;
    }

    /**
     * Set the nb documents total.
     *
     * @param int|null $nbDocumentsTotal The nb documents total.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbDocumentsTotal(?int $nbDocumentsTotal): Entreprise {
        $this->nbDocumentsTotal = $nbDocumentsTotal;
        return $this;
    }

    /**
     * Set the nb publications avec mentions.
     *
     * @param int|null $nbPublicationsAvecMentions The nb publications avec mentions.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbPublicationsAvecMentions(?int $nbPublicationsAvecMentions): Entreprise {
        $this->nbPublicationsAvecMentions = $nbPublicationsAvecMentions;
        return $this;
    }

    /**
     * Set the nb publications total.
     *
     * @param int|null $nbPublicationsTotal The nb publications total.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbPublicationsTotal(?int $nbPublicationsTotal): Entreprise {
        $this->nbPublicationsTotal = $nbPublicationsTotal;
        return $this;
    }

    /**
     * Set the numéro R.C.S.
     *
     * @param string|null $numeroRcs The numéro R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setNumeroRcs(?string $numeroRcs): Entreprise {
        $this->numeroRcs = $numeroRcs;
        return $this;
    }

    /**
     * Set the numéro T.V.A. intracommunautaire.
     *
     * @param string|null $numeroTvaIntracommunautaire The numéro T.V.A. intracommunautaire.
     * @return Entreprise Returns this entreprise.
     */
    public function setNumeroTvaIntracommunautaire(?string $numeroTvaIntracommunautaire): Entreprise {
        $this->numeroTvaIntracommunautaire = $numeroTvaIntracommunautaire;
        return $this;
    }

    /**
     * Set the procédure collective en cours.
     *
     * @param bool|null $procedureCollectiveEnCours The procédure collective en cours.
     * @return Entreprise Returns this entreprise.
     */
    public function setProcedureCollectiveEnCours(?bool $procedureCollectiveEnCours): Entreprise {
        $this->procedureCollectiveEnCours = $procedureCollectiveEnCours;
        return $this;
    }

    /**
     * Set the procédure collective existe.
     *
     * @param bool|null $procedureCollectiveExiste The procédure collective existe.
     * @return Entreprise Returns this entreprise.
     */
    public function setProcedureCollectiveExiste(?bool $procedureCollectiveExiste): Entreprise {
        $this->procedureCollectiveExiste = $procedureCollectiveExiste;
        return $this;
    }

    /**
     * Set the procédures collectives.
     *
     * @param ProcedureCollective[] $proceduresCollectives The procédures collectives.
     * @return Entreprise Returns this entreprise.
     */
    protected function setProceduresCollectives(array $proceduresCollectives): Entreprise {
        $this->proceduresCollectives = $proceduresCollectives;
        return $this;
    }

    /**
     * Set the prochaine date clôture exercice.
     *
     * @param string|null $prochaineDateClotureExercice The prochaine date clôture exercice.
     * @return Entreprise Returns this entreprise.
     */
    public function setProchaineDateClotureExercice(?string $prochaineDateClotureExercice): Entreprise {
        $this->prochaineDateClotureExercice = $prochaineDateClotureExercice;
        return $this;
    }

    /**
     * Set the prochaine date clôture exercice formaté.
     *
     * @param string|null $prochaineDateClotureExerciceFormate The prochaine date clôture exercice formaté.
     * @return Entreprise Returns this entreprise.
     */
    public function setProchaineDateClotureExerciceFormate(?string $prochaineDateClotureExerciceFormate): Entreprise {
        $this->prochaineDateClotureExerciceFormate = $prochaineDateClotureExerciceFormate;
        return $this;
    }

    /**
     * Set the représentants.
     *
     * @param Representant[] $representants The représentants.
     * @return Entreprise Returns this entreprise.
     */
    protected function setRepresentants(array $representants): Entreprise {
        $this->representants = $representants;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return Entreprise Returns this entreprise.
     */
    public function setSexe(?string $sexe): Entreprise {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the siège.
     *
     * @param Etablissement|null $siege The siège.
     * @return Entreprise Returns this entreprise.
     */
    public function setSiege(?Etablissement $siege): Entreprise {
        $this->siege = $siege;
        return $this;
    }

    /**
     * Set the sigle.
     *
     * @param string|null $sigle The sigle.
     * @return Entreprise Returns this entreprise.
     */
    public function setSigle(?string $sigle): Entreprise {
        $this->sigle = $sigle;
        return $this;
    }

    /**
     * Set the SIREN formaté.
     *
     * @param string|null $sirenFormate The SIREN formaté.
     * @return Entreprise Returns this entreprise.
     */
    public function setSirenFormate(?string $sirenFormate): Entreprise {
        $this->sirenFormate = $sirenFormate;
        return $this;
    }

    /**
     * Set the villes.
     *
     * @param string[] $villes The villes.
     * @return Entreprise Returns this entreprise.
     */
    public function setVilles(array $villes): Entreprise {
        $this->villes = $villes;
        return $this;
    }
}
