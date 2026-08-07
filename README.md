# mittwald API PHP client

This package contains a (mostly auto-generated) PHP client for the mittwald mStudio v2 API.

## License

Copyright (c) 2025 Mittwald CM Service GmbH & Co. KG and contributors

This project is licensed under the MIT License; see the [LICENSE](./LICENSE) file for details.

## Installation

You can install this package using composer:

```bash
$ composer require mittwald/api-client
```

## Usage

### Initialization

Import the client:

```php
use Mittwald\ApiClient\MittwaldAPIV2Client;
```

To create a client instance you can use one of the following factory methods for
different types of authentication:

1. `MittwaldAPIClient::newUnauthenticated()`
2. `MittwaldAPIClient::newWithToken(string $apiToken)` (recommended)
3. `MittwaldAPIClient::newWithCredentials(string $email, string $password)`, does actually perform a login in the background; does not work when using 2FA.
4. `MittwaldAPIClient::newWithAccessTokenRetrievalKey(string $userId, string $key)`, authenticates an mStudio user using the [access token retrieval key][atrek] mechanism. Only useful if you're building an mStudio extension.
5. `MittwaldAPIClient::newWithExtensionSecret(string $extensionInstanceId, string $extensionSecret)`, authenticates an mStudio extension itself (without any user interaction). Only useful if you're building an mStudio extension.

Have a look at our [API introduction][api-getting-started] for more information
on how to obtain an API token and how to get started with the API.

### Accessing mittwald AI endpoints

To access the mittwald AI endpoints, you need to install the `openai-php/client` package as a dependency in your project. You can do this using Composer:

```bash
composer require openai-php/client
```

When this package is installed, you can use the `Mittwald\ApiClient\AI\ClientFactory` class to create a preconfigured OpenAI client. You can instantiate the client either directly with a mittwald AI API token (CAUTION: this is a different token than your regular mStudio API token) or by passing an already authenticated mittwald API client.

```php
$factory = new \Mittwald\ApiClient\AI\ClientFactory($mstudioClient);

$client = $factory->build("sk-....");

// Alternative:
// Neither $customerId nor $keyId are sensitive information, so you can
// (for example) obtain them from the environment variables.
$client = $factory->buildClientForCustomer($customerId, $keyId);
```

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
[atrek]: https://developer.mittwald.de/docs/v2/contribution/overview/concepts/authentication/