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
use WBW\Library\Pappers\Model\Entreprise;
use WBW\Library\Pappers\Model\Etablissement;
use WBW\Library\Pappers\Model\ExtraitImmatriculation;
use WBW\Library\Pappers\Model\Finance;
use WBW\Library\Pappers\Model\ProcedureCollective;
use WBW\Library\Pappers\Model\PublicationBodacc;
use WBW\Library\Pappers\Model\Representant;
use WBW\Library\Pappers\Model\Statuts;

/**
 * Model deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Serializer
 */
class ModelDeserializer {

    /**
     * Deserializes an acte.
     *
     * @param array $data The data.
     * @return Acte Returns the acte.
     */
    public static function deserializeActe(array $data): Acte {

        $model = new Acte();
        $model->setType(ArrayHelper::get($data, "type"));
        $model->setDecision(ArrayHelper::get($data, "decision"));
        $model->setDateActe(ArrayHelper::get($data, "date_acte"));
        $model->setDateActeFormate(ArrayHelper::get($data, "date_acte_formate"));

        return $model;
    }

    /**
     * Deserializes a bénéficiaire effectif.
     *
     * @param array $data The data.
     * @return BeneficiaireEffectif Returns the bénéficiaire effectif.
     */
    public static function deserializeBeneficiaireEffectif(array $data): BeneficiaireEffectif {

        $model = new BeneficiaireEffectif();
        $model->setDateGreffe(ArrayHelper::get($data, "date_greffe"));
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setNomUsage(ArrayHelper::get($data, "nom_usage"));
        $model->setPrenom(ArrayHelper::get($data, "prenom"));
        $model->setPseudonyme(ArrayHelper::get($data, "pseudonyme"));
        $model->setDateNaissanceFormate(ArrayHelper::get($data, "date_de_naissance_formatee"));
        $model->setNationalite(ArrayHelper::get($data, "nationalite"));
        $model->setPourcentageParts(ArrayHelper::get($data, "pourcentage_parts"));
        $model->setPourcentagePartsDirectes(ArrayHelper::get($data, "pourcentage_parts_directes"));
        $model->setPourcentagePartsIndirectes(ArrayHelper::get($data, "pourcentage_parts_indirectes"));
        $model->setPourcentagePartsVocationTitulaire(ArrayHelper::get($data, "pourcentage_parts_vocation_titulaire"));
        $model->setDetailsPartsDirectes(static::deserializeDetailsDirects(ArrayHelper::get($data, "details_parts_directes", [])));
        $model->setDetailsPartsIndirectes(static::deserializeDetailsIndirects(ArrayHelper::get($data, "details_parts_indirectes", [])));
        $model->setDetailsPartsVocationTitulaire(static::deserializeDetailsPartsVocationTitulaire(ArrayHelper::get($data, "details_parts_vocation_titulaire", [])));
        $model->setPourcentageVotes(ArrayHelper::get($data, "pourcentage_votes"));
        $model->setPourcentageVotesDirects(ArrayHelper::get($data, "pourcentage_votes_directs"));
        $model->setPourcentageVotesIndirects(ArrayHelper::get($data, "pourcentage_votes_indirect"));
        $model->setDetailsVotesDirects(static::deserializeDetailsDirects(ArrayHelper::get($data, "details_votes_directs", [])));
        $model->setDetailsVotesIndirects(static::deserializeDetailsIndirects(ArrayHelper::get($data, "details_votes_indirects", [])));
        $model->setDetailsSocieteGestion(static::deserializeDetailsSocieteGestion(ArrayHelper::get($data, "details_societe_de_gestion", [])));
        $model->setDetentionPouvoirDecisionAg(ArrayHelper::get($data, "detention_pouvoir_decision_ag"));
        $model->setDetentionPouvoirNomMembreConseilAdministration(ArrayHelper::get($data, "detention_pouvoir_nom_membre_conseil_administration"));
        $model->setDetentionAutresMoyensControle(ArrayHelper::get($data, "detention_autres_moyens_controle"));
        $model->setBeneficiaireRepresentantLegal(ArrayHelper::get($data, "beneficiaire_representant_legal"));
        $model->setRepresentantLegalPlacementSansGestionDelegation(ArrayHelper::get($data, "representant_legal_placement_sans_gestion_delegation"));

        return $model;
    }

