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
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new RechercheDirigeantsRequest();
$request->setQ("Google France");

// Call the API and get the response.
$response = $provider->rechercheDirigeants($request);

// Handle the response.
echo "Page       : " . $response->getPage() . "\n";
echo "Total      : " . $response->getTotal() . "\n";

echo "Dirigeants :\n";
foreach ($response->getResultats() as $current) {

    echo "Qualité              : " . $current->getQualite() . "\n";
    echo "Personne morale      : " . $current->getPersonneMorale() . "\n";
    echo "Date prise de poste  : " . $current->getDatePrisePoste() . "\n";
    echo "Actuel               : " . $current->getActuel() . "\n";
    echo "Dénomination         : " . $current->getDenomination() . "\n";
    echo "SIREN                : " . $current->getSiren() . "\n";
    echo "Nom complet          : " . $current->getNomComplet() . "\n";
    echo "Forme juridique      : " . $current->getFormeJuridique() . "\n";

    echo "Entreprises          :\n";
    foreach ($current->getEntreprises() as $e) {
        echo "\tSIREN                   : " . $e->getSiren() . "\n";
        echo "\tSIREN formaté           : " . $e->getSirenFormate() . "\n";
        echo "\tNom entreprise          : " . $e->getNomEntreprise() . "\n";
        echo "\tNom                     : " . $e->getNom() . "\n";
        echo "\tPrénom                  : " . $e->getPrenom() . "\n";
        echo "\tSexe                    : " . $e->getSexe() . "\n";
        echo "\tSiège                   : [...]\n";
        echo "\tVilles                  : " . implode(", ", $e->getVilles()) . "\n";
        echo "\tCode NAF                : " . $e->getCodeNaf() . "\n";
        echo "\tLibellé code NAF        : " . $e->getLibelleCodeNaf() . "\n";
        echo "\tDomaine activité        : " . $e->getDomaineActivite() . "\n";
        echo "\tConventions collectives : [...]\n";
        echo "\tDate création           : " . $e->getDateCreation() . "\n";
        echo "\tDate création formatée  : " . $e->getDateCreationFormate() . "\n";
        echo "\tEntreprise employeuse   : " . $e->getEntrepriseEmployeuse() . "\n";
        echo "\tEntreprise cessée       : " . $e->getEntrepriseCessee() . "\n";
        echo "\tDate cessation          : " . $e->getDateCessation() . "\n";
        echo "\tCatégorie juridique     : " . $e->getCategorieJuridique() . "\n";
        echo "\tForme juridique         : " . $e->getFormeJuridique() . "\n";
        echo "\tTranche effectif        : " . $e->getTrancheEffectif() . "\n";
        echo "\tEffectif                : " . $e->getEffectif() . "\n";
        echo "\tEffectif min.           : " . $e->getEffectifMin() . "\n";
        echo "\tEffectif max.           : " . $e->getEffectifMax() . "\n";
        echo "\tAnnée effectif          : " . $e->getAnneeEffectif() . "\n";
        echo "\tCapital                 : " . $e->getCapital() . "\n";
        echo "\tChiffre affaires        : " . $e->getChiffreAffaires() . "\n";
        echo "\tRésultat                : " . $e->getResultat() . "\n";
        echo "\tEffectifs finances      : " . $e->getEffectifsFinances() . "\n";
        echo "\tAnnée finances          : " . $e->getAnneeFinances() . "\n";
    }

    echo "Nb entreprises total : " . $current->getNbEntreprisesTotal() . "\n";
}
