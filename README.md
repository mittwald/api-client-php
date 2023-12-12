# mittwald API PHP client

This package contains a (mostly auto-generated) PHP client for the mittwald mStudio v2 API.

## License

Copyright (c) 2023 Mittwald CM Service GmbH & Co. KG and contributors

This project is licensed under the MIT License; see the [LICENSE](./LICENSE) file for details.

## Installation

You can install this package using composer:

```bash
$ composer require mittwald/api-client
```

## Usage

Import the client:

```php
use Mittwald\ApiClient\MittwaldAPIV2Client;
```

To create a client instance you can use one of the following factory methods for
different types of authentication:

1. `MittwaldAPIClient::newUnauthenticated()`
2. `MittwaldAPIClient::newWithToken(string $apiToken)` (recommended)
3. `MittwaldAPIClient::newWithCredentials(string $email, string $password)` (does
   actually perform a login in the background; does not work when using 2FA)

Have a look at our [API introduction][api-getting-started] for more information
on how to obtain an API token and how to get started with the API.

## Example

```php
use \Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsRequest;

$listProjectRequest = new ListProjectsRequest();
$listProjectResponse = $client->project()->listProjects($listProjectRequest);

foreach ($listProjectResponse->getBody() as $project) {
    echo $project->getShortId() . PHP_EOL;
}
```

## API documentation

The API documentation can be found in our [Developer Portal][api-ref]. You can find the operation ID on the right side of each operation.

[api-getting-started]: https://developer.mittwald.de/docs/v2/api/intro
[api-ref]: https://developer.mittwald.de/reference/v2/