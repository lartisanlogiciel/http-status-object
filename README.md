# Http Status Object

Une façon simple d'utiliser les codes de statut http sous forme d'objet

## Installation

```shell
composer require lartisanlogiciel/http-status-object
```

## Utilisation

### Réponse de votre API

Retournez le code http correspondant à la situation.  
L'exemple ci-dessous est réalisé avec le framework Slim :
```php
<?php

use HttpStatusObject\Implementations\SuccessHttpStatus;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class ExampleController
{
    public function example(Request $request, Response $response): Response
    {
        # [...] Do some controller stuff

        # Create the status object
        $acceptedHttpStatus = SuccessHttpStatus::Accepted();

        # Optional: Add http status definition in the response body as a json object
        $response->getBody()->write(json_encode($acceptedHttpStatus));
        $response = $response->withHeader('Content-Type', 'application/json');

        # You can return the code associate to this status without knowing witch one is it
        return $response->withStatus($acceptedHttpStatus->code);

    }
}
```

### Réponse d'un appel à un autre service

Interprétez les statuts de réponse de manière standardisée.

```php
$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_URL, "http://my-awesome-api.virt");
curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'GET');
curl_exec($curl_handle);

$responseCode = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

curl_close($curl_handle);

# Get the object by status code
$httpCurlResponseCode = HttpStatusCollection::GetFirstByStatusCode($responseCode);

if($httpCurlResponseCode instanceof SuccessHttpStatus){
    # Do something on global success status
}

if($httpCurlResponseCode == ClientErrorsHttpStatus::NotFound()){
    # Do something if the status is not found
}
```

### Création de vos status http personalisé

Créez vos codes http personnalisés pour standardiser la communication entre les services.  
Exemple d'une implémentation : 

```php
<?php

use HttpStatusObject\AbstractHttpStatus;

class CustomHttpStatus extends AbstractHttpStatus
{
    public static function SomethingDone(): CustomHttpStatus
    {
        return new CustomHttpStatus('700', '7XX', __FUNCTION__, "Something has been done", false);
    }
}
```


## Sources

https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

## Questions/Retours
Envoyez un email à: contact@lartisanlogiciel.com
