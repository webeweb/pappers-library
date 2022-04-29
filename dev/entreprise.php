<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

// Create the provider.
$provider = new APIv2Provider(AbstractTestCase::getToken());

// Create the request.
$request = new EntrepriseRequest();
$request->setSiret("44306184100047");

// Call the API and get the response.
$response = $provider->entreprise($request);

// Handle the response.
$format = "%-30s: %s\n";

echo sprintf($format, "SIREN", $response->getEntreprise()->getSiren());
echo sprintf($format, "SIREN formate", $response->getEntreprise()->getSirenFormate());
echo sprintf($format, "Diffusable", $response->getEntreprise()->getDiffusable());
echo sprintf($format, "Nom entreprise", $response->getEntreprise()->getNomEntreprise());
echo sprintf($format, "Personne morale", $response->getEntreprise()->getPersonneMorale());
echo sprintf($format, "Denomination", $response->getEntreprise()->getDenomination());
echo sprintf($format, "Sigle", $response->getEntreprise()->getSigle());
echo sprintf($format, "Nom", $response->getEntreprise()->getNom());
echo sprintf($format, "Prenom", $response->getEntreprise()->getPrenom());
echo sprintf($format, "Sexe", $response->getEntreprise()->getSexe());
echo sprintf($format, "Siege", "");
echo sprintf($format, "    SIRET", $response->getEntreprise()->getSiege()->getSiret());
echo sprintf($format, "    SIRET formate", $response->getEntreprise()->getSiege()->getSiretFormate());
echo sprintf($format, "    NIC", $response->getEntreprise()->getSiege()->getNic());
echo sprintf($format, "    Numero voie", $response->getEntreprise()->getSiege()->getNumeroVoie());
echo sprintf($format, "    Indice repetition", $response->getEntreprise()->getSiege()->getIndiceRepetition());
echo sprintf($format, "    Type voie", $response->getEntreprise()->getSiege()->getTypeVoie());
echo sprintf($format, "    Libelle voie", $response->getEntreprise()->getSiege()->getLibelleVoie());
echo sprintf($format, "    Complement adresse", $response->getEntreprise()->getSiege()->getComplementAdresse());
echo sprintf($format, "    Adresse ligne 1", $response->getEntreprise()->getSiege()->getAdresseLigne1());
echo sprintf($format, "    Adresse ligne 2", $response->getEntreprise()->getSiege()->getAdresseLigne2());
echo sprintf($format, "    Code postal", $response->getEntreprise()->getSiege()->getCodePostal());
echo sprintf($format, "    Ville", $response->getEntreprise()->getSiege()->getVille());
echo sprintf($format, "    Pays", $response->getEntreprise()->getSiege()->getPays());
echo sprintf($format, "    Latitude", $response->getEntreprise()->getSiege()->getLatitude());
echo sprintf($format, "    Longitude", $response->getEntreprise()->getSiege()->getLongitude());
echo sprintf($format, "    Code NAF", $response->getEntreprise()->getSiege()->getCodeNaf());
echo sprintf($format, "    Libelle code NAF", $response->getEntreprise()->getSiege()->getLibelleCodeNaf());
echo sprintf($format, "    Date creation", $response->getEntreprise()->getSiege()->getDateCreation());
echo sprintf($format, "    Etablissement employeur", $response->getEntreprise()->getSiege()->getEtablissementEmployeur());
echo sprintf($format, "    Effectif", $response->getEntreprise()->getSiege()->getEffectif());
echo sprintf($format, "    Effectif min.", $response->getEntreprise()->getSiege()->getEffectifMin());
echo sprintf($format, "    Effectif max.", $response->getEntreprise()->getSiege()->getEffectifMax());
echo sprintf($format, "    Tranche effectif", $response->getEntreprise()->getSiege()->getTrancheEffectif());
echo sprintf($format, "    Annee effectif", $response->getEntreprise()->getSiege()->getAnneeEffectif());
echo sprintf($format, "    Etablissement cesse", $response->getEntreprise()->getSiege()->getEtablissementCesse());
echo sprintf($format, "    Date cessation", $response->getEntreprise()->getSiege()->getDateCessation());
echo sprintf($format, "    Domiciliation", $response->getEntreprise()->getSiege()->getDomiciliation());
echo sprintf($format, "    Siege", $response->getEntreprise()->getSiege()->getSiege());
echo sprintf($format, "R.N.M.", $response->getEntreprise()->getRnm());
echo sprintf($format, "Code NAF", $response->getEntreprise()->getCodeNaf());
echo sprintf($format, "Libelle code NAF", $response->getEntreprise()->getLibelleCodeNaf());
echo sprintf($format, "Domaine activite", $response->getEntreprise()->getDomaineActivite());
echo sprintf($format, "Objet social", $response->getEntreprise()->getObjetSocial());

