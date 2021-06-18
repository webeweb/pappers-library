<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pappers\Model;

/**
 * Document interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pappers\Model
 */
interface DocumentInterface {

    /**
     * Type "acte".
     *
     * @var string
     */
    const TYPE_ACTE = "acte";

    /**
     * Type "comptes".
     *
     * @var string
     */
    const TYPE_COMPTES = "comptes";
}