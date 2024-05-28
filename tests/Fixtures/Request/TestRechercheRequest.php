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

namespace WBW\Library\Pappers\Tests\Fixtures\Request;

use RuntimeException;
use WBW\Library\Pappers\Request\AbstractRechercheRequest;
use WBW\Library\Pappers\Response\AbstractResponse;

/**
 * Test recherche request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Fixtures\Request
 */
class TestRechercheRequest extends AbstractRechercheRequest {

    /**
     * {@inheritDoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        throw new RuntimeException();
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return "";
    }

    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return [];
    }
}
