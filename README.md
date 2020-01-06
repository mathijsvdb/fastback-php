# PHP wrapper for the Fastback API

A simple library for communicating with the [Fastback](http://fastback.be/) API.

## Usage

Install using Composer

```
composer require mathijsvdb/fastback-php
```

Create an instance of **Fastback/Client**:

```php
$client = new Fastback\Client();
$client->setOrigin('YOUR_PROVIDED_URL');
```

It is possible to specify a supported language to receive translations.</br>
Supported languages are defined in **Fastback\Language**.

```php
$client->setLanguage('YOUR_LANGUAGE');
```

## Methods
| Method | Description |
| --- | --- |
| `$client->getVehicles()` | Returns all vehicles. |
| `$client->getBrands()` | Returns all brands. |
| `$client->getModels()` | Returns all models. |
| `$client->getDealers()` | Returns all dealers. |
| `$client->getFuelTypes()` | Returns all fuel types. |
| `$client->getColors()` | Returns all colors. |
| `$client->getUpholsteries()` | Returns all upholsteries. |
| `$client->getBodyTypes()` | Returns all body types. |
| `$client->getTransmissions()` | Returns all transmission types. |

