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
 * Integer par page trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait IntegerParPageTrait {

    /**
     * Effectif max.
     *
     * @var int|null
     */
    private $parPage;

    /**
     * Get the effectif max.
     *
     * @return int|null Returns the effectif max.
     */
    public function getParPage(): ?int {
        return $this->parPage;
    }

    /**
     * Set the effectif max.
     *
     * @param int|null $parPage The effectif max.
     * @return self Returns this instance.
     */
    public function setParPage(?int $parPage): self {
        $this->parPage = $parPage;
        return $this;
    }
}