echo sprintf($format, "Convention collective", "");
foreach ($response->getEntreprise()->getConventionCollectives() as $current) {

    echo sprintf($format, "    Nom", $current->getNom());
    echo sprintf($format, "    IDCC", $current->getIdcc());
    echo sprintf($format, "    Confirmee", $current->getConfirmee());
}

echo sprintf($format, "Date creation", $response->getEntreprise()->getDateCreation());
echo sprintf($format, "Date creation formatee", $response->getEntreprise()->getDateCreationFormate());
echo sprintf($format, "Entreprise cessee", $response->getEntreprise()->getEntrepriseCessee());
echo sprintf($format, "Date cessation", $response->getEntreprise()->getDateCessation());
echo sprintf($format, "Date cessation formatee", $response->getEntreprise()->getDateCessationFormatee());
echo sprintf($format, "Associe unique", $response->getEntreprise()->getAssocieUnique());
echo sprintf($format, "Categorie juridique", $response->getEntreprise()->getCategorieJuridique());
echo sprintf($format, "Forme juridique", $response->getEntreprise()->getFormeJuridique());
echo sprintf($format, "Entreprise employeuse", $response->getEntreprise()->getEntrepriseEmployeuse());
echo sprintf($format, "Effectif", $response->getEntreprise()->getEffectif());
echo sprintf($format, "Effectif min.", $response->getEntreprise()->getEffectifMin());
echo sprintf($format, "Effectif max.", $response->getEntreprise()->getEffectifMax());
echo sprintf($format, "Tranche effectif", $response->getEntreprise()->getTrancheEffectif());
echo sprintf($format, "Annee effectif", $response->getEntreprise()->getAnneeEffectif());
echo sprintf($format, "Capital", $response->getEntreprise()->getCapital());
echo sprintf($format, "Capital formate", $response->getEntreprise()->getCapitalFormate());
echo sprintf($format, "Capital actuel si variable", $response->getEntreprise()->getCapitalActuelVariable());
echo sprintf($format, "Devise capital", $response->getEntreprise()->getDeviseCapital());
echo sprintf($format, "Date cloture exercice", $response->getEntreprise()->getDateClotureExercice());
echo sprintf($format, "Date cloture exercice exceptionnelle", $response->getEntreprise()->getDateClotureExerciceExceptionnelle());
echo sprintf($format, "Prochaine date cloture exercice", $response->getEntreprise()->getProchaineDateClotureExercice());
echo sprintf($format, "Prochaine date cloture exercice formatee", $response->getEntreprise()->getProchaineDateClotureExerciceFormate());
echo sprintf($format, "Economie sociale solidaire", $response->getEntreprise()->getEconomieSocialeSolidaire());
echo sprintf($format, "Duree personne moral", $response->getEntreprise()->getDureePersonneMorale());
echo sprintf($format, "Derniere mise à jour SIRENE", $response->getEntreprise()->getDerniereMiseJourSirene());
echo sprintf($format, "Derniere mise à jour R.C.S.", $response->getEntreprise()->getDerniereMiseJourRcs());
echo sprintf($format, "Dernier traitement", $response->getEntreprise()->getDernierTraitement());
echo sprintf($format, "Statut R.C.S.", $response->getEntreprise()->getStatutRcs());
echo sprintf($format, "Greffe", $response->getEntreprise()->getGreffe());
echo sprintf($format, "Numero R.C.S.", $response->getEntreprise()->getNumeroRcs());
echo sprintf($format, "Date immatriculation R.C.S.", $response->getEntreprise()->getDateImmatriculationRcs());
echo sprintf($format, "Date premiere immatriculation R.C.S.", $response->getEntreprise()->getDatePremiereImmatriculationRcs());
echo sprintf($format, "Date radiation R.C.S.", $response->getEntreprise()->getDateRadiationRcs());
echo sprintf($format, "Numero T.V.A. intracommunautaire", $response->getEntreprise()->getNumeroTvaIntracommunautaire());

