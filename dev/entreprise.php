<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once(__DIR__ . "/../vendor/autoload.php");

use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\EntrepriseRequest;

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new EntrepriseRequest();
$request->setSiret("44306184100047");

// Call the API and get the response.
$response = $provider->entreprise($request);

// Handle the response.
echo "SIREN                                    : " . $response->getEntreprise()->getSiren() . "\n";
echo "SIREN formaté                            : " . $response->getEntreprise()->getSirenFormate() . "\n";
echo "Diffusable                               : " . $response->getEntreprise()->getDiffusable() . "\n";
echo "Nom entreprise                           : " . $response->getEntreprise()->getNomEntreprise() . "\n";
echo "Personne morale                          : " . $response->getEntreprise()->getPersonneMorale() . "\n";
echo "Dénomination                             : " . $response->getEntreprise()->getDenomination() . "\n";
echo "Sigle                                    : " . $response->getEntreprise()->getSigle() . "\n";
echo "Nom                                      : " . $response->getEntreprise()->getNom() . "\n";
echo "Prénom                                   : " . $response->getEntreprise()->getPrenom() . "\n";
echo "Sexe                                     : " . $response->getEntreprise()->getSexe() . "\n";
echo "Siège                                    :\n";
echo "\tSIRET                   : " . $response->getEntreprise()->getSiege()->getSiret() . "\n";
echo "\tSIRET formaté           : " . $response->getEntreprise()->getSiege()->getSiretFormate() . "\n";
echo "\tNIC                     : " . $response->getEntreprise()->getSiege()->getNic() . "\n";
echo "\tNuméro voie             : " . $response->getEntreprise()->getSiege()->getNumeroVoie() . "\n";
echo "\tIndice répétition       : " . $response->getEntreprise()->getSiege()->getIndiceRepetition() . "\n";
echo "\tType voie               : " . $response->getEntreprise()->getSiege()->getTypeVoie() . "\n";
echo "\tLibellé voie            : " . $response->getEntreprise()->getSiege()->getLibelleVoie() . "\n";
echo "\tComplément adresse      : " . $response->getEntreprise()->getSiege()->getComplementAdresse() . "\n";
echo "\tAdresse ligne 1         : " . $response->getEntreprise()->getSiege()->getAdresseLigne1() . "\n";
echo "\tAdresse ligne 2         : " . $response->getEntreprise()->getSiege()->getAdresseLigne2() . "\n";
echo "\tCode postal             : " . $response->getEntreprise()->getSiege()->getCodePostal() . "\n";
echo "\tVille                   : " . $response->getEntreprise()->getSiege()->getVille() . "\n";
echo "\tPays                    : " . $response->getEntreprise()->getSiege()->getPays() . "\n";
echo "\tLatitude                : " . $response->getEntreprise()->getSiege()->getLatitude() . "\n";
echo "\tLongitude               : " . $response->getEntreprise()->getSiege()->getLongitude() . "\n";
echo "\tCode NAF                : " . $response->getEntreprise()->getSiege()->getCodeNaf() . "\n";
echo "\tLibellé code NAF        : " . $response->getEntreprise()->getSiege()->getLibelleCodeNaf() . "\n";
echo "\tDate création           : " . $response->getEntreprise()->getSiege()->getDateCreation() . "\n";
echo "\tEtablissement employeur : " . $response->getEntreprise()->getSiege()->getEtablissementEmployeur() . "\n";
echo "\tEffectif                : " . $response->getEntreprise()->getSiege()->getEffectif() . "\n";
echo "\tEffectif min.           : " . $response->getEntreprise()->getSiege()->getEffectifMin() . "\n";
echo "\tEffectif max.           : " . $response->getEntreprise()->getSiege()->getEffectifMax() . "\n";
echo "\tTranche effectif        : " . $response->getEntreprise()->getSiege()->getTrancheEffectif() . "\n";
echo "\tAnnée effectif          : " . $response->getEntreprise()->getSiege()->getAnneeEffectif() . "\n";
echo "\tEtablissement cessé     : " . $response->getEntreprise()->getSiege()->getEtablissementCesse() . "\n";
echo "\tDate cessation          : " . $response->getEntreprise()->getSiege()->getDateCessation() . "\n";
echo "\tDomiciliation           : " . $response->getEntreprise()->getSiege()->getDomiciliation() . "\n";
echo "\tSiège                   : " . $response->getEntreprise()->getSiege()->getSiege() . "\n";
echo "R.N.M.                                   : " . $response->getEntreprise()->getRnm() . "\n";
echo "Code NAF                                 : " . $response->getEntreprise()->getCodeNaf() . "\n";
echo "Libellé code NAF                         : " . $response->getEntreprise()->getLibelleCodeNaf() . "\n";
echo "Domaine activité                         : " . $response->getEntreprise()->getDomaineActivite() . "\n";
echo "Objet social                             : " . $response->getEntreprise()->getObjetSocial() . "\n";

