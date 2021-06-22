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
 * String date cessation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateCessationTrait {

    /**
     * Date cessation.
     *
     * @var string|null
     */
    private $dateCessation;

    /**
     * Get the date cessation.
     *
     * @return string|null Returns the date cessation.
     */
    public function getDateCessation(): ?string {
        return $this->dateCessation;
    }

    /**
     * Set the date cessation.
     *
     * @param string|null $dateCessation The date cessation.
     * @return self Returns this instance.
     */
    public function setDateCessation(?string $dateCessation): self {
        $this->dateCessation = $dateCessation;
        return $this;
    }
}