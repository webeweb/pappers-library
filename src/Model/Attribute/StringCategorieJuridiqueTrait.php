<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model\Attribute;

/**
 * String catégorie juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringCategorieJuridiqueTrait {

    /**
     * Catégorie juridique.
     *
     * @var string|null
     */
    private $categorieJuridique;

    /**
     * Get the catégorie juridique.
     *
     * @return string|null Returns the catégorie juridique.
     */
    public function getCategorieJuridique(): ?string {
        return $this->categorieJuridique;
    }

    /**
     * Set the catégorie juridique.
     *
     * @param string|null $categorieJuridique The catégorie juridique.
     * @return self Returns this instance.
     */
    public function setCategorieJuridique(?string $categorieJuridique): self {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }
}