    /**
     * Deserializes a compte.
     *
     * @param array $data The data.
     * @return Compte Returns the compte.
     */
    public static function deserializeCompte(array $data): Compte {

        $model = new Compte();
        $model->setDateDepot(ArrayHelper::get($data, "date_depot"));
        $model->setDateDepotFormate(ArrayHelper::get($data, "date_depot_formate"));
        $model->setDateCloture(ArrayHelper::get($data, "date_cloture"));
        $model->setAnneeCloture(ArrayHelper::get($data, "annee_cloture"));
        $model->setConfidentialite(ArrayHelper::get($data, "confidentialite"));
        $model->setConfidentialiteCompteResultat(ArrayHelper::get($data, "confidentialite_compte_de_resultat"));
        $model->setDisponible(ArrayHelper::get($data, "disponible"));
        $model->setNomFichierPdf(ArrayHelper::get($data, "nom_fichier_pdf"));
        $model->setToken(ArrayHelper::get($data, "token"));

        return $model;
    }

    /**
     * Deserializes a convention collective.
     *
     * @param array $data The data.
     * @return ConventionCollective Returns the convention collective.
     */
    public static function deserializeConventionCollective(array $data): ConventionCollective {

        $model = new ConventionCollective();
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setIdcc(ArrayHelper::get($data, "idcc"));
        $model->setConfirmee(ArrayHelper::get($data, "confirmee"));

        return $model;
    }

    /**
     * Deserializes a dépôt acte.
     *
     * @param array $data The data.
     * @return DepotActe Returns the dépot acte.
     */
    public static function deserializeDepotActe(array $data): DepotActe {

        $model = new DepotActe();
        $model->setDateDepot(ArrayHelper::get($data, "date_depot"));
        $model->setDateDepotFormate(ArrayHelper::get($data, "date_depot_formate"));
        $model->setDisponible(ArrayHelper::get($data, "disponible"));
        $model->setNomFichierPdf(ArrayHelper::get($data, "nom_fichier_pdf"));
        $model->setToken(ArrayHelper::get($data, "token"));

        foreach (ArrayHelper::get($data, "actes", []) as $current) {
            $model->addActe(static::deserializeActe($current));
        }

        return $model;
    }

    /**
     * Deserializes a détails directs.
     *
     * @param array $data The data.
     * @return DetailsDirects Returns the détails directs.
     */
    public static function deserializeDetailsDirects(array $data): DetailsDirects {

        $model = new DetailsDirects();
        $model->setPourcentagePleinePropriete(ArrayHelper::get($data, "pourcentage_pleine_propriete"));
        $model->setPourcentageNuePropriete(ArrayHelper::get($data, "pourcentage_nue_propriete"));
        $model->setPourcentageUsufruit(ArrayHelper::get($data, "pourcentage_usufruit"));

        return $model;
    }

    /**
     * Deserializes a détails indirects.
     *
     * @param array $data The data.
     * @return DetailsIndirects Returns this détails indirects.
     */
    public static function deserializeDetailsIndirects(array $data): DetailsIndirects {

        $model = new DetailsIndirects();
        $model->setPourcentageIndivision(ArrayHelper::get($data, "pourcentage_en_indivision"));
        $model->setPourcentagePersonneMorale(ArrayHelper::get($data, "pourcentage_en_personne_morale"));
        $model->setDetailsIndivision(static::deserializeDetailsIndivision(ArrayHelper::get($data, "details_en_indivision", [])));
        $model->setDetailsPersonneMorale(static::deserializeDetailsPersonneMorale(ArrayHelper::get($data, "details_en_personne_morale", [])));

        return $model;
    }

    /**
     * Deserializes a détails indivision.
     *
     * @param array $data The data.
     * @return DetailsIndivision Returns the détails indivision.
     */
    public static function deserializeDetailsIndivision(array $data): DetailsIndivision {

        $model = new DetailsIndivision();
        $model->setPourcentagePleinePropriete(ArrayHelper::get($data, "pourcentage_pleine_propriete"));
        $model->setPourcentageNuePropriete(ArrayHelper::get($data, "pourcentage_nue_propriete"));
        $model->setPourcentageUsufruit(ArrayHelper::get($data, "pourcentage_usufruit"));

        return $model;
    }