echo "Convention collective                    :\n";
foreach ($response->getEntreprise()->getConventionCollectives() as $current) {

    echo "\tNom       : " . $current->getNom() . "\n";
    echo "\tIDCC      : " . $current->getIdcc() . "\n";
    echo "\tConfirmée : " . $current->getConfirmee() . "\n";
}

echo "Date création                            : " . $response->getEntreprise()->getDateCreation() . "\n";
echo "Date création formatée                   : " . $response->getEntreprise()->getDateCreationFormate() . "\n";
echo "Entreprise cessée                        : " . $response->getEntreprise()->getEntrepriseCessee() . "\n";
echo "Date cessation                           : " . $response->getEntreprise()->getDateCessation() . "\n";
echo "Date cessation formatée                  : " . $response->getEntreprise()->getDateCessationFormatee() . "\n";
echo "Associé unique                           : " . $response->getEntreprise()->getAssocieUnique() . "\n";
echo "Catégorie juridique                      : " . $response->getEntreprise()->getCategorieJuridique() . "\n";
echo "Forme juridique                          : " . $response->getEntreprise()->getFormeJuridique() . "\n";
echo "Entreprise employeuse                    : " . $response->getEntreprise()->getEntrepriseEmployeuse() . "\n";
echo "Effectif                                 : " . $response->getEntreprise()->getEffectif() . "\n";
echo "Effectif min.                            : " . $response->getEntreprise()->getEffectifMin() . "\n";
echo "Effectif max.                            : " . $response->getEntreprise()->getEffectifMax() . "\n";
echo "Tranche effectif                         : " . $response->getEntreprise()->getTrancheEffectif() . "\n";
echo "Année effectif                           : " . $response->getEntreprise()->getAnneeEffectif() . "\n";
echo "Capital                                  : " . $response->getEntreprise()->getCapital() . "\n";
echo "Capital formaté                          : " . $response->getEntreprise()->getCapitalFormate() . "\n";
echo "Capital actuel si variable               : " . $response->getEntreprise()->getCapitalActuelVariable() . "\n";
echo "Devise capital                           : " . $response->getEntreprise()->getDeviseCapital() . "\n";
echo "Date clôture exercice                    : " . $response->getEntreprise()->getDateClotureExercice() . "\n";
echo "Date clôture exercice exceptionnelle     : " . $response->getEntreprise()->getDateClotureExerciceExceptionnelle() . "\n";
echo "Prochaine date clôture exercice          : " . $response->getEntreprise()->getProchaineDateClotureExercice() . "\n";
echo "Prochaine date clôture exercice formatée : " . $response->getEntreprise()->getProchaineDateClotureExerciceFormate() . "\n";
echo "Economie sociale solidaire               : " . $response->getEntreprise()->getEconomieSocialeSolidaire() . "\n";
echo "Durée personne moral                     : " . $response->getEntreprise()->getDureePersonneMorale() . "\n";
echo "Dernière mise à jour SIRENE              : " . $response->getEntreprise()->getDerniereMiseJourSirene() . "\n";
echo "Dernière mise à jour R.C.S.              : " . $response->getEntreprise()->getDerniereMiseJourRcs() . "\n";
echo "Dernier traitement                       : " . $response->getEntreprise()->getDernierTraitement() . "\n";
echo "Statut R.C.S.                            : " . $response->getEntreprise()->getStatutRcs() . "\n";
echo "Greffe                                   : " . $response->getEntreprise()->getGreffe() . "\n";
echo "Numéro R.C.S.                            : " . $response->getEntreprise()->getNumeroRcs() . "\n";
echo "Date immatriculation R.C.S.              : " . $response->getEntreprise()->getDateImmatriculationRcs() . "\n";
echo "Date première immatriculation R.C.S.     : " . $response->getEntreprise()->getDatePremiereImmatriculationRcs() . "\n";
echo "Date radiation R.C.S.                    : " . $response->getEntreprise()->getDateRadiationRcs() . "\n";
echo "Numéro T.V.A. intracommunautaire         : " . $response->getEntreprise()->getNumeroTvaIntracommunautaire() . "\n";

