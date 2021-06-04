<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Response;

use WBW\Library\Core\Model\Attribute\IntegerPageTrait;

/**
 * Abstract recherche response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
abstract class AbstractRechercheResponse extends AbstractResponse {

    use IntegerPageTrait;

    /**
     * Total.
     *
     * @var int|null
     */
    private $total;

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Get the total.
     *
     * @return int|null Returns the total.
     */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Set the total.
     *
     * @param int|null $total The total.
     * @return AbstractRechercheResponse Returns this recherche response.
     */
    public function setTotal(?int $total): AbstractRechercheResponse {
        $this->total = $total;
        return $this;
    }
}