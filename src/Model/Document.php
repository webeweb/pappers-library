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

use WBW\Library\Core\Model\Attribute\StringTypeTrait;
use WBW\Library\Pappers\Model\Attribute\ArrayMentionsTrait;
use WBW\Library\Pappers\Model\Attribute\EntrepriseEntrepriseTrait;
use WBW\Library\Pappers\Model\Attribute\StringDateDepotTrait;

/**
 * Document.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
class Document {

    use ArrayMentionsTrait;
    use EntrepriseEntrepriseTrait;
    use StringDateDepotTrait;
    use StringTypeTrait;

    /**
     * Titres.
     *
     * @var string|null
     */
    private $titres;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the titres.
     *
     * @return string|null Returns the titres.
     */
    public function getTitres(): ?string {
        return $this->titres;
    }

    /**
     * Set the titres.
     *
     * @param string|null $titres The titres.
     * @return Document Returns this document.
     */
    public function setTitres(?string $titres): Document {
        $this->titres = $titres;
        return $this;
    }
}