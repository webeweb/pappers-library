<?php

declare(strict_types = 1);

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Tests\Fixtures\Traits\Arrays;

use WBW\Library\Pappers\Traits\Arrays\ArrayPublicationsBodaccTrait;

/**
 * Test array publications BODACC trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Fixtures\Traits\Arrays
 */
class TestArrayPublicationsBodaccTrait {

    use ArrayPublicationsBodaccTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setPublicationsBodacc([]);
    }
}
