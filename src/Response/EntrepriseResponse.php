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

use WBW\Library\Pappers\Model\Entreprise;

/**
 * Entreprise response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 */
class EntrepriseResponse extends AbstractResponse {

    /**
     * Entreprise.
     *
     * @var Entreprise|null
     */
    private $entreprise;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the entreprise.
     *
     * @return Entreprise|null Returns the entreprise.
     */
    public function getEntreprise(): ?Entreprise {
        return $this->entreprise;
    }

    /**
     * Set the entreprise.
     *
     * @param Entreprise|null $entreprise The entreprise.
     * @return EntrepriseResponse Returns this entreprise response.
     */
    public function setEntreprise(?Entreprise $entreprise): EntrepriseResponse {
        $this->entreprise = $entreprise;
        return $this;
    }
}