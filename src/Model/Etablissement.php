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

use WBW\Library\Pappers\Model\Attribute\IntegerAnneeEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerEffectifMaxTrait;
use WBW\Library\Pappers\Model\Attribute\IntegerEffectifMinTrait;
use WBW\Library\Pappers\Model\Attribute\StringAdresseLigne1Trait;
use WBW\Library\Pappers\Model\Attribute\StringAdresseLigne2Trait;
use WBW\Library\Pappers\Model\Attribute\StringCodeNafTrait;
use WBW\Library\Pappers\Model\Attribute\StringCodePostalTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateCessationTrait;
use WBW\Library\Pappers\Model\Attribute\StringEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\StringNicTrait;
use WBW\Library\Pappers\Model\Attribute\StringPaysTrait;
use WBW\Library\Pappers\Model\Attribute\StringSiretFormateTrait;
use WBW\Library\Pappers\Model\Attribute\StringSiretTrait;
use WBW\Library\Pappers\Model\Attribute\StringTrancheEffectifTrait;
use WBW\Library\Pappers\Model\Attribute\StringVilleTrait;

/**
 * Etablissement.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Etablissement {

    use IntegerAnneeEffectifTrait;
    use IntegerEffectifMaxTrait;
    use IntegerEffectifMinTrait;
    use StringAdresseLigne1Trait;
    use StringAdresseLigne2Trait;
    use StringCodeNafTrait;
    use StringCodePostalTrait;
    use StringDateCessationTrait;
    use StringEffectifTrait;
    use StringNicTrait;
    use StringPaysTrait;
    use StringSiretFormateTrait;
    use StringSiretTrait;
    use StringTrancheEffectifTrait;
    use StringVilleTrait;

    /**
     * Complément adresse.
     *
     * @var string|null
     */
    private $complementAdresse;

    /**
     * Date création.
     *
     * @var string|null
     */
    private $dateCreation;

    /**
     * Domiciliation.
     *
     * @var string|null
     */
    private $domiciliation;

    /**
     * Etablissement cessé.
     *
     * @var bool|null
     */
    private $etablissementCesse;

    /**
     * Etablissment employeur.
     *
     * @var bool|null
     */
    private $etablissementEmployeur;

    /**
     * Indice répétition.
     *
     * @var string|null
     */
    private $indiceRepetition;

    /**
     * Latitude.
     *
     * @var float|null
     */
    private $latitude;

    /**
     * Libellé code NAF.
     *
     * @var string|null
     */
    private $libelleCodeNaf;

    /**
     * Libellé voie.
     *
     * @var string|null
     */
    private $libelleVoie;

    /**
     * Longitude.
     *
     * @var float|null
     */
    private $longitude;

    /**
     * Numéro voie.
     *
     * @var int|null
     */
    private $numeroVoie;

    /**
     * Siège.
     *
     * @var bool|null
     */
    private $siege;

    /**
     * Type voie.
     *
     * @var string|null
     */
    private $typeVoie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the complément adresse.
     *
     * @return string|null Returns the complément adresse.
     */
    public function getComplementAdresse(): ?string {
        return $this->complementAdresse;
    }

    /**
     * Get the date création.
     *
     * @return string|null Returns the date création.
     */
    public function getDateCreation(): ?string {
        return $this->dateCreation;
    }

    /**
     * Get the domiciliation.
     *
     * @return string|null Returns the domiciliation.
     */
    public function getDomiciliation(): ?string {
        return $this->domiciliation;
    }

    /**
     * Get the établissement cessé.
     *
     * @return bool|null Returns the établissement cessé.
     */
    public function getEtablissementCesse(): ?bool {
        return $this->etablissementCesse;
    }

    /**
     * Get the établissement employeur.
     *
     * @return bool|null Returns the établissement employeur.
     */
    public function getEtablissementEmployeur(): ?bool {
        return $this->etablissementEmployeur;
    }

    /**
     * Get the indice répétition.
     *
     * @return string|null Returns the indice répétition.
     */
    public function getIndiceRepetition(): ?string {
        return $this->indiceRepetition;
    }

    /**
     * Get the latitude.
     *
     * @return float|null Returns the latitude.
     */
    public function getLatitude(): ?float {
        return $this->latitude;
    }

    /**
     * Get the libellé code NAF.
     *
     * @return string|null Returns the libellé code NAF.
     */
    public function getLibelleCodeNaf(): ?string {
        return $this->libelleCodeNaf;
    }

    /**
     * Get the libellé voie.
     *
     * @return string|null Returns the libellé voie.
     */
    public function getLibelleVoie(): ?string {
        return $this->libelleVoie;
    }

    /**
     * Get the longitude.
     *
     * @return float|null Returns the longitude.
     */
    public function getLongitude(): ?float {
        return $this->longitude;
    }

    /**
     * Get the numéro voie.
     *
     * @return int|null Returns the numéro voie.
     */
    public function getNumeroVoie(): ?int {
        return $this->numeroVoie;
    }

    /**
     * Get the siège.
     *
     * @return bool|null Returns the siège.
     */
    public function getSiege(): ?bool {
        return $this->siege;
    }

    /**
     * Get the type voie.
     *
     * @return string|null Returns the type voie.
     */
    public function getTypeVoie(): ?string {
        return $this->typeVoie;
    }

    /**
     * Set the complément adresse.
     *
     * @param string|null $complementAdresse The complément adresse.
     * @return Etablissement Returns this établissement.
     */
    public function setComplementAdresse(?string $complementAdresse): Etablissement {
        $this->complementAdresse = $complementAdresse;
        return $this;
    }

    /**
     * Set the date création.
     *
     * @param string|null $dateCreation The date création.
     * @return Etablissement Returns this établissement.
     */
    public function setDateCreation(?string $dateCreation): Etablissement {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the domiciliation.
     *
     * @param string|null $domiciliation The domiciliation.
     * @return Etablissement Returns this établissement.
     */
    public function setDomiciliation(?string $domiciliation): Etablissement {
        $this->domiciliation = $domiciliation;
        return $this;
    }

    /**
     * Set the établissement cessé.
     *
     * @param bool|null $etablissementCesse The établissement cessé.
     * @return Etablissement Returns this établissement.
     */
    public function setEtablissementCesse(?bool $etablissementCesse): Etablissement {
        $this->etablissementCesse = $etablissementCesse;
        return $this;
    }

    /**
     * Set the établissement employeur.
     *
     * @param bool|null $etablissementEmployeur The établissement employeur.
     * @return Etablissement Returns this établissement.
     */
    public function setEtablissementEmployeur(?bool $etablissementEmployeur): Etablissement {
        $this->etablissementEmployeur = $etablissementEmployeur;
        return $this;
    }

    /**
     * Set the indice répétition.
     *
     * @param string|null $indiceRepetition The indice répétition.
     * @return Etablissement Returns this établissement.
     */
    public function setIndiceRepetition(?string $indiceRepetition): Etablissement {
        $this->indiceRepetition = $indiceRepetition;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float|null $latitude The latitude.
     * @return Etablissement Returns this établissement.
     */
    public function setLatitude(?float $latitude): Etablissement {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the libellé code NAF.
     *
     * @param string|null $libelleCodeNaf The libellé code NAF.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCodeNaf(?string $libelleCodeNaf): Etablissement {
        $this->libelleCodeNaf = $libelleCodeNaf;
        return $this;
    }

    /**
     * Set the libellé voie.
     *
     * @param string|null $libelleVoie The libellé voie.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleVoie(?string $libelleVoie): Etablissement {
        $this->libelleVoie = $libelleVoie;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float|null $longitude The longitude.
     * @return Etablissement Returns this établissement.
     */
    public function setLongitude(?float $longitude): Etablissement {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the numéro voie.
     *
     * @param int|null $numeroVoie The numéro voie.
     * @return Etablissement Returns this établissement.
     */
    public function setNumeroVoie(?int $numeroVoie): Etablissement {
        $this->numeroVoie = $numeroVoie;
        return $this;
    }

    /**
     * Set the siège.
     *
     * @param bool|null $siege The siège.
     * @return Etablissement Returns this établissement.
     */
    public function setSiege(?bool $siege): Etablissement {
        $this->siege = $siege;
        return $this;
    }

    /**
     * Set the type voie.
     *
     * @param string|null $typeVoie The type voie.
     * @return Etablissement Returns this établissement.
     */
    public function setTypeVoie(?string $typeVoie): Etablissement {
        $this->typeVoie = $typeVoie;
        return $this;
    }
}