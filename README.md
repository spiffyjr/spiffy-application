# Spiffy\Application

## Requirements
* PHP 5.4, 5.5, 5.6, or HHVM

## Installation
Spiffy\Application can be installed using composer.

`composer create-project spiffy/spiffy-application -s dev`

Additionally, you can clone the repository and manually composer install.

```sh
git clone https://github.com/spiffyjr/spiffy-application.git
cd spiffy-application
composer install
```

## Running the Application

You can run SpiffyApplication using the built-in PHP web server.

```sh
cd spiffy-application/public
php -S 127.0.0.1:80 index.php
```

It also comes with a Vagrant/puppet configuration.

```sh
cd spiffy-application
vagrant up
```

Afterwards, point your browser to http://localhost (php server) or http://localhost:8080 (vagrant).

## Benchmarking

To enable benchmarking (performance) mode there are a couple things that need to be done.

  1. Ensure `config/env.php` has `'debug' => 'false'`.
  2. Ensure `config/app.php` has `package_config_cache` set to a proper directory.
  
Afterwards, run the application once to warm the cache and you should be ready to go.