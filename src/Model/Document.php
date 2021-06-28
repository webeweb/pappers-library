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

use WBW\Library\Pappers\Model\Attribute\ArrayMentionsTrait;
use WBW\Library\Pappers\Model\Attribute\EntrepriseEntrepriseTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotTrait;
use WBW\Library\Pappers\Model\Attribute\StringSirenTrait;
use WBW\Library\Traits\Strings\StringTokenTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;

/**
 * Document.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Document implements DocumentInterface {

    use ArrayMentionsTrait;
    use EntrepriseEntrepriseTrait;
    use StringDateDepotTrait;
    use StringSirenTrait;
    use StringTokenTrait;
    use StringTypeTrait;

    /**
     * Id fichier.
     *
     * @var int|null
     */
    private $idFichier;

    /**
     * Num. chrono.
     *
     * @var string|null
     */
    private $numChrono;

    /**
     * Titres.
     *
     * @var Titre[]
     */
    private $titres;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setTitres([]);
    }

    /**
     * Add a titre.
     *
     * @param Titre $titre The titre.
     * @return Document Returns this document.
     */
    public function addTitre(Titre $titre): Document {
        $this->titres[] = $titre;
        return $this;
    }

    /**
     * Get the id fichier.
     *
     * @return int|null Returns the id fichier.
     */
    public function getIdFichier(): ?int {
        return $this->idFichier;
    }

    /**
     * Get the num. chrono.
     *
     * @return string|null Returns the num. chrono
     */
    public function getNumChrono(): ?string {
        return $this->numChrono;
    }

    /**
     * Get the titres.
     *
     * @return Titre[] Returns the titres.
     */
    public function getTitres(): array {
        return $this->titres;
    }

    /**
     * Set the id fichier.
     *
     * @param int|null $idFichier The id fichier.
     * @return Document Returns this document.
     */
    public function setIdFichier(?int $idFichier): Document {
        $this->idFichier = $idFichier;
        return $this;
    }

    /**
     * Set the num. chrono.
     *
     * @param string|null $numChrono The num. chrono.
     * @return Document Returns this document.
     */
    public function setNumChrono(?string $numChrono): Document {
        $this->numChrono = $numChrono;
        return $this;
    }

    /**
     * Set the titres.
     *
     * @param Titre[] $titres The titres.
     * @return Document Returns this document.
     */
    protected function setTitres(array $titres): Document {
        $this->titres = $titres;
        return $this;
    }
}