    /**
     * Deserializes a détails parts vocation titulaire.
     *
     * @param array $data The data.
     * @return DetailsPartsVocationTitulaire Returns the détails parts vocation titulaire.
     */
    public static function deserializeDetailsPartsVocationTitulaire(array $data): DetailsPartsVocationTitulaire {

        $model = new DetailsPartsVocationTitulaire();
        $model->setPourcentageDirectes(ArrayHelper::get($data, "pourcentage_directes"));
        $model->setPourcentageIndirectes(ArrayHelper::get($data, "pourcentage_indirectes"));
        $model->setDetailsDirectes(static::deserializeDetailsDirects(ArrayHelper::get($data, "details_directes", [])));
        $model->setDetailsIndirectes(static::deserializeDetailsIndirects(ArrayHelper::get($data, "details_indirectes", [])));

        return $model;
    }

    /**
     * Deserializes a détails personne morale.
     *
     * @param array $data The data.
     * @return DetailsPersonneMorale Returns the détails personne morale.
     */
    public static function deserializeDetailsPersonneMorale(array $data): DetailsPersonneMorale {

        $model = new DetailsPersonneMorale();
        $model->setPourcentagePleinePropriete(ArrayHelper::get($data, "pourcentage_pleine_propriete"));
        $model->setPourcentageNuePropriete(ArrayHelper::get($data, "pourcentage_nue_propriete"));
        $model->setPourcentageUsufruit(ArrayHelper::get($data, "pourcentage_usufruit"));

        return $model;
    }

    /**
     * Deserializes a détails société gestion.
     *
     * @param array $data The data.
     * @return DetailsSocieteGestion Returns the détails société gestion.
     */
    public static function deserializeDetailsSocieteGestion(array $data): DetailsSocieteGestion {

        $model = new DetailsSocieteGestion();
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setSiren(ArrayHelper::get($data, "siren"));
        $model->setGreffe(ArrayHelper::get($data, "greffe"));
        $model->setAdresse(ArrayHelper::get($data, "adresse"));
        $model->setCodePostal(ArrayHelper::get($data, "code_postal"));
        $model->setVille(ArrayHelper::get($data, "ville"));

        return $model;
    }

