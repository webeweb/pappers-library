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
use WBW\Library\Pappers\Model\Attribute\StringDateCessationTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateClotureExerciceTrait;
use WBW\Library\Pappers\Model\Attribute\StringDenominationTrait;
use WBW\Library\Pappers\Model\Attribute\StringDeviseCapitalTrait;
use WBW\Library\Pappers\Model\Attribute\StringEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\StringFormeJuridiqueTrait;
use WBW\Library\Pappers\Model\Attribute\StringGreffeTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomEntrepriseTrait;
use WBW\Library\Pappers\Model\Attribute\StringNomTrait;
use WBW\Library\Pappers\Model\Attribute\StringObjetSocialTrait;
use WBW\Library\Pappers\Model\Attribute\StringPrenomTrait;
use WBW\Library\Pappers\Model\Attribute\StringSigleTrait;
use WBW\Library\Pappers\Model\Attribute\StringSirenTrait;
use WBW\Library\Pappers\Model\Attribute\StringStatutRcsTrait;
use WBW\Library\Pappers\Model\Attribute\StringTrancheEffectifTrait;
use WBW\Library\Traits\Strings\StringMentionTrait;

/**
 * Entreprise.
 *
 * @author webeweb <https://github.com/webeweb>
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
    use StringDateCessationTrait;
    use StringDateClotureExerciceTrait;
    use StringDenominationTrait;
    use StringDeviseCapitalTrait;
    use StringEffectifTrait;
    use StringFormeJuridiqueTrait;
    use StringGreffeTrait;
    use StringMentionTrait;
    use StringNomEntrepriseTrait;
    use StringNomTrait;
    use StringObjetSocialTrait;
    use StringPrenomTrait;
    use StringSigleTrait;
    use StringSirenTrait;
    use StringStatutRcsTrait;
    use StringTrancheEffectifTrait;

    /**
     * Ann??e finances.
     *
     * @var string|null
     */
    private $anneeFinances;

    /**
     * Associ?? unique.
     *
     * @var bool|null
     */
    private $associeUnique;

    /**
     * B??n??ficiaires effectifs.
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
     * Capital format??.
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
     * Date cessation format??e.
     *
     * @var string|null
     */
    private $dateCessationFormatee;

    /**
     * Date cl??ture exceptionnelle.
     *
     * @var string|null
     */
    private $dateClotureExceptionnelle;

    /**
     * Date cl??ture exercice exceptionnelle.
     *
     * @var string|null
     */
    private $dateClotureExerciceExceptionnelle;

    /**
     * Date cl??ture exercice exceptionnelle format??.
     *
     * @var string|null
     */
    private $dateClotureExerciceExceptionnelleFormate;

    /**
     * Date cr??ation.
     *
     * @var string|null
     */
    private $dateCreation;

    /**
     * Date cr??ation format??.
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
     * Date premi??re immatriculation R.C.S.
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
     * D??p??ts actes.
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
     * Derni??re mise jour R.C.S.
     *
     * @var string|null
     */
    private $derniereMiseJourRcs;

    /**
     * Derni??re mise jour SIRENE.
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
     * Domaine activit??.
     *
     * @var string|null
     */
    private $domaineActivite;

    /**
     * Dur??e personne morale.
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
     * Libell?? code NAF.
     *
     * @var string|null
     */
    private $libelleCodeNaf;

    /**
     * Nb b??n??ficiaires total.
     *
     * @var int|null
     */
    private $nbBeneficiairesTotal;

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
     * Num??ro R.C.S.
     *
     * @var string|null
     */
    private $numeroRcs;

    /**
     * Num??ro T.V.A. intracommunautaire.
     *
     * @var string|null
     */
    private $numeroTvaIntracommunautaire;

    /**
     * Proc??dure collective en cours.
     *
     * @var bool|null
     */
    private $procedureCollectiveEnCours;

    /**
     * Proc??dure collective existe.
     *
     * @var bool|null
     */
    private $procedureCollectiveExiste;

    /**
     * Proc??dures collectives.
     *
     * @var ProcedureCollective[]
     */
    private $proceduresCollectives;

    /**
     * Prochaine date cl??ture exercice.
     *
     * @var string|null
     */
    private $prochaineDateClotureExercice;

    /**
     * Prochaine date cl??ture exercice format??.
     *
     * @var string|null
     */
    private $prochaineDateClotureExerciceFormate;

    /**
     * Repr??sentants.
     *
     * @var Representant[]
     */
    private $representants;

    /**
     * R.N.M.
     *
     * @var string|null
     */
    private $rnm;

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
     * SIREN format??.
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
     * Add a b??n??ficiaire effectif.
     *
     * @param BeneficiaireEffectif $beneficiaireEffectif The b??n??ficiaire effectif.
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
     * Add a d??p??t acte.
     *
     * @param DepotActe $depotActe The d??p??t acte.
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
     * Add an ??tablissement.
     *
     * @param Etablissement $etablissement The ??tablissement.
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
     * Add a proc??dure collective.
     *
     * @param ProcedureCollective $procedureCollective The proc??dure collective.
     * @return Entreprise Returns this entreprise.
     */
    public function addProcedureCollective(ProcedureCollective $procedureCollective): Entreprise {
        $this->proceduresCollectives[] = $procedureCollective;
        return $this;
    }

    /**
     * Add a repr??sentant.
     *
     * @param Representant $representant The repr??sentant.
     * @return $this
     */
    public function addRepresentant(Representant $representant): Entreprise {
        $this->representants[] = $representant;
        return $this;
    }

    /**
     * Get the ann??e finances.
     *
     * @return string|null Returns the ann??e finances.
     */
    public function getAnneeFinances(): ?string {
        return $this->anneeFinances;
    }

    /**
     * Get the associ?? unique.
     *
     * @return bool|null Returns the associ?? unique.
     */
    public function getAssocieUnique(): ?bool {
        return $this->associeUnique;
    }

    /**
     * Get the b??n??ficiaires effectifs.
     *
     * @return BeneficiaireEffectif[] Returns the b??n??ficiaires effectifs.
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
     * Get the capital format??.
     *
     * @return string|null Returns the capital format??.
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
     * Get the date cessation format??e.
     *
     * @return string|null Returns the date cessation format??e.
     */
    public function getDateCessationFormatee(): ?string {
        return $this->dateCessationFormatee;
    }

    /**
     * Get the date cl??ture exceptionnelle.
     *
     * @return string|null Returns the date cl??ture exceptionnelle.
     */
    public function getDateClotureExceptionnelle(): ?string {
        return $this->dateClotureExceptionnelle;
    }

    /**
     * Get the date cl??ture exercice exceptionnelle.
     *
     * @return string|null Returns the date cl??ture exercice exceptionnelle.
     */
    public function getDateClotureExerciceExceptionnelle(): ?string {
        return $this->dateClotureExerciceExceptionnelle;
    }

    /**
     * Get the date cl??ture exercice exceptionnelle format??.
     *
     * @return string|null Returns the date cl??ture exercice exceptionnelle format??.
     */
    public function getDateClotureExerciceExceptionnelleFormate(): ?string {
        return $this->dateClotureExerciceExceptionnelleFormate;
    }

    /**
     * Get the date cr??ation.
     *
     * @return string|null Returns the date cr??ation.
     */
    public function getDateCreation(): ?string {
        return $this->dateCreation;
    }

    /**
     * Get the date cr??ation format??.
     *
     * @return string|null Returns the date cr??ation format??.
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
     * Get the date premi??re immatriculation R.C.S.
     *
     * @return string|null Returns the date premi??re immatriculation R.C.S.
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
     * Get the d??p??ts actes.
     *
     * @return DepotActe[] Returns the d??p??ts actes.
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
     * Get the derni??re mise jour R.C.S.
     *
     * @return string|null Returns the derni??re mise jour R.C.S.
     */
    public function getDerniereMiseJourRcs(): ?string {
        return $this->derniereMiseJourRcs;
    }

    /**
     * Get the derni??re mise jour SIRENE.
     *
     * @return string|null Returns the derni??re mise jour SIRENE.
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
     * Get the domaine activit??.
     *
     * @return string|null Returns the domaine activit??.
     */
    public function getDomaineActivite(): ?string {
        return $this->domaineActivite;
    }

    /**
     * Get the dur??e personne morale.
     *
     * @return string|null Returns the dur??e personne morale.
     */
    public function getDureePersonneMorale(): ?string {
        return $this->dureePersonneMorale;
    }

    /**
     * Get the ??conomie sociale morale.
     *
     * @return bool|null Returns the ??conomie sociale solidaire.
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
     * Get the ??tablissements.
     *
     * @return Etablissement[] Returns the ??tablissements.
     */
    public function getEtablissements(): array {
        return $this->etablissements;
    }

    /**
     * Get the extrait immatriculation.
     *
     * @return ExtraitImmatriculation|null Returns the extrait immatriculation.
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
     * Get the libell?? code NAF.
     *
     * @return string|null Returns the libell?? code NAF.
     */
    public function getLibelleCodeNaf(): ?string {
        return $this->libelleCodeNaf;
    }

    /**
     * Get the nb b??n??ficiaires total.
     *
     * @return int|null Returns the nb b??n??ficiaires total.
     */
    public function getNbBeneficiairesTotal(): ?int {
        return $this->nbBeneficiairesTotal;
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
     * Get the num??ro R.C.S.
     *
     * @return string|null Returns the num??ro R.C.S.
     */
    public function getNumeroRcs(): ?string {
        return $this->numeroRcs;
    }

    /**
     * Get the num??ro T.V.A. intracommunautaire.
     *
     * @return string|null Returns the num??ro T.V.A. intracommunautaire.
     */
    public function getNumeroTvaIntracommunautaire(): ?string {
        return $this->numeroTvaIntracommunautaire;
    }

    /**
     * Get the proc??dure collective en cours.
     *
     * @return bool|null Returns teh proc??dure collective en cours.
     */
    public function getProcedureCollectiveEnCours(): ?bool {
        return $this->procedureCollectiveEnCours;
    }

    /**
     * Get the proc??dure collective existe.
     *
     * @return bool|null Returns the proc??dure collective existe.
     */
    public function getProcedureCollectiveExiste(): ?bool {
        return $this->procedureCollectiveExiste;
    }

    /**
     * Get the proc??dures collectives.
     *
     * @return ProcedureCollective[] Returns the proc??dures collectives.
     */
    public function getProceduresCollectives(): array {
        return $this->proceduresCollectives;
    }

    /**
     * Get the prochaine date cl??ture exercice.
     *
     * @return string|null Returns the prochaine date cl??ture exercice.
     */
    public function getProchaineDateClotureExercice(): ?string {
        return $this->prochaineDateClotureExercice;
    }

    /**
     * Get the prochaine date cl??ture exercice format??.
     *
     * @return string|null Returns the prochaine date cl??ture exercice format??.
     */
    public function getProchaineDateClotureExerciceFormate(): ?string {
        return $this->prochaineDateClotureExerciceFormate;
    }

    /**
     * Get the repr??sentants.
     *
     * @return Representant[] Returns the repr??sentants.
     */
    public function getRepresentants(): array {
        return $this->representants;
    }

    /**
     * Get the R.N.M.
     *
     * @return string|null Returns the R.N.M.
     */
    public function getRnm(): ?string {
        return $this->rnm;
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
     * Get the si??ge.
     *
     * @return Etablissement|null Returns the si??ge.
     */
    public function getSiege(): ?Etablissement {
        return $this->siege;
    }

    /**
     * Get the SIREN format??.
     *
     * @return string|null Returns the SIREN format??.
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
     * Set the ann??e finances.
     *
     * @param string|null $anneeFinances The ann??e finances.
     * @return Entreprise Returns this entreprise.
     */
    public function setAnneeFinances(?string $anneeFinances): Entreprise {
        $this->anneeFinances = $anneeFinances;
        return $this;
    }

    /**
     * Set the associ?? unique.
     *
     * @param bool|null $associeUnique The associ?? unique.
     * @return Entreprise Returns this entreprise.
     */
    public function setAssocieUnique(?bool $associeUnique): Entreprise {
        $this->associeUnique = $associeUnique;
        return $this;
    }

    /**
     * Set the b??n??ficiaires effectifs.
     *
     * @param BeneficiaireEffectif[] $beneficiairesEffectifs The b??n??ficiaires effectifs.
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
     * Set the capital format??.
     *
     * @param string|null $capitalFormate The capital format??.
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
     * Set the date cessation format??e.
     *
     * @param string|null $dateCessationFormatee The date cessation format??e.
     * @return Entreprise Returns ths entreprise.
     */
    public function setDateCessationFormatee(?string $dateCessationFormatee): Entreprise {
        $this->dateCessationFormatee = $dateCessationFormatee;
        return $this;
    }

    /**
     * Set the date cl??ture exceptionnelle.
     *
     * @param string|null $dateClotureExceptionnelle The date cl??ture exceptionnelle.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExceptionnelle(?string $dateClotureExceptionnelle): Entreprise {
        $this->dateClotureExceptionnelle = $dateClotureExceptionnelle;
        return $this;
    }

    /**
     * Set the date cl??ture exercice exceptionnelle.
     *
     * @param string|null $dateClotureExerciceExceptionnelle The date cl??ture exercice exceptionnelle.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExerciceExceptionnelle(?string $dateClotureExerciceExceptionnelle): Entreprise {
        $this->dateClotureExerciceExceptionnelle = $dateClotureExerciceExceptionnelle;
        return $this;
    }

    /**
     * Set the date cl??ture exercice exceptionnelle format??.
     *
     * @param string|null $dateClotureExerciceExceptionnelleFormate The date cl??ture exercice exceptionnelle format??.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateClotureExerciceExceptionnelleFormate(?string $dateClotureExerciceExceptionnelleFormate): Entreprise {
        $this->dateClotureExerciceExceptionnelleFormate = $dateClotureExerciceExceptionnelleFormate;
        return $this;
    }

    /**
     * Set the date cr??ation.
     *
     * @param string|null $dateCreation The date cr??ation.
     * @return Entreprise Returns this entreprise.
     */
    public function setDateCreation(?string $dateCreation): Entreprise {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date cr??ation format??.
     *
     * @param string|null $dateCreationFormate The date cr??ation format??.
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
     * Set the date premi??re immatriculation R.C.S.
     *
     * @param string|null $datePremiereImmatriculationRcs The date premi??re immatriculation R.C.S.
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
     * Set the d??p??ts actes.
     *
     * @param DepotActe[] $depotsActes The d??p??ts actes.
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
     * Set the derni??re mise jour R.C.S.
     *
     * @param string|null $derniereMiseJourRcs The derni??re mise jour R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setDerniereMiseJourRcs(?string $derniereMiseJourRcs): Entreprise {
        $this->derniereMiseJourRcs = $derniereMiseJourRcs;
        return $this;
    }

    /**
     * Set the derni??re mise jour SIRENE.
     *
     * @param string|null $derniereMiseJourSirene The derni??re mise jour SIRENE.
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
     * Set the domaine activit??.
     *
     * @param string|null $domaineActivite The domaine activit??.
     * @return Entreprise Returns this entreprise.
     */
    public function setDomaineActivite(?string $domaineActivite): Entreprise {
        $this->domaineActivite = $domaineActivite;
        return $this;
    }

    /**
     * Set the dur??e personne morale.
     *
     * @param string|null $dureePersonneMorale The dur??e personne morale.
     * @return Entreprise Returns this entreprise.
     */
    public function setDureePersonneMorale(?string $dureePersonneMorale): Entreprise {
        $this->dureePersonneMorale = $dureePersonneMorale;
        return $this;
    }

    /**
     * Set the ??conomie sociale solidaire.
     *
     * @param bool|null $economieSocialeSolidaire The ??conomie sociale solidaire.
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
     * Set the ??tablissements.
     *
     * @param Etablissement[] $etablissements The ??tablissement.
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
     * Set the libell?? code NAF.
     *
     * @param string|null $libelleCodeNaf The libell?? code NAF.
     * @return Entreprise Returns this entreprise.
     */
    public function setLibelleCodeNaf(?string $libelleCodeNaf): Entreprise {
        $this->libelleCodeNaf = $libelleCodeNaf;
        return $this;
    }

    /**
     * Set the nb b??n??ficiaires total.
     *
     * @param int|null $nbBeneficiairesTotal The nb b??n??ficiaires total.
     * @return Entreprise Returns this entreprise.
     */
    public function setNbBeneficiairesTotal(?int $nbBeneficiairesTotal): Entreprise {
        $this->nbBeneficiairesTotal = $nbBeneficiairesTotal;
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
     * Set the num??ro R.C.S.
     *
     * @param string|null $numeroRcs The num??ro R.C.S.
     * @return Entreprise Returns this entreprise.
     */
    public function setNumeroRcs(?string $numeroRcs): Entreprise {
        $this->numeroRcs = $numeroRcs;
        return $this;
    }

    /**
     * Set the num??ro T.V.A. intracommunautaire.
     *
     * @param string|null $numeroTvaIntracommunautaire The num??ro T.V.A. intracommunautaire.
     * @return Entreprise Returns this entreprise.
     */
    public function setNumeroTvaIntracommunautaire(?string $numeroTvaIntracommunautaire): Entreprise {
        $this->numeroTvaIntracommunautaire = $numeroTvaIntracommunautaire;
        return $this;
    }

    /**
     * Set the proc??dure collective en cours.
     *
     * @param bool|null $procedureCollectiveEnCours The proc??dure collective en cours.
     * @return Entreprise Returns this entreprise.
     */
    public function setProcedureCollectiveEnCours(?bool $procedureCollectiveEnCours): Entreprise {
        $this->procedureCollectiveEnCours = $procedureCollectiveEnCours;
        return $this;
    }

    /**
     * Set the proc??dure collective existe.
     *
     * @param bool|null $procedureCollectiveExiste The proc??dure collective existe.
     * @return Entreprise Returns this entreprise.
     */
    public function setProcedureCollectiveExiste(?bool $procedureCollectiveExiste): Entreprise {
        $this->procedureCollectiveExiste = $procedureCollectiveExiste;
        return $this;
    }

    /**
     * Set the proc??dures collectives.
     *
     * @param ProcedureCollective[] $proceduresCollectives The proc??dures collectives.
     * @return Entreprise Returns this entreprise.
     */
    protected function setProceduresCollectives(array $proceduresCollectives): Entreprise {
        $this->proceduresCollectives = $proceduresCollectives;
        return $this;
    }

    /**
     * Set the prochaine date cl??ture exercice.
     *
     * @param string|null $prochaineDateClotureExercice The prochaine date cl??ture exercice.
     * @return Entreprise Returns this entreprise.
     */
    public function setProchaineDateClotureExercice(?string $prochaineDateClotureExercice): Entreprise {
        $this->prochaineDateClotureExercice = $prochaineDateClotureExercice;
        return $this;
    }

    /**
     * Set the prochaine date cl??ture exercice format??.
     *
     * @param string|null $prochaineDateClotureExerciceFormate The prochaine date cl??ture exercice format??.
     * @return Entreprise Returns this entreprise.
     */
    public function setProchaineDateClotureExerciceFormate(?string $prochaineDateClotureExerciceFormate): Entreprise {
        $this->prochaineDateClotureExerciceFormate = $prochaineDateClotureExerciceFormate;
        return $this;
    }

    /**
     * Set the repr??sentants.
     *
     * @param Representant[] $representants The repr??sentants.
     * @return Entreprise Returns this entreprise.
     */
    protected function setRepresentants(array $representants): Entreprise {
        $this->representants = $representants;
        return $this;
    }

    /**
     * Set the R.N.M.
     *
     * @param string|null $rnm The R.N.M.
     * @return Entreprise Returns this entreprise.
     */
    public function setRnm(?string $rnm): Entreprise {
        $this->rnm = $rnm;
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
     * Set the si??ge.
     *
     * @param Etablissement|null $siege The si??ge.
     * @return Entreprise Returns this entreprise.
     */
    public function setSiege(?Etablissement $siege): Entreprise {
        $this->siege = $siege;
        return $this;
    }

    /**
     * Set the SIREN format??.
     *
     * @param string|null $sirenFormate The SIREN format??.
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
