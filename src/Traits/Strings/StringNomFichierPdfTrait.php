<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Traits\Strings;

/**
 * String nom fichier PDF trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Traits\Strings
 */
trait StringNomFichierPdfTrait {

    /**
     * Nom fichier PDF.
     *
     * @var string|null
     */
    protected $nomFichierPdf;

    /**
     * Get the nom fichier PDF.
     *
     * @return string|null Returns the nom fichier PDF.
     */
    public function getNomFichierPdf(): ?string {
        return $this->nomFichierPdf;
    }

    /**
     * Set the nom fichier PDF.
     *
     * @param string|null $nomFichierPdf The nom fichier PDF.
     * @return self Returns this instance.
     */
    public function setNomFichierPdf(?string $nomFichierPdf): self {
        $this->nomFichierPdf = $nomFichierPdf;
        return $this;
    }
}