    /**
     * Deserializes an entreprise.
     *
     * @param array $data The data.
     * @return Entreprise Returns the entreprise.
     */
    public static function deserializeEntreprise(array $data): Entreprise {

        $model = new Entreprise();
        $model->setSiren(ArrayHelper::get($data, "siren"));
        $model->setSirenFormate(ArrayHelper::get($data, "siren_formate"));
        $model->setNomEntreprise(ArrayHelper::get($data, "nom_entreprise"));
        $model->setPersonneMorale(ArrayHelper::get($data, "personne_morale"));
        $model->setDenomination(ArrayHelper::get($data, "denomination"));
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setPrenom(ArrayHelper::get($data, "prenom"));
        $model->setSexe(ArrayHelper::get($data, "sexe"));
        $model->setCodeNaf(ArrayHelper::get($data, "code_naf"));
        $model->setLibelleCodeNaf(ArrayHelper::get($data, "libelle_code_naf"));
        $model->setDomaineActivite(ArrayHelper::get($data, "domaine_activite"));

        foreach (ArrayHelper::get($data, "conventions_collectives", []) as $current) {
            $model->addConventionCollective(static::deserializeConventionCollective($current));
        }

        $model->setDateCreation(ArrayHelper::get($data, "date_creation"));
        $model->setDateCreationFormate(ArrayHelper::get($data, "date_creation_formate"));
        $model->setEntrepriseCessee(ArrayHelper::get($data, "entreprise_cessee"));
        $model->setDateCessation(ArrayHelper::get($data, "date_cessation"));
        $model->setEntrepriseEmployeuse(ArrayHelper::get($data, "entreprise_employeuse"));
        $model->setCategorieJuridique(ArrayHelper::get($data, "categorie_juridique"));
        $model->setFormeJuridique(ArrayHelper::get($data, "forme_juridique"));
        $model->setEffectif(ArrayHelper::get($data, "effectif"));
        $model->setEffectifMin(ArrayHelper::get($data, "effectif_min"));
        $model->setEffectifMax(ArrayHelper::get($data, "effectif_max"));
        $model->setTrancheEffectif(ArrayHelper::get($data, "tranche_effectif"));
        $model->setAnneeEffectif(ArrayHelper::get($data, "annee_effectif"));
        $model->setDernierTraitement(ArrayHelper::get($data, "dernier_traitement"));
        $model->setSiege(static::deserializeEtablissement(ArrayHelper::get($data, "siege", [])));
        $model->setDiffusable(ArrayHelper::get($data, "diffusable"));
        $model->setSigle(ArrayHelper::get($data, "sigle"));
        $model->setObjetSocial(ArrayHelper::get($data, "objet_social"));
        $model->setCapital(ArrayHelper::get($data, "capital"));
        $model->setCapitalFormate(ArrayHelper::get($data, "capital_formate"));
        $model->setCapitalActuelVariable(ArrayHelper::get($data, "capital_actuel_si_variable"));
        $model->setDeviseCapital(ArrayHelper::get($data, "devise_capital"));
        $model->setNumeroRcs(ArrayHelper::get($data, "numero_rcs"));
        $model->setDateClotureExercice(ArrayHelper::get($data, "date_cloture_exercice"));
        $model->setDateClotureExerciceExceptionnelle(ArrayHelper::get($data, "date_cloture_exercice_exceptionnelle"));
        $model->setDateClotureExerciceExceptionnelleFormate(ArrayHelper::get($data, "date_cloture_exercice_exceptionnelle_formate"));
        $model->setProchaineDateClotureExercice(ArrayHelper::get($data, "prochaine_date_cloture_exercice"));
        $model->setProchaineDateClotureExerciceFormate(ArrayHelper::get($data, "prochaine_date_cloture_exercice_formate"));
        $model->setEconomieSocialeSolidaire(ArrayHelper::get($data, "economie_sociale_solidaire"));
        $model->setDureePersonneMorale(ArrayHelper::get($data, "duree_personne_morale"));
        $model->setDerniereMiseJourSirene(ArrayHelper::get($data, "derniere_mise_a_jour_sirene"));
        $model->setDerniereMiseJourRcs(ArrayHelper::get($data, "derniere_mise_a_jour_rcs"));
        $model->setStatutRcs(ArrayHelper::get($data, "statut_rcs"));
        $model->setGreffe(ArrayHelper::get($data, "greffe"));
        $model->setDateImmatriculationRcs(ArrayHelper::get($data, "date_immatriculation_rcs"));
        $model->setDatePremiereImmatriculationRcs(ArrayHelper::get($data, "date_premiere_immatriculation_rcs"));
        $model->setDateRadiationRcs(ArrayHelper::get($data, "date_radiation_rcs"));
        $model->setNumeroTvaIntracommunautaire(ArrayHelper::get($data, "numero_tva_intracommunautaire"));
        $model->setAssocieUnique(ArrayHelper::get($data, "associe_unique"));

        foreach (ArrayHelper::get($data, "etablissements", []) as $current) {
            $model->addEtablissement(static::deserializeEtablissement($current));
        }

        foreach (ArrayHelper::get($data, "finances", []) as $current) {
            $model->addFinance(static::deserializeFinance($current));
        }

        foreach (ArrayHelper::get($data, "representants", []) as $current) {
            $model->addRepresentant(static::deserializeRepresentant($current));
        }

        foreach (ArrayHelper::get($data, "beneficiaires_effectifs", []) as $current) {
            $model->addBeneficiaireEffectif(static::deserializeBeneficiaireEffectif($current));
        }

        foreach (ArrayHelper::get($data, "depots_actes", []) as $current) {
            $model->addDepotActe(static::deserializeDepotActe($current));
        }

        foreach (ArrayHelper::get($data, "comptes", []) as $current) {
            $model->addCompte(static::deserializeCompte($current));
        }

        foreach (ArrayHelper::get($data, "publications_bodacc", []) as $current) {
            $model->addPublicationBodacc(static::deserializePublicationBodacc($current));
        }

        foreach (ArrayHelper::get($data, "procedures_collectives", []) as $current) {
            $model->addProcedureCollective(static::deserializeProcedureCollective($current));
        }

        $model->setProcedureCollectiveExiste(ArrayHelper::get($data, "procedure_collective_existe"));
        $model->setProcedureCollectiveEnCours(ArrayHelper::get($data, "procedure_collective_en_cours"));
        $model->setDerniersStatuts(static::deserializeStatuts(ArrayHelper::get($data, "derniers_statuts", [])));
        $model->setExtraitImmatriculation(static::deserializeExtraitImmatriculation(ArrayHelper::get($data, "extrait_immatriculation", [])));

        return $model;
    }

