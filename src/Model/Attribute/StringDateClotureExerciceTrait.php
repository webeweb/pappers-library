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
 * String date clôture exercice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDateClotureExerciceTrait {

    /**
     * Date clôture exercice.
     *
     * @var string|null
     */
    private $dateClotureExercice;

    /**
     * Get the date clôture exercice.
     *
     * @return string|null Returns the date clôture exercice.
     */
    public function getDateClotureExercice(): ?string {
        return $this->dateClotureExercice;
    }

    /**
     * Set the date clôture exercice.
     *
     * @param string|null $dateClotureExercice The date clôture exercice.
     * @return self Returns this instance.
     */
    public function setDateClotureExercice(?string $dateClotureExercice): self {
        $this->dateClotureExercice = $dateClotureExercice;
        return $this;
    }
}