echo sprintf($format, "Etablissements", "");
foreach ($response->getEntreprise()->getEtablissements() as $current) {

    echo sprintf($format, "    SIRET", $current->getSiret());
    echo sprintf($format, "    SIRET formate", $current->getSiretFormate());
    echo sprintf($format, "    NIC", $current->getNic());
    echo sprintf($format, "    Numero voie", $current->getNumeroVoie());
    echo sprintf($format, "    Indice repetition", $current->getIndiceRepetition());
    echo sprintf($format, "    Type voie", $current->getTypeVoie());
    echo sprintf($format, "    Libelle voie", $current->getLibelleVoie());
    echo sprintf($format, "    Complement adresse", $current->getComplementAdresse());
    echo sprintf($format, "    Adresse ligne 1", $current->getAdresseLigne1());
    echo sprintf($format, "    Adresse ligne 2", $current->getAdresseLigne2());
    echo sprintf($format, "    Code postal", $current->getCodePostal());
    echo sprintf($format, "    Ville", $current->getVille());
    echo sprintf($format, "    Pays", $current->getPays());
    echo sprintf($format, "    Latitude", $current->getLatitude());
    echo sprintf($format, "    Longitude", $current->getLongitude());
    echo sprintf($format, "    Code NAF", $current->getCodeNaf());
    echo sprintf($format, "    Libelle code NAF", $current->getLibelleCodeNaf());
    echo sprintf($format, "    Etablissement employeur", $current->getEtablissementEmployeur());
    echo sprintf($format, "    Effectif", $current->getEffectif());
    echo sprintf($format, "    Effectif min.", $current->getEffectifMin());
    echo sprintf($format, "    Effectif max.", $current->getEffectifMax());
    echo sprintf($format, "    Tranche effectif", $current->getTrancheEffectif());
    echo sprintf($format, "    Annee effectif", $current->getAnneeEffectif());
    echo sprintf($format, "    Date creation", $current->getDateCreation());
    echo sprintf($format, "    Etablissement cesse", $current->getEtablissementCesse());
    echo sprintf($format, "    Date cessation", $current->getDateCessation());
    echo sprintf($format, "    Domiciliation", $current->getDomiciliation());
    echo sprintf($format, "    Siege", $current->getSiege());
}

echo sprintf($format, "Finances", "");
foreach ($response->getEntreprise()->getFinances() as $current) {

    echo sprintf($format, "    Annee", $current->getAnnee());
    echo sprintf($format, "    Date cloture exercice", $current->getDateClotureExercice());
    echo sprintf($format, "    Duree exercice", $current->getDureeExercice());
    echo sprintf($format, "    Chiffre d'affaires", $current->getChiffreAffaires());
    echo sprintf($format, "    Resultat", $current->getResultat());
    echo sprintf($format, "    Effectif", $current->getEffectif());
}

echo sprintf($format, "Representants", "");
foreach ($response->getEntreprise()->getRepresentants() as $current) {

    echo sprintf($format, "    Qualite", $current->getQualite());
    echo sprintf($format, "    Personne morale", $current->getPersonneMorale());
    echo sprintf($format, "    Date prise de poste", $current->getDatePrisePoste());
    echo sprintf($format, "    Nom", $current->getNom());
    echo sprintf($format, "    Prenom", $current->getPrenom());
    echo sprintf($format, "    Nom complet", $current->getNomComplet());
    echo sprintf($format, "    Date naissance", $current->getDateNaissance());
    echo sprintf($format, "    Date naissance formatee", $current->getDateNaissanceFormatee());
    echo sprintf($format, "    Age", $current->getAge());
    echo sprintf($format, "    Nationalite", $current->getNationalite());
    echo sprintf($format, "    Ville naissance", $current->getVilleNaissance());
    echo sprintf($format, "    Pays naissance", $current->getPaysNaissance());
    echo sprintf($format, "    Adresse ligne 1", $current->getAdresseLigne1());
    echo sprintf($format, "    Adresse ligne 2", $current->getAdresseLigne2());
    echo sprintf($format, "    Adresse ligne 3", $current->getAdresseLigne3());
    echo sprintf($format, "    Code postal", $current->getCodePostal());
    echo sprintf($format, "    Ville", $current->getVille());
    echo sprintf($format, "    Pays", $current->getPays());
}

