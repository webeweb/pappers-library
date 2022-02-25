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
 * String décision trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Model\Attribute
 */
trait StringDecisionTrait {

    /**
     * Décision.
     *
     * @var string|null
     */
    private $decision;

    /**
     * Get the décision.
     *
     * @return string|null Returns the décision.
     */
    public function getDecision(): ?string {
        return $this->decision;
    }

    /**
     * Set the décision.
     *
     * @param string|null $decision The décision.
     * @return self Returns this instance.
     */
    public function setDecision(?string $decision): self {
        $this->decision = $decision;
        return $this;
    }
}
