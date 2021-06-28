<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Request;

use WBW\Library\Traits\Strings\StringTokenTrait;

/**
 * Document téléchargement request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Request
 */
class DocumentTelechargementRequest extends AbstractRequest {

    use StringTokenTrait;

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/document/telechargement";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
    }
}