echo "Etablissements                           :\n";
foreach ($response->getEntreprise()->getEtablissements() as $current) {

    echo "\tSIRET                   : " . $current->getSiret() . "\n";
    echo "\tSIRET formaté           : " . $current->getSiretFormate() . "\n";
    echo "\tNIC                     : " . $current->getNic() . "\n";
    echo "\tNuméro voie             : " . $current->getNumeroVoie() . "\n";
    echo "\tIndice répétition       : " . $current->getIndiceRepetition() . "\n";
    echo "\tType voie               : " . $current->getTypeVoie() . "\n";
    echo "\tLibellé voie            : " . $current->getLibelleVoie() . "\n";
    echo "\tComplément adresse      : " . $current->getComplementAdresse() . "\n";
    echo "\tAdresse ligne 1         : " . $current->getAdresseLigne1() . "\n";
    echo "\tAdresse ligne 2         : " . $current->getAdresseLigne2() . "\n";
    echo "\tCode postal             : " . $current->getCodePostal() . "\n";
    echo "\tVille                   : " . $current->getVille() . "\n";
    echo "\tPays                    : " . $current->getPays() . "\n";
    echo "\tLatitude                : " . $current->getLatitude() . "\n";
    echo "\tLongitude               : " . $current->getLongitude() . "\n";
    echo "\tCode NAF                : " . $current->getCodeNaf() . "\n";
    echo "\tLibellé code NAF        : " . $current->getLibelleCodeNaf() . "\n";
    echo "\tEtablissement employeur : " . $current->getEtablissementEmployeur() . "\n";
    echo "\tEffectif                : " . $current->getEffectif() . "\n";
    echo "\tEffectif min.           : " . $current->getEffectifMin() . "\n";
    echo "\tEffectif max.           : " . $current->getEffectifMax() . "\n";
    echo "\tTranche effectif        : " . $current->getTrancheEffectif() . "\n";
    echo "\tAnnée effectif          : " . $current->getAnneeEffectif() . "\n";
    echo "\tDate création           : " . $current->getDateCreation() . "\n";
    echo "\tEtablissement cessé     : " . $current->getEtablissementCesse() . "\n";
    echo "\tDate cessation          : " . $current->getDateCessation() . "\n";
    echo "\tDomiciliation           : " . $current->getDomiciliation() . "\n";
    echo "\tSiège                   : " . $current->getSiege() . "\n";
}

echo "Finances                                 :\n";
foreach ($response->getEntreprise()->getFinances() as $current) {

    echo "\tAnnée                 : " . $current->getAnnee() . "\n";
    echo "\tDate clôture exercice : " . $current->getDateClotureExercice() . "\n";
    echo "\tDurée exercice        : " . $current->getDureeExercice() . "\n";
    echo "\tChiffre d'affaires    : " . $current->getChiffreAffaires() . "\n";
    echo "\tRésultat              : " . $current->getResultat() . "\n";
    echo "\tEffectif              : " . $current->getEffectif() . "\n";
}

echo "Représentants                            :\n";
foreach ($response->getEntreprise()->getRepresentants() as $current) {

    echo "\tQualité                 : " . $current->getQualite() . "\n";
    echo "\tPersonne morale         : " . $current->getPersonneMorale() . "\n";
    echo "\tDate prise de poste     : " . $current->getDatePrisePoste() . "\n";
    echo "\tNom                     : " . $current->getNom() . "\n";
    echo "\tPrénom                  : " . $current->getPrenom() . "\n";
    echo "\tNom complet             : " . $current->getNomComplet() . "\n";
    echo "\tDate naissance          : " . $current->getDateNaissance() . "\n";
    echo "\tDate naissance formatée : " . $current->getDateNaissanceFormatee() . "\n";
    echo "\tAge                     : " . $current->getAge() . "\n";
    echo "\tNationalité             : " . $current->getNationalite() . "\n";
    echo "\tVille naissance         : " . $current->getVilleNaissance() . "\n";
    echo "\tPays naissance          : " . $current->getPaysNaissance() . "\n";
    echo "\tAdresse ligne 1         : " . $current->getAdresseLigne1() . "\n";
    echo "\tAdresse ligne 2         : " . $current->getAdresseLigne2() . "\n";
    echo "\tAdresse ligne 3         : " . $current->getAdresseLigne3() . "\n";
    echo "\tCode postal             : " . $current->getCodePostal() . "\n";
    echo "\tVille                   : " . $current->getVille() . "\n";
    echo "\tPays                    : " . $current->getPays() . "\n";
}