echo sprintf($format, "Beneficiaires effectifs", "");
foreach ($response->getEntreprise()->getBeneficiairesEffectifs() as $current) {

    echo sprintf($format, "    Date greffe", $current->getDateGreffe());
    echo sprintf($format, "    Type", $current->getType());
    echo sprintf($format, "    Nom", $current->getNom());
    echo sprintf($format, "    Nom usage", $current->getNomUsage());
    echo sprintf($format, "    Prenom", $current->getPrenom());
    echo sprintf($format, "    Pseudonyme", $current->getPseudonyme());
    echo sprintf($format, "    Nationalite", $current->getNationalite());
    echo sprintf($format, "    Date naissance formatee", $current->getDateNaissanceFormatee());
    echo sprintf($format, "    Date naissance complete formatee", $current->getDateNaissanceCompleteFormatee());
    echo sprintf($format, "    Ville naissance", $current->getVilleNaissance());
    echo sprintf($format, "    Pays naissance", $current->getPaysNaissance());
    echo sprintf($format, "    Adresse ligne 1", $current->getAdresseLigne1());
    echo sprintf($format, "    Adresse ligne 2", $current->getAdresseLigne2());
    echo sprintf($format, "    Adresse ligne 3", $current->getAdresseLigne3());
    echo sprintf($format, "    Code postal", $current->getCodePostal());
    echo sprintf($format, "    Ville", $current->getVille());
    echo sprintf($format, "    Pays", $current->getPays());
    echo sprintf($format, "    Pourcentage parts", $current->getPourcentageParts());
    echo sprintf($format, "    Pourcentage parts directes", $current->getPourcentagePartsDirectes());
    echo sprintf($format, "    Pourcentage parts indirectes", $current->getPourcentagePartsIndirectes());
    echo sprintf($format, "    Pourcentage parts vocation titulaire", $current->getPourcentagePartsVocationTitulaire());
    echo sprintf($format, "    Details parts directes", "[...]");
    echo sprintf($format, "    Details parts indirectes", "[...]");
    echo sprintf($format, "    Details parts vocation titulaire", "[...]");
    echo sprintf($format, "    Pourcentage votes", $current->getPourcentageVotes());
    echo sprintf($format, "    Pourcentage votes directs", $current->getPourcentageVotesDirects());
    echo sprintf($format, "    Pourcentage votes indirects", $current->getPourcentageVotesIndirects());
    echo sprintf($format, "    Details votes directes", "[...]");
    echo sprintf($format, "    Details votes indirectes", "[...]");
    echo sprintf($format, "    Details societe gestion", "[...]");
    echo sprintf($format, "    Detention pouvoir A.G.", $current->getDetentionPouvoirDecisionAg());
    echo sprintf($format, "    Detention pouvoir nom membre conseil administration", $current->getDetentionPouvoirNomMembreConseilAdministration());
    echo sprintf($format, "    Detention autres moyens controle", $current->getDetentionAutresMoyensControle());
    echo sprintf($format, "    Beneficiaire representant legal", $current->getBeneficiaireRepresentantLegal());
    echo sprintf($format, "    Representant legal placement sans gestion delegation", $current->getRepresentantLegalPlacementSansGestionDelegation());
}

echo sprintf($format, "Depots actes", "");
foreach ($response->getEntreprise()->getDepotsActes() as $current) {

    echo sprintf($format, "    Date depot", $current->getDateDepot());
    echo sprintf($format, "    Date depot formate", $current->getDateDepotFormatee());
    echo sprintf($format, "    Disponible", $current->getDisponible());
    echo sprintf($format, "    Nom fichier", $current->getNomFichierPdf());
    echo sprintf($format, "    Token", $current->getToken());
    echo sprintf($format, "    Actes", "[...]");
}

