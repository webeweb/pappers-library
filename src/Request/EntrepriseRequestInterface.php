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
 * Entreprise request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pappers\Request
 */
interface EntrepriseRequestInterface {

    /**
     * Format publications BODACC "objet".
     *
     * @var string
     */
    const FORMAT_PUBLICATIONS_BODACC_OBJET = "objet";

    /**
     * Format publications BODACC "texte".
     *
     * @var string
     */
    const FORMAT_PUBLICATIONS_BODACC_TEXTE = "texte";
}