echo "Bénéficiaires effectifs                  :\n";
foreach ($response->getEntreprise()->getBeneficiairesEffectifs() as $current) {

    echo "\tDate greffe                                          : " . $current->getDateGreffe() . "\n";
    echo "\tType                                                 : " . $current->getType() . "\n";
    echo "\tNom                                                  : " . $current->getNom() . "\n";
    echo "\tNom usage                                            : " . $current->getNomUsage() . "\n";
    echo "\tPrénom                                               : " . $current->getPrenom() . "\n";
    echo "\tPseudonyme                                           : " . $current->getPseudonyme() . "\n";
    echo "\tNationalité                                          : " . $current->getNationalite() . "\n";
    echo "\tDate naissance formatée                              : " . $current->getDateNaissanceFormatee() . "\n";
    echo "\tDate naissance complète formatée                     : " . $current->getDateNaissanceCompleteFormatee() . "\n";
    echo "\tVille naissance                                      : " . $current->getVilleNaissance() . "\n";
    echo "\tPays naissance                                       : " . $current->getPaysNaissance() . "\n";
    echo "\tAdresse ligne 1                                      : " . $current->getAdresseLigne1() . "\n";
    echo "\tAdresse ligne 2                                      : " . $current->getAdresseLigne2() . "\n";
    echo "\tAdresse ligne 3                                      : " . $current->getAdresseLigne3() . "\n";
    echo "\tCode postal                                          : " . $current->getCodePostal() . "\n";
    echo "\tVille                                                : " . $current->getVille() . "\n";
    echo "\tPays                                                 : " . $current->getPays() . "\n";
    echo "\tPourcentage parts                                    : " . $current->getPourcentageParts() . "\n";
    echo "\tPourcentage parts directes                           : " . $current->getPourcentagePartsDirectes() . "\n";
    echo "\tPourcentage parts indirectes                         : " . $current->getPourcentagePartsIndirectes() . "\n";
    echo "\tPourcentage parts vocation titulaire                 : " . $current->getPourcentagePartsVocationTitulaire() . "\n";
    echo "\tDétails parts directes                               : [...]\n";
    echo "\tDétails parts indirectes                             : [...]\n";
    echo "\tDétails parts vocation titulaire                     : [...]\n";
    echo "\tPourcentage votes                                    : " . $current->getPourcentageVotes() . "\n";
    echo "\tPourcentage votes directs                            : " . $current->getPourcentageVotesDirects() . "\n";
    echo "\tPourcentage votes indirects                          : " . $current->getPourcentageVotesIndirects() . "\n";
    echo "\tDétails votes directes                               : [...]\n";
    echo "\tDétails votes indirectes                             : [...]\n";
    echo "\tDétails société gestion                              : [...]\n";
    echo "\tDétention pouvoir A.G.                               : " . $current->getDetentionPouvoirDecisionAg() . "\n";
    echo "\tDétention pouvoir nom membre conseil administration  : " . $current->getDetentionPouvoirNomMembreConseilAdministration() . "\n";
    echo "\tDétention autres moyens contrôle                     : " . $current->getDetentionAutresMoyensControle() . "\n";
    echo "\tBénéficiaire représentant légal                      : " . $current->getBeneficiaireRepresentantLegal() . "\n";
    echo "\tReprésentant légal placement sans gestion délégation : " . $current->getRepresentantLegalPlacementSansGestionDelegation() . "\n";
}

echo "Dépôts actes                             :\n";
foreach ($response->getEntreprise()->getDepotsActes() as $current) {

    echo "\tDate dépôt         : " . $current->getDateDepot() . "\n";
    echo "\tDate dépôt formaté : " . $current->getDateDepotFormatee() . "\n";
    echo "\tDisponible         : " . $current->getDisponible() . "\n";
    echo "\tNom fichier        : " . $current->getNomFichierPdf() . "\n";
    echo "\tToken              : " . $current->getToken() . "\n";
    echo "\tActes              : [...]\n";
}

