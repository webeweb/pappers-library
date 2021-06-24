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
use WBW\Library\Pappers\Request\SuggestionsRequest;

// Create the provider.
$provider = new APIv2Provider();

// Create the request.
$request = new SuggestionsRequest();
$request->setQ("Google France");

// Call the API and get the response.
$response = $provider->suggestions($request);

// Handle the response.

echo "Entreprises :\n";
foreach ($response->getResultatsNomEntreprise() as $current) {

    echo "SIREN                         : " . $current->getSiren() . "\n";
    echo "SIREN formaté                 : " . $current->getSirenFormate() . "\n";
    echo "Nom entreprise                : " . $current->getNomEntreprise() . "\n";
    echo "Personne morale               : " . $current->getPersonneMorale() . "\n";
    echo "Dénomination                  : " . $current->getDenomination() . "\n";
    echo "Nom                           : " . $current->getNom() . "\n";
    echo "Prénom                        : " . $current->getPrenom() . "\n";
    echo "Sexe                          : " . $current->getSexe() . "\n";
    echo "Siège :\n";
    echo "\tSIRET              : " . $current->getSiege()->getSiret() . "\n";
    echo "\tSIRET formaté      : " . $current->getSiege()->getSiretFormate() . "\n";
    echo "\tNIC                : " . $current->getSiege()->getNic() . "\n";
    echo "\tNuméro voie        : " . $current->getSiege()->getNumeroVoie() . "\n";
    echo "\tIndice répétition  : " . $current->getSiege()->getIndiceRepetition() . "\n";
    echo "\tType voie          : " . $current->getSiege()->getTypeVoie() . "\n";
    echo "\tLibellé voie       : " . $current->getSiege()->getLibelleVoie() . "\n";
    echo "\tComplément adresse : " . $current->getSiege()->getComplementAdresse() . "\n";
    echo "\tAdresse ligne 1    : " . $current->getSiege()->getAdresseLigne1() . "\n";
    echo "\tAdresse ligne 2    : " . $current->getSiege()->getAdresseLigne2() . "\n";
    echo "\tCode postal        : " . $current->getSiege()->getCodePostal() . "\n";
    echo "\tVille              : " . $current->getSiege()->getVille() . "\n";
    echo "\tPays               : " . $current->getSiege()->getPays() . "\n";
    echo "\tLatitude           : " . $current->getSiege()->getLatitude() . "\n";
    echo "\tLongitude          : " . $current->getSiege()->getLongitude() . "\n";
    echo "\tVilles             : " . implode(", ", $current->getVilles()) . "\n";
    echo "Code NAF                      : " . $current->getCodeNaf() . "\n";
    echo "Libellé code NAF              : " . $current->getLibelleCodeNaf() . "\n";
    echo "Domaine activité              : " . $current->getDomaineActivite() . "\n";
    echo "Objet social                  : " . $current->getObjetSocial() . "\n";

    echo "Convention collective         :\n";
    foreach ($current->getConventionCollectives() as $c) {

        echo "\tNom       : " . $c->getNom() . "\n";
        echo "\tIDCC      : " . $c->getIdcc() . "\n";
        echo "\tConfirmée : " . $c->getConfirmee() . "\n";
    }

    echo "Date création                 : " . $current->getDateCreation() . "\n";
    echo "Date création formatée        : " . $current->getDateCreationFormate() . "\n";
    echo "Entreprise employeuse         : " . $current->getEntrepriseEmployeuse() . "\n";
    echo "Entreprise cessée             : " . $current->getEntrepriseCessee() . "\n";
    echo "Date cessation                : " . $current->getDateCessation() . "\n";
    echo "Catégorie juridique           : " . $current->getCategorieJuridique() . "\n";
    echo "Forme juridique               : " . $current->getFormeJuridique() . "\n";
    echo "Tranche effectif              : " . $current->getTrancheEffectif() . "\n";
    echo "Effectif                      : " . $current->getEffectif() . "\n";
    echo "Effectif min.                 : " . $current->getEffectifMin() . "\n";
    echo "Effectif max.                 : " . $current->getEffectifMax() . "\n";
    echo "Année effectif                : " . $current->getAnneeEffectif() . "\n";
    echo "Capital                       : " . $current->getCapital() . "\n";
    echo "Chiffre affaires              : " . $current->getChiffreAffaires() . "\n";
    echo "Résultat                      : " . $current->getResultat() . "\n";
    echo "Effectifs finances            : " . $current->getEffectifsFinances() . "\n";
    echo "Année finances                : " . $current->getAnneeFinances() . "\n";
}