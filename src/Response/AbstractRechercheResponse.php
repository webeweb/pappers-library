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

use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerTotalTrait;

/**
 * Abstract recherche response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Response
 * @abstract
 */
abstract class AbstractRechercheResponse extends AbstractResponse {

    use IntegerPageTrait;
    use IntegerTotalTrait;

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }
}