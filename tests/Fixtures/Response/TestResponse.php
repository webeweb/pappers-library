<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pappers\Tests\Fixtures\Response;

use WBW\Library\Pappers\Response\AbstractResponse;

/**
 * Test response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Fixtures\Response
 */
class TestResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}
