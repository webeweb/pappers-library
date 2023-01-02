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

use RuntimeException;

/**
 * Document téléchargementResponse.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Response
 */
class DocumentTelechargementResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Save as.
     *
     * @param string $filename The filename.
     * @return int Returns the number of bytes written.
     * @throws RuntimeException Throws a runtime exception if an error occurs.
     */
    public function saveAs(string $filename): int {

        $result = file_put_contents($filename, $this->getRawResponse());
        if (false === $result) {
            throw new RuntimeException("An I/O error occurs");
        }

        return $result;
    }
}
