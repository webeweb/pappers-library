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

// Create the provider.
$provider = new APIv2Provider("YOUR_API_TOKEN");

// Create the request.
$request = new DocumentTelechargementRequest();
$request->setToken("SzQ0MzA2MTg0MQ");

// Call the API and get the response.
$response = $provider->documentTelechargement($request);

// Set a filename.
$filename = __DIR__ . "/../" . $request->getToken() . ".pdf";

// Handle the response.
$response->saveAs($filename);