    /**
     * Deserialize an établissement.
     *
     * @param array $data The data.
     * @return Etablissement Returns the établissement.
     */
    public static function deserializeEtablissement(array $data): Etablissement {

        $model = new Etablissement();
        $model->setSiret(ArrayHelper::get($data, "siret"));
        $model->setSiretFormate(ArrayHelper::get($data, "siret_formate"));
        $model->setNic(ArrayHelper::get($data, "nic"));
        $model->setCodePostal(ArrayHelper::get($data, "code_postal"));
        $model->setVille(ArrayHelper::get($data, "ville"));
        $model->setLatitude(ArrayHelper::get($data, "latitude"));
        $model->setLongitude(ArrayHelper::get($data, "longitude"));
        $model->setEtablissementCesse(ArrayHelper::get($data, "etablissement_cesse"));
        $model->setSiege(ArrayHelper::get($data, "siege"));
        $model->setEtablissementEmployeur(ArrayHelper::get($data, "etablissement_employeur"));
        $model->setEffectif(ArrayHelper::get($data, "effectif"));
        $model->setEffectifMin(ArrayHelper::get($data, "effectif_min"));
        $model->setEffectifMax(ArrayHelper::get($data, "effectif_max"));
        $model->setTrancheEffectif(ArrayHelper::get($data, "tranche_effectif"));
        $model->setAnneeEffectif(ArrayHelper::get($data, "annee_effectif"));
        $model->setCodeNaf(ArrayHelper::get($data, "code_naf"));
        $model->setLibelleCodeNaf(ArrayHelper::get($data, "libelle_code_naf"));
        $model->setDateCreation(ArrayHelper::get($data, "date_de_creation"));
        $model->setNumeroVoie(ArrayHelper::get($data, "numero_voie"));
        $model->setIndiceRepetition(ArrayHelper::get($data, "indice_repetition"));
        $model->setTypeVoie(ArrayHelper::get($data, "type_voie"));
        $model->setLibelleVoie(ArrayHelper::get($data, "libelle_voie"));
        $model->setComplementAdresse(ArrayHelper::get($data, "complement_adresse"));
        $model->setAdresseLigne1(ArrayHelper::get($data, "adresse_ligne_1"));
        $model->setAdresseLigne2(ArrayHelper::get($data, "adresse_ligne_2"));

        return $model;
    }

    /**
     * Deserializes an extrait immatriculation.
     *
     * @param array $data The data.
     * @return ExtraitImmatriculation Returns the extrait immatriculation.
     */
    public static function deserializeExtraitImmatriculation(array $data): ExtraitImmatriculation {

        $model = new ExtraitImmatriculation();
        $model->setToken(ArrayHelper::get($data, "token"));

        return $model;
    }

    /**
     * Deserialize a finance.
     *
     * @param array $data The data.
     * @return Finance Returns the finance.
     */
    public static function deserializeFinance(array $data): Finance {

        $model = new Finance();
        $model->setAnnee(ArrayHelper::get($data, "annee"));
        $model->setDateClotureExercice(ArrayHelper::get($data, "date_de_cloture_exercice"));
        $model->setDureeExercice(ArrayHelper::get($data, "duree_exercice"));
        $model->setChiffreAffaires(ArrayHelper::get($data, "chiffre_affaires"));
        $model->setResultat(ArrayHelper::get($data, "resultat"));
        $model->setEffectif(ArrayHelper::get($data, "effectif"));

        return $model;
    }

