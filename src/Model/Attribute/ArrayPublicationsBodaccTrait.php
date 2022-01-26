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

use WBW\Library\Pappers\Model\PublicationBodacc;

/**
 * Array publications BODACC trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait ArrayPublicationsBodaccTrait {

    /**
     * Publications BODACC.
     *
     * @var PublicationBodacc[]
     */
    private $publicationsBodacc;

    /**
     * Add a publication BODACC.
     *
     * @param PublicationBodacc $publicationBodacc The publication BODACC.
     * @return self Returns this instance.
     */
    public function addPublicationBodacc(PublicationBodacc $publicationBodacc): self {
        $this->publicationsBodacc[] = $publicationBodacc;
        return $this;
    }

    /**
     * Get the publications BODACC.
     *
     * @return PublicationBodacc[] Returns the publications BODACC.
     */
    public function getPublicationsBodacc(): array {
        return $this->publicationsBodacc;
    }

    /**
     * Set the publications BODACC.
     *
     * @param PublicationBodacc[] $publicationsBodacc The publications BODACC.
     * @return self Returns this instance.
     */
    protected function setPublicationsBodacc(array $publicationsBodacc): self {
        $this->publicationsBodacc = $publicationsBodacc;
        return $this;
    }
}
