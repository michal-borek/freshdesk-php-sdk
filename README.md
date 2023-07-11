# Freshdesk PHP SDK API v2 

This is a PHP 7.2+ SDK for the [Freshdesk](https://www.freshdesk.com) API v2.

If you have questions, please contact me or open an issue on GitHub.

## Quick Start
```php
require __DIR__ . '/vendor/autoload.php';
use \Freshdesk\Api;

$api = new Api("your_freshdesk_api_key", "your_freshdesk_domain");

$all = $api->tickets->all();
$some = $api->tickets->all(['page' => 2]);
$new = $api->tickets->create($data);
$updated = $api->tickets->update($data);
$api->tickets->delete($id);
$existing = $api->tickets->view($id);

//Responses are simple arrays, e.g.:
$id = $existing['id'];
$first = $all[0];

```


## Installation

To integrate this library into your application, use [Composer](https://getcomposer.org).

Then just run:

```shell
composer require arjanderuyter/freshdesk-php-sdk
```

## API Overview

Full documentation is available [here](docs/ApiIndex.md)

### Getting started

Creating a new API instance is very easy. All you need is your Freshdesk 
API key and your Freshdesk domain.

```php
require __DIR__ . '/vendor/autoload.php';
use \Freshdesk\Api;

$api = new Api("your_freshdesk_api_key", "your_freshdesk_domain");
```

### Resources

The available methods for each resource are available via a public
property on the api, for example:

```php
//Contacts
$contacts = $api->contacts->update($contactId, $data);

//Agents
$me = $api->agents->current();

//Companies
$company = $api->companies->create($data);

//Groups
$deleted = $api->groups->delete($groupId);

//Tickets
$ticket = $api->tickets->view($filters);

//Time Entries
$time = $api->timeEntries->all($ticket['id']);

//Conversations
$ticket = $api->conversations->note($ticketId, $data);

//Categories
$newCategory = $api->categories->create($data);

//Forums
$forum = $api->forums->create($categoryId, $data);

//Topics
$topics = $api->topics->monitor($topicId, $userId);

//Comments
$comment = $api->comments->create($forumId);

//Email Configs
$configs = $api->emailConfigs->all();

//Products
$product = $api->products->view($productId);

//Business Hours
$hours = $api->businessHours->all();

//SLA Policy
$policies = $api->slaPolicies->all();

//Solutions
$categories = $api->solutioncategories->all();
$categories = $api->solutioncategories->create($data);
$categories = $api->solutioncategories->update($id, $data);
$categories = $api->solutioncategories->view($id);

$folders = $api->solutionfolders->all();
$folders = $api->solutionfolders->create($data);
$folders = $api->solutionfolders->update($id, $data);
$folders = $api->solutionfolders->view($id);

$articles = $api->solutionarticles->all();
$articles = $api->solutionarticles->create($data);
$articles = $api->solutionarticles->update($id, $data);
$articles = $api->solutionarticles->view($id);


```

### Responses

All responses are arrays of data. Please refer to Freshdesk's documentation
for further information. 

### Filtering

All `GET` requests accept an optional `array $query` parameter to filter
results. For example:

```php
//Page 2 with 50 results per page
$page2 = $this->forums->all(['page' => 2, 'per_page' => 50]);

//Tickets for a specific customer
$tickets = $this->tickets->view(['company_id' => $companyId]);

```

Please read the Freshdesk documentation for further information on
filtering `GET` requests.

## Contributing

Nearly all api calls are available except for the `Surveys`, 
which Freshdesk has not yet implemented...

## Author

The library was written [Matthew Clarkson](http://mpclarkson.github.io/)
from [Hilenium](https://hilenium.com) then forked and adopted for Laravel 8.x
by [Michał Borek](http://github.com/michal-borek) for [Wocozon](https://wocozon.nl).
Solutions was done by [Arjan de Ruyter](https://github.com/ArjandeRuyter) because he needed it for (https://www.buroscanbrit.nl)

## Reference

* [Freshdesk API Documentation](https://developer.freshdesk.com/api/)
