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
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new RechercheDirigeantsRequest();
$request->setQ("Google France");

// Call the API and get the response.
$response = $provider->rechercheDirigeants($request);

// Handle the response.
$format = "%-30s: %s\n";

echo sprintf($format, "Page", $response->getPage());
echo sprintf($format, "Total", $response->getTotal());

echo sprintf($format, "Dirigeants", "");
foreach ($response->getResultats() as $current) {

    echo sprintf($format, "Qualite", $current->getQualite());
    echo sprintf($format, "Personne morale", $current->getPersonneMorale());
    echo sprintf($format, "Date prise de poste", $current->getDatePrisePoste());
    echo sprintf($format, "Actuel", $current->getActuel());
    echo sprintf($format, "Denomination", $current->getDenomination());
    echo sprintf($format, "SIREN", $current->getSiren());
    echo sprintf($format, "Nom complet", $current->getNomComplet());
    echo sprintf($format, "Forme juridique", $current->getFormeJuridique());

    echo sprintf($format, "Entreprises", "");
    foreach ($current->getEntreprises() as $e) {
        echo sprintf($format, "    SIREN", $e->getSiren());
        echo sprintf($format, "    SIREN formate", $e->getSirenFormate());
        echo sprintf($format, "    Nom entreprise", $e->getNomEntreprise());
        echo sprintf($format, "    Nom", $e->getNom());
        echo sprintf($format, "    Prenom", $e->getPrenom());
        echo sprintf($format, "    Sexe", $e->getSexe());
        echo sprintf($format, "    Siege", "[...]");
        echo sprintf($format, "    Villes", implode(", ", $e->getVilles()));
        echo sprintf($format, "    Code NAF", $e->getCodeNaf());
        echo sprintf($format, "    Libelle code NAF", $e->getLibelleCodeNaf());
        echo sprintf($format, "    Domaine activite", $e->getDomaineActivite());
        echo sprintf($format, "    Conventions collectives", "[...]");
        echo sprintf($format, "    Date creation", $e->getDateCreation());
        echo sprintf($format, "    Date creation formatee", $e->getDateCreationFormate());
        echo sprintf($format, "    Entreprise employeuse", $e->getEntrepriseEmployeuse());
        echo sprintf($format, "    Entreprise cessee", $e->getEntrepriseCessee());
        echo sprintf($format, "    Date cessation", $e->getDateCessation());
        echo sprintf($format, "    Categorie juridique", $e->getCategorieJuridique());
        echo sprintf($format, "    Forme juridique", $e->getFormeJuridique());
        echo sprintf($format, "    Tranche effectif", $e->getTrancheEffectif());
        echo sprintf($format, "    Effectif", $e->getEffectif());
        echo sprintf($format, "    Effectif min.", $e->getEffectifMin());
        echo sprintf($format, "    Effectif max.", $e->getEffectifMax());
        echo sprintf($format, "    Annee effectif", $e->getAnneeEffectif());
        echo sprintf($format, "    Capital", $e->getCapital());
        echo sprintf($format, "    Chiffre affaires", $e->getChiffreAffaires());
        echo sprintf($format, "    Resultat", $e->getResultat());
        echo sprintf($format, "    Effectifs finances", $e->getEffectifsFinances());
        echo sprintf($format, "    Annee finances", $e->getAnneeFinances());
    }

    echo sprintf($format, "Nb entreprises total", $current->getNbEntreprisesTotal());
}