echo "Comptes                                  :\n";
foreach ($response->getEntreprise()->getComptes() as $current) {

    echo "\tDate dépôt                      : " . $current->getDateDepot() . "\n";
    echo "\tDate dépôt formaté              : " . $current->getDateDepotFormatee() . "\n";
    echo "\tDate clôture                    : " . $current->getDateCloture() . "\n";
    echo "\tAnnée clôture                   : " . $current->getAnneeCloture() . "\n";
    echo "\tType comptes                    : " . $current->getTypeComptes() . "\n";
    echo "\tConfidentialité                 : " . $current->getConfidentialite() . "\n";
    echo "\tConfidentialité compte résultat : " . $current->getConfidentialiteCompteResultat() . "\n";
    echo "\tDisponible                      : " . $current->getDisponible() . "\n";
    echo "\tNom fichier PDF                 : " . $current->getNomFichierPdf() . "\n";
    echo "\tToken                           : " . $current->getToken() . "\n";
}

echo "Publications BODACC                      :\n";
foreach ($response->getEntreprise()->getPublicationsBodacc() as $current) {

    echo "\tNuméro parution        : " . $current->getNumeroParution() . "\n";
    echo "\tDate                   : " . $current->getDate() . "\n";
    echo "\tNuméro annonce         : " . $current->getNumeroAnnonce() . "\n";
    echo "\tAnnonvce rectificative : " . $current->getAnnonceRectificative() . "\n";
    echo "\tBODACC                 : " . $current->getBodacc() . "\n";
    echo "\tType                   : " . $current->getType() . "\n";
    echo "\tR.C.S.                 : " . $current->getRcs() . "\n";
    echo "\tNom entreprise         : " . $current->getNomEntreprise() . "\n";
    echo "\tPersonne morale        : " . $current->getPersonneMorale() . "\n";
    echo "\tSigle                  : " . $current->getSigle() . "\n";
    echo "\tDénomination           : " . $current->getDenomination() . "\n";
    echo "\tNom commercial         : " . $current->getNomCommercial() . "\n";
    echo "\tForme juridique        : " . $current->getFormeJuridique() . "\n";
    echo "\tNom                    : " . $current->getNom() . "\n";
    echo "\tPrénom                 : " . $current->getPrenom() . "\n";
    echo "\tAdministration         : " . $current->getAdministration() . "\n";
    echo "\tPseudonyme             : " . $current->getPseudonyme() . "\n";
    echo "\tNationalité            : " . $current->getNationalite() . "\n";
    echo "\tAdresse                : " . $current->getAdresse() . "\n";
    echo "\tCapital                : " . $current->getCapital() . "\n";
    echo "\tDevise capital         : " . $current->getDeviseCapital() . "\n";
    echo "\tActivité               : " . $current->getActivite() . "\n";
    echo "\tDate début activité    : " . $current->getDateDebutActivite() . "\n";
    echo "\tDescription            : " . $current->getDescription() . "\n";
}

echo "Procédures collectives                   :\n";
foreach ($response->getEntreprise()->getProceduresCollectives() as $current) {

    echo "\tType                : " . $current->getType() . "\n";
    echo "\tDate début          : " . $current->getDateDebut() . "\n";
    echo "\tDate fin            : " . $current->getDateFin() . "\n";
    echo "\tPublications BODACC : [...]\n";
}

echo "Procédure collective existe              : " . $response->getEntreprise()->getProcedureCollectiveExiste() . "\n";
echo "Procédure collective en cours            : " . $response->getEntreprise()->getProcedureCollectiveEnCours() . "\n";
echo "Derniers statuts                         :\n";
echo "\tDate dépôt          : " . $response->getEntreprise()->getDerniersStatuts()->getDateDepot() . "\n";
echo "\tDate dépôt formatée : " . $response->getEntreprise()->getDerniersStatuts()->getDateDepotFormatee() . "\n";
echo "\tDisponible          : " . $response->getEntreprise()->getDerniersStatuts()->getDisponible() . "\n";
echo "\tNom fichier PDF     : " . $response->getEntreprise()->getDerniersStatuts()->getNomFichierPdf() . "\n";
echo "\tToken               : " . $response->getEntreprise()->getDerniersStatuts()->getToken() . "\n";
echo "\tType                : " . $response->getEntreprise()->getDerniersStatuts()->getType() . "\n";
echo "\tDécision            : " . $response->getEntreprise()->getDerniersStatuts()->getDecision() . "\n";
echo "\tDate acte           : " . $response->getEntreprise()->getDerniersStatuts()->getDateActe() . "\n";
echo "\tDate acte formaté   : " . $response->getEntreprise()->getDerniersStatuts()->getDateActeFormatee() . "\n";
echo "Extrait immatriculation :\n";
echo "\tToken : " . $response->getEntreprise()->getExtraitImmatriculation()->getToken() . "\n";
