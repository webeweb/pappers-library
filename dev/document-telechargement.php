<?php

/*
 * This file is part of the pappers-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;
use WBW\Library\Pappers\Tests\AbstractTestCase;

// Create the provider.
$provider = new APIv2Provider(AbstractTestCase::getToken());

// Create the request.
$request = new DocumentTelechargementRequest();
$request->setToken("SzQ0MzA2MTg0MQ");

/** @var DocumentTelechargementResponse $response */
$response = $provider->sendRequest($request);

// Set a filename.
$filename = __DIR__ . "/../var/cache/" . $request->getToken() . ".pdf";

// Handle the response.
$response->saveAs($filename);
