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

/**
 * Recherche documents request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
class RechercheDocumentsRequest extends AbstractRechercheRequest {

    /**
     * Resources path.
     *
     * @var string
     */
    const RESOURCES_PATH = "/recherche-documents";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCES_PATH;
    }
}
