DOCUMENTATION
=============

> IMPORTANT NOTICE: The API provider can be used with a debug flag and/or a
> logger with the following code:

```php
use Psr\Log\LoggerInterface;
use WBW\Library\Pappers\Provider\APIv2Provider;

/** @var LoggerInterface $logger */
// $logger = ...

// Create the API provider.
$provider = new APIv2Provider("YOUR_API_KEY", $logger);
$provider->setDebug(true);
```

---

Entreprise

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\EntrepriseRequest;
use WBW\Library\Pappers\Response\EntrepriseResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create an entreprise request.
$request = new EntrepriseRequest();
$request->setSiret("44306184100047");
// ...

/** @var EntrepriseResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Recherche

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\RechercheRequest;
use WBW\Library\Pappers\Response\RechercheResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche request.
$request = new RechercheRequest();
$request->setQ("Google France");
// ...

/** @var RechercheResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Recherche dirigeants

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\RechercheDirigeantsRequest;
use WBW\Library\Pappers\Response\RechercheDirigeantsResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche dirigeants request.
$request = new RechercheDirigeantsRequest();
$request->setQ("Google France");
// ...

/** @var RechercheDirigeantsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Recherche documents

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\RechercheDocumentsRequest;
use WBW\Library\Pappers\Response\RechercheDocumentsResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche documents request.
$request = new RechercheDocumentsRequest();
$request->setCodeNaf("70.10Z");
$request->setDepartement("75");
$request->setRegion("11");
$request->setCodePostal("75009");
$request->setConventionCollective("1486");
$request->setCategorieJuridique("5498");
$request->setEntrepriseCessee(false);
$request->setStatutRcs("inscrit");
// ...

/** @var RechercheDocumentsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Recherche publications

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\RecherchePublicationsRequest;
use WBW\Library\Pappers\Response\RecherchePublicationsResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche publications request.
$request = new RecherchePublicationsRequest();
$request->setCodeNaf("70.10Z");
$request->setDepartement("75");
$request->setRegion("11");
$request->setCodePostal("75009");
$request->setConventionCollective("1486");
$request->setCategorieJuridique("5498");
$request->setEntrepriseCessee(false);
$request->setStatutRcs("inscrit");
// ...

/** @var RecherchePublicationsResponse response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Suggestions

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\SuggestionsRequest;
use WBW\Library\Pappers\Response\SuggestionsResponse;

// Create the API provider.
$provider = new Apiv2Provider();

// Create a suggestions request.
$request = new SuggestionsRequest();
$request->setQ("Google France");
// ...

/** @var SuggestionsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Documents téléchargement

```php
use WBW\Library\Pappers\Provider\APIv2Provider;
use WBW\Library\Pappers\Request\DocumentTelechargementRequest;
use WBW\Library\Pappers\Response\DocumentTelechargementResponse;

// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a document téléchargement request.
$request = new DocumentTelechargementRequest();
$request->setToken("SzQ0MzA2MTg0MQ");
// ...

/** @var DocumentTelechargementResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```
