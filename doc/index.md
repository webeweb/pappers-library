DOCUMENTATION
=============

Entreprise

```php
// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create an entreprise request.
$request = new EntrepriseRequest();
$request->setSiret("44306184100047");
// ...

// Call the API and get the response.
$response = $provider->entreprise($request);

// Handle the response.
// ...
```

Recherche

```php
// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche request.
$request = new RechercheRequest();
$request->setQ("Google France");
// ...

// Call the API and get the response.
$response = $provider->recherche($request);

// Handle the response.
// ...
```

Recherche dirigeants

```php
// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a recherche dirigeants request.
$request = new RechercheDirigeantsRequest();
$request->setQ("Google France");
// ...

// Call the API and get the response.
$response = $provider->rechercheDirigeants($request);

// Handle the response.
// ...
```

Recherche documents

```php
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

// Call the API and get the response.
$response = $provider->rechercheDocuments($request);

// Handle the response.
// ...
```

Recherche publications

```php
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

// Call the API and get the response.
$response = $provider->recherchePublications($request);

// Handle the response.
// ...
```

Suggestions

```php
// Create the API provider.
$provider = new Apiv2Provider();

// Create a suggestions request.
$request = new SuggestionsRequest();
$request->setQ("Google France");
// ...

// Call the API and get the response.
$response = $provider->suggestions($request);

// Handle the response.
// ...
```

Documents téléchargement

```php
// Create the API provider.
$provider = new Apiv2Provider("YOUR_API_KEY");

// Create a document téléchargement request.
$request = new DocumentTelechargementRequest();
$request->setToken("SzQ0MzA2MTg0MQ");
// ...

// Call the API and get the response.
$response = $provider->documentTelechargement($request);

// Handle the response.
// ...
```
