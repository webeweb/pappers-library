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
use WBW\Library\Pappers\Request\RechercheRequest;

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new RechercheRequest();
$request->setQ("Google France");

// Call the API and get the response.
$response = $provider->recherche($request);

// Handle the response.
$format = "%-30s: %s\n";

echo sprintf($format, "Page", $response->getPage());
echo sprintf($format, "Total", $response->getTotal());

echo sprintf($format, "Entreprises", "");
foreach ($response->getResultats() as $current) {

    echo sprintf($format, "SIREN", $current->getSiren());
    echo sprintf($format, "SIREN formate", $current->getSirenFormate());
    echo sprintf($format, "Nom entreprise", $current->getNomEntreprise());
    echo sprintf($format, "Personne morale", $current->getPersonneMorale());
    echo sprintf($format, "Denomination", $current->getDenomination());
    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Prenom", $current->getPrenom());
    echo sprintf($format, "Sexe", $current->getSexe());
    echo sprintf($format, "Siege", "");
    echo sprintf($format, "    SIRET", $current->getSiege()->getSiret());
    echo sprintf($format, "    SIRET formate", $current->getSiege()->getSiretFormate());
    echo sprintf($format, "    NIC", $current->getSiege()->getNic());
    echo sprintf($format, "    Numero voie", $current->getSiege()->getNumeroVoie());
    echo sprintf($format, "    Indice repetition", $current->getSiege()->getIndiceRepetition());
    echo sprintf($format, "    Type voie", $current->getSiege()->getTypeVoie());
    echo sprintf($format, "    Libelle voie", $current->getSiege()->getLibelleVoie());
    echo sprintf($format, "    Complement adresse", $current->getSiege()->getComplementAdresse());
    echo sprintf($format, "    Adresse ligne 1", $current->getSiege()->getAdresseLigne1());
    echo sprintf($format, "    Adresse ligne 2", $current->getSiege()->getAdresseLigne2());
    echo sprintf($format, "    Code postal", $current->getSiege()->getCodePostal());
    echo sprintf($format, "    Ville", $current->getSiege()->getVille());
    echo sprintf($format, "    Pays", $current->getSiege()->getPays());
    echo sprintf($format, "    Latitude", $current->getSiege()->getLatitude());
    echo sprintf($format, "    Longitude", $current->getSiege()->getLongitude());
    echo sprintf($format, "    Villes", implode(", ", $current->getVilles()));
    echo sprintf($format, "Code NAF", $current->getCodeNaf());
    echo sprintf($format, "Libelle code NAF", $current->getLibelleCodeNaf());
    echo sprintf($format, "Domaine activite", $current->getDomaineActivite());
    echo sprintf($format, "Objet social", $current->getObjetSocial());

    echo sprintf($format, "Convention collective", "");
    foreach ($current->getConventionCollectives() as $c) {

        echo sprintf($format, "    Nom", $c->getNom());
        echo sprintf($format, "    IDCC", $c->getIdcc());
        echo sprintf($format, "    Confirmee", $c->getConfirmee());
    }

    echo sprintf($format, "Date creation", $current->getDateCreation());
    echo sprintf($format, "Date creation formatee", $current->getDateCreationFormate());
    echo sprintf($format, "Entreprise employeuse", $current->getEntrepriseEmployeuse());
    echo sprintf($format, "Entreprise cessee", $current->getEntrepriseCessee());
    echo sprintf($format, "Date cessation", $current->getDateCessation());
    echo sprintf($format, "Categorie juridique", $current->getCategorieJuridique());
    echo sprintf($format, "Forme juridique", $current->getFormeJuridique());
    echo sprintf($format, "Tranche effectif", $current->getTrancheEffectif());
    echo sprintf($format, "Effectif", $current->getEffectif());
    echo sprintf($format, "Effectif min.", $current->getEffectifMin());
    echo sprintf($format, "Effectif max.", $current->getEffectifMax());
    echo sprintf($format, "Annee effectif", $current->getAnneeEffectif());
    echo sprintf($format, "Capital", $current->getCapital());
    echo sprintf($format, "Chiffre affaires", $current->getChiffreAffaires());
    echo sprintf($format, "Resultat", $current->getResultat());
    echo sprintf($format, "Effectifs finances", $current->getEffectifsFinances());
    echo sprintf($format, "Annee finances", $current->getAnneeFinances());

    echo sprintf($format, "Dirigeants", "");
    foreach ($current->getRepresentants() as $d) {

    }

    echo sprintf($format, "Beneficiaires", "");
    foreach ($current->getBeneficiairesEffectifs() as $b) {

    }

    echo sprintf($format, "Documents", "");
    foreach ($current->getDocuments() as $d) {

    }

    echo sprintf($format, "Publications", "");
    foreach ($current->getPublicationsBodacc() as $p) {

    }

    echo sprintf($format, "Nb dirigeants total", $current->getNbDirigeantsTotal());
    echo sprintf($format, "Nb beneficiaires total", $current->getNbBeneficiairesTotal());
    echo sprintf($format, "Nb documents avec mentions", $current->getNbDocumentsAvecMentions());
    echo sprintf($format, "Nb documents total", $current->getNbDocumentsTotal());
    echo sprintf($format, "Nb publications avec mentions", $current->getNbPublicationsAvecMentions());
    echo sprintf($format, "Nb publications total", $current->getNbPublicationsTotal());
}
