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

use WBW\Library\Pappers\Model\Attribute\EntrepriseEntrepriseTrait;

/**
 * Entreprise response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Response
 */
class EntrepriseResponse extends AbstractResponse {

    use EntrepriseEntrepriseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}