echo sprintf($format, "Comptes", "");
foreach ($response->getEntreprise()->getComptes() as $current) {

    echo sprintf($format, "    Date depot", $current->getDateDepot());
    echo sprintf($format, "    Date depot formate", $current->getDateDepotFormatee());
    echo sprintf($format, "    Date cloture", $current->getDateCloture());
    echo sprintf($format, "    Annee cloture", $current->getAnneeCloture());
    echo sprintf($format, "    Type comptes", $current->getTypeComptes());
    echo sprintf($format, "    Confidentialite", $current->getConfidentialite());
    echo sprintf($format, "    Confidentialite compte resultat", $current->getConfidentialiteCompteResultat());
    echo sprintf($format, "    Disponible", $current->getDisponible());
    echo sprintf($format, "    Nom fichier PDF", $current->getNomFichierPdf());
    echo sprintf($format, "    Token", $current->getToken());
}

echo sprintf($format, "Publications BODACC", "");
foreach ($response->getEntreprise()->getPublicationsBodacc() as $current) {

    echo sprintf($format, "    Numero parution", $current->getNumeroParution());
    echo sprintf($format, "    Date", $current->getDate());
    echo sprintf($format, "    Numero annonce", $current->getNumeroAnnonce());
    echo sprintf($format, "    Annonvce rectificative", $current->getAnnonceRectificative());
    echo sprintf($format, "    BODACC", $current->getBodacc());
    echo sprintf($format, "    Type", $current->getType());
    echo sprintf($format, "    R.C.S.", $current->getRcs());
    echo sprintf($format, "    Nom entreprise", $current->getNomEntreprise());
    echo sprintf($format, "    Personne morale", $current->getPersonneMorale());
    echo sprintf($format, "    Sigle", $current->getSigle());
    echo sprintf($format, "    Denomination", $current->getDenomination());
    echo sprintf($format, "    Nom commercial", $current->getNomCommercial());
    echo sprintf($format, "    Forme juridique", $current->getFormeJuridique());
    echo sprintf($format, "    Nom", $current->getNom());
    echo sprintf($format, "    Prenom", $current->getPrenom());
    echo sprintf($format, "    Administration", $current->getAdministration());
    echo sprintf($format, "    Pseudonyme", $current->getPseudonyme());
    echo sprintf($format, "    Nationalite", $current->getNationalite());
    echo sprintf($format, "    Adresse", $current->getAdresse());
    echo sprintf($format, "    Capital", $current->getCapital());
    echo sprintf($format, "    Devise capital", $current->getDeviseCapital());
    echo sprintf($format, "    Activite", $current->getActivite());
    echo sprintf($format, "    Date debut activite", $current->getDateDebutActivite());
    echo sprintf($format, "    Description", $current->getDescription());
}

echo sprintf($format, "Procedures collectives", "");
foreach ($response->getEntreprise()->getProceduresCollectives() as $current) {

    echo sprintf($format, "    Type", $current->getType());
    echo sprintf($format, "    Date debut", $current->getDateDebut());
    echo sprintf($format, "    Date fin", $current->getDateFin());
    echo sprintf($format, "    Publications BODACC", "[...]");
}

echo sprintf($format, "Procedure collective existe", $response->getEntreprise()->getProcedureCollectiveExiste());
echo sprintf($format, "Procedure collective en cours", $response->getEntreprise()->getProcedureCollectiveEnCours());
echo sprintf($format, "Derniers statuts", "");
echo sprintf($format, "    Date depot", $response->getEntreprise()->getDerniersStatuts()->getDateDepot());
echo sprintf($format, "    Date depot formatee", $response->getEntreprise()->getDerniersStatuts()->getDateDepotFormatee());
echo sprintf($format, "    Disponible", $response->getEntreprise()->getDerniersStatuts()->getDisponible());
echo sprintf($format, "    Nom fichier PDF", $response->getEntreprise()->getDerniersStatuts()->getNomFichierPdf());
echo sprintf($format, "    Token", $response->getEntreprise()->getDerniersStatuts()->getToken());
echo sprintf($format, "    Type", $response->getEntreprise()->getDerniersStatuts()->getType());
echo sprintf($format, "    Decision", $response->getEntreprise()->getDerniersStatuts()->getDecision());
echo sprintf($format, "    Date acte", $response->getEntreprise()->getDerniersStatuts()->getDateActe());
echo sprintf($format, "    Date acte formate", $response->getEntreprise()->getDerniersStatuts()->getDateActeFormatee());
echo sprintf($format, "Extrait immatriculation", "");
echo sprintf($format, "    Token", $response->getEntreprise()->getExtraitImmatriculation()->getToken());
