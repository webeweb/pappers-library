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
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Tests\AbstractTestCase;

// Create the provider.
$provider = new APIv2Provider(AbstractTestCase::getToken());

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
$format = "%-30s: %s\n";

echo sprintf($format, "Page", $response->getPage());
echo sprintf($format, "Total", $response->getTotal());

echo sprintf($format, "Documents ", "");
foreach ($response->getResultats() as $current) {

    echo sprintf($format, "Titres", "");
    foreach ($current->getTitres() as $t) {

        echo sprintf($format, "     Decision", $t->getDecision());
        echo sprintf($format, "     Type", $t->getType());
    }

    echo sprintf($format, "SIREN", $current->getSiren());
    echo sprintf($format, "Num chrono", $current->getNumChrono());
    echo sprintf($format, "Date depot", $current->getDateDepot());
    echo sprintf($format, "Id fichier", $current->getIdFichier());
    echo sprintf($format, "Type", $current->getType());
    echo sprintf($format, "Mentions", implode(", ", $current->getMentions()));

    echo sprintf($format, "Entreprise", "");
    echo sprintf($format, "    SIREN", $current->getEntreprise()->getSiren());
    echo sprintf($format, "    SIREN formate", $current->getEntreprise()->getSirenFormate());
    echo sprintf($format, "    Nom entreprise", $current->getEntreprise()->getNomEntreprise());
    echo sprintf($format, "    Personne morale", $current->getEntreprise()->getPersonneMorale());
    echo sprintf($format, "    Denomination", $current->getEntreprise()->getDenomination());
    echo sprintf($format, "    Nom", $current->getEntreprise()->getNom());
    echo sprintf($format, "    Prenom", $current->getEntreprise()->getPrenom());
    echo sprintf($format, "    Sexe", $current->getEntreprise()->getSexe());
    echo sprintf($format, "    Siege", "[...]");
    echo sprintf($format, "    Villes", implode(", ", $current->getEntreprise()->getVilles()));
    echo sprintf($format, "    Code NAF", $current->getEntreprise()->getCodeNaf());
    echo sprintf($format, "    Libelle code NAF", $current->getEntreprise()->getLibelleCodeNaf());
    echo sprintf($format, "    Domaine activite", $current->getEntreprise()->getDomaineActivite());
    echo sprintf($format, "    Conventions collectives", "[...]");
    echo sprintf($format, "    Date creation", $current->getEntreprise()->getDateCreation());
    echo sprintf($format, "    Date creation formatee", $current->getEntreprise()->getDateCreationFormate());
    echo sprintf($format, "    Entreprise employeuse", $current->getEntreprise()->getEntrepriseEmployeuse());
    echo sprintf($format, "    Entreprise cessee", $current->getEntreprise()->getEntrepriseCessee());
    echo sprintf($format, "    Date cessation", $current->getEntreprise()->getDateCessation());
    echo sprintf($format, "    Categorie juridique", $current->getEntreprise()->getCategorieJuridique());
    echo sprintf($format, "    Forme juridique", $current->getEntreprise()->getFormeJuridique());
    echo sprintf($format, "    Tranche effectif", $current->getEntreprise()->getTrancheEffectif());
    echo sprintf($format, "    Effectif", $current->getEntreprise()->getEffectif());
    echo sprintf($format, "    Effectif min.", $current->getEntreprise()->getEffectifMin());
    echo sprintf($format, "    Effectif max.", $current->getEntreprise()->getEffectifMax());
    echo sprintf($format, "    Annee effectif", $current->getEntreprise()->getAnneeEffectif());
    echo sprintf($format, "    Capital", $current->getEntreprise()->getCapital());
    echo sprintf($format, "    Chiffre affaires", $current->getEntreprise()->getChiffreAffaires());
    echo sprintf($format, "    Resultat", $current->getEntreprise()->getResultat());
    echo sprintf($format, "    Effectifs finances", $current->getEntreprise()->getEffectifsFinances());
    echo sprintf($format, "    Annee finances", $current->getEntreprise()->getAnneeFinances());

    echo sprintf($format, "Token", $current->getToken());
}
