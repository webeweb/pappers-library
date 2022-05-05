<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Fixtures\Request;

use WBW\Library\Pappers\Request\AbstractRechercheRequest;

/**
 * Test recherche request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Fixtures\Request
 */
class TestRechercheRequest extends AbstractRechercheRequest {

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return "";
    }
}