    /**
     * Deserializes a procédure collective.
     *
     * @param array $data The data.
     * @return ProcedureCollective Returns the procédure collective.
     */
    public static function deserializeProcedureCollective(array $data): ProcedureCollective {

        $model = new ProcedureCollective();
        $model->setType(ArrayHelper::get($data, "type"));
        $model->setDateDebut(ArrayHelper::get($data, "date_debut"));
        $model->setDateFin(ArrayHelper::get($data, "date_fin"));

        foreach (ArrayHelper::get($data, "publications_bodacc", []) as $current) {
            $model->addPublicationBodacc(static::deserializePublicationBodacc($current));
        }

        return $model;
    }

    /**
     * Deserializes a publication BODACC.
     *
     * @param array $data The data.
     * @return PublicationBodacc Returns the publication BODACC.
     */
    public static function deserializePublicationBodacc(array $data): PublicationBodacc {

        $model = new PublicationBodacc();
        $model->setNumeroParution(ArrayHelper::get($data, "numero_parution"));
        $model->setDate(ArrayHelper::get($data, "date"));
        $model->setNumeroAnnonce(ArrayHelper::get($data, "numero_annonce"));
        $model->setBodacc(ArrayHelper::get($data, "bodacc"));
        $model->setType(ArrayHelper::get($data, "type"));

        return $model;
    }

    /**
     * Deserializes a représentant.
     *
     * @param array $data The data.
     * @return Representant Returns the représentant.
     */
    public static function deserializeRepresentant(array $data): Representant {

        $model = new Representant();
        $model->setQualite(ArrayHelper::get($data, "qualite"));
        $model->setPersonneMorale(ArrayHelper::get($data, "personne_morale"));
        $model->setDatePrisePoste(ArrayHelper::get($data, "date_prise_de_poste"));
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setPrenom(ArrayHelper::get($data, "prenom"));
        $model->setNomComplet(ArrayHelper::get($data, "nom_complet"));
        $model->setDateNaissance(ArrayHelper::get($data, "date_de_naissance"));
        $model->setDateNaissanceFormate(ArrayHelper::get($data, "date_de_naissance_formate"));
        $model->setAge(ArrayHelper::get($data, "age"));
        $model->setNationalite(ArrayHelper::get($data, "nationalite"));
        $model->setVilleNaissance(ArrayHelper::get($data, "ville_de_naissance"));
        $model->setPaysNaissance(ArrayHelper::get($data, "pays_de_naissance"));
        $model->setAdresseLigne1(ArrayHelper::get($data, "adresse_ligne_1"));
        $model->setAdresseLigne2(ArrayHelper::get($data, "adresse_ligne_2"));
        $model->setAdresseLigne3(ArrayHelper::get($data, "adresse_ligne_3"));
        $model->setCodePostal(ArrayHelper::get($data, "code_postal"));
        $model->setVille(ArrayHelper::get($data, "ville"));
        $model->setPays(ArrayHelper::get($data, "pays"));

        return $model;
    }

    /**
     * Deserializes a statuts.
     *
     * @param array $data The data.
     * @return Statuts Returns the statuts.
     */
    public static function deserializeStatuts(array $data): Statuts {

        $model = new Statuts();
        $model->setDateDepot(ArrayHelper::get($data, "date_depot"));
        $model->setDateDepotFormate(ArrayHelper::get($data, "date_depot_formate"));
        $model->setDisponible(ArrayHelper::get($data, "disponible"));
        $model->setNomFichierPdf(ArrayHelper::get($data, "nom_fichier_pdf"));
        $model->setToken(ArrayHelper::get($data, "token"));
        $model->setType(ArrayHelper::get($data, "type"));
        $model->setDecision(ArrayHelper::get($data, "decision"));
        $model->setDateActe(ArrayHelper::get($data, "date_acte"));
        $model->setDateActeFormate(ArrayHelper::get($data, "date_acte_formate"));

        return $model;
    }
}