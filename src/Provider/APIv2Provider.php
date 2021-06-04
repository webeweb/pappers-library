<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Provider;

/**
 * API v2 provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Provider
 */
class APIv2Provider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getEndpointVersion(): string {
        return "/v2";
    }
}