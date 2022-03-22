# iTraffic ZA PHP

  

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adecks/trafficza.svg?style=flat-square)](https://packagist.org/packages/adecks/trafficza)

[![Total Downloads](https://img.shields.io/packagist/dt/adecks/trafficza.svg?style=flat-square)](https://packagist.org/packages/adecks/trafficza)


[![Tests](https://github.com/AndreKendeck/trafficza/actions/workflows/main.yml/badge.svg?branch=main)](https://github.com/AndreKendeck/trafficza/actions/workflows/main.yml)


  

This package is creates convenient classes for iTraffic Models.
see more @ https://www.i-traffic.co.za



## Installation

  

You can install the package via composer:

  

```bash

composer require adecks/trafficza

```

  

## Usage

  

```php

// Interacting with the iTraffic API
use Adecks\TrafficZA\Traffic;

public function getTrafficEvents() {

	$traffic = new Traffic('YOUR_API_KEY');
	
	$events = $traffic->getEvents();

	foreach($events as $event) {
		$event->getReported();
	}
}

```
iTraffic Models
```php
Adecks\TrafficZA\Alert::class
Adecks\TrafficZA\Camera::class
Adecks\TrafficZA\Event::class
Adecks\TrafficZA\MessageSign::class
Adecks\TrafficZA\Roadway::class
```
  

### Testing

  

```bash

composer test

```

  

### Changelog

  

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

  

## Contributing

  

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

  

### Security

  

If you discover any security related issues, please email andrekendeck@icloud.com instead of using the issue tracker.

  

## Credits

  

- [Andre Kendeck](https://github.com/adecks)

  

## License

  

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
