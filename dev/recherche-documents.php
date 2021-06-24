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
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new RechercheDocumentsRequest();
$request->setCodeNaf("70.10Z");
$request->setDepartement("75");
$request->setRegion("11");
$request->setCodePostal("75009");
$request->setConventionCollective("1486");
$request->setCategorieJuridique("5498");
$request->setEntrepriseCessee(false);
$request->setStatutRcs("inscrit");

// Call the API and get the response.
$response = $provider->rechercheDocuments($request);

// Handle the response.
echo "Page      : " . $response->getPage() . "\n";
echo "Total     : " . $response->getTotal() . "\n";

echo "Documents :\n";
foreach ($response->getResultats() as $current) {

    echo "Titres     :\n";
    foreach ($current->getTitres() as $t) {

        echo "\t Décision : " . $t->getDecision() . "\n";
        echo "\t Type     : " . $t->getType() . "\n";
    }

    echo "SIREN      : " . $current->getSiren() . "\n";
    echo "Num chrono : " . $current->getNumChrono() . "\n";
    echo "Date dépôt : " . $current->getDateDepot() . "\n";
    echo "Id fichier : " . $current->getIdFichier() . "\n";
    echo "Type       : " . $current->getType() . "\n";
    echo "Mentions   : " . implode(", ", $current->getMentions()) . "\n";

    echo "Entreprise :\n";
    echo "\tSIREN                   : " . $current->getEntreprise()->getSiren() . "\n";
    echo "\tSIREN formaté           : " . $current->getEntreprise()->getSirenFormate() . "\n";
    echo "\tNom entreprise          : " . $current->getEntreprise()->getNomEntreprise() . "\n";
    echo "\tPersonne morale         : " . $current->getEntreprise()->getPersonneMorale() . "\n";
    echo "\tDénomination            : " . $current->getEntreprise()->getDenomination() . "\n";
    echo "\tNom                     : " . $current->getEntreprise()->getNom() . "\n";
    echo "\tPrénom                  : " . $current->getEntreprise()->getPrenom() . "\n";
    echo "\tSexe                    : " . $current->getEntreprise()->getSexe() . "\n";
    echo "\tSiège                   : [...]\n";
    echo "\tVilles                  : " . implode(", ", $current->getEntreprise()->getVilles()) . "\n";
    echo "\tCode NAF                : " . $current->getEntreprise()->getCodeNaf() . "\n";
    echo "\tLibellé code NAF        : " . $current->getEntreprise()->getLibelleCodeNaf() . "\n";
    echo "\tDomaine activité        : " . $current->getEntreprise()->getDomaineActivite() . "\n";
    echo "\tConventions collectives : [...]\n";
    echo "\tDate création           : " . $current->getEntreprise()->getDateCreation() . "\n";
    echo "\tDate création formatée  : " . $current->getEntreprise()->getDateCreationFormate() . "\n";
    echo "\tEntreprise employeuse   : " . $current->getEntreprise()->getEntrepriseEmployeuse() . "\n";
    echo "\tEntreprise cessée       : " . $current->getEntreprise()->getEntrepriseCessee() . "\n";
    echo "\tDate cessation          : " . $current->getEntreprise()->getDateCessation() . "\n";
    echo "\tCatégorie juridique     : " . $current->getEntreprise()->getCategorieJuridique() . "\n";
    echo "\tForme juridique         : " . $current->getEntreprise()->getFormeJuridique() . "\n";
    echo "\tTranche effectif        : " . $current->getEntreprise()->getTrancheEffectif() . "\n";
    echo "\tEffectif                : " . $current->getEntreprise()->getEffectif() . "\n";
    echo "\tEffectif min.           : " . $current->getEntreprise()->getEffectifMin() . "\n";
    echo "\tEffectif max.           : " . $current->getEntreprise()->getEffectifMax() . "\n";
    echo "\tAnnée effectif          : " . $current->getEntreprise()->getAnneeEffectif() . "\n";
    echo "\tCapital                 : " . $current->getEntreprise()->getCapital() . "\n";
    echo "\tChiffre affaires        : " . $current->getEntreprise()->getChiffreAffaires() . "\n";
    echo "\tRésultat                : " . $current->getEntreprise()->getResultat() . "\n";
    echo "\tEffectifs finances      : " . $current->getEntreprise()->getEffectifsFinances() . "\n";
    echo "\tAnnée finances          : " . $current->getEntreprise()->getAnneeFinances() . "\n";

    echo "Token      : " . $current->getToken() . "\n";
}
