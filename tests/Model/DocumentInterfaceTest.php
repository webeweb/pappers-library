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

namespace WBW\Library\Pappers\Tests\Model;

use WBW\Library\Pappers\Model\DocumentInterface;
use WBW\Library\Pappers\Tests\AbstractTestCase;

/**
 * Document interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Tests\Model
 */
class DocumentInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("acte", DocumentInterface::TYPE_ACTE);
        $this->assertEquals("comptes", DocumentInterface::TYPE_COMPTES);
    }
}
