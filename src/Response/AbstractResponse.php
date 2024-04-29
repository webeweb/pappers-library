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

use WBW\Library\Common\Provider\AbstractResponse as BaseResponse;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Response
 * @abstract
 */
abstract class AbstractResponse extends BaseResponse {

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO
    }
}
