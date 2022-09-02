# View Library

[![Maintainer](http://img.shields.io/badge/maintainer-@marcolamr-blue.svg?style=flat-square)](https://github.com/marcolamr)
[![Source Code](http://img.shields.io/badge/source-marcolamr/view-blue.svg?style=flat-square)](https://github.com/marcolamr/view)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/marcolamr/view.svg?style=flat-square)](https://packagist.org/packages/marcolamr/view)
[![Latest Version](https://img.shields.io/github/release/marcolamr/view.svg?style=flat-square)](https://github.com/marcolamr/view/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/marcolamr/view.svg?style=flat-square)](https://scrutinizer-ci.com/g/marcolamr/view)
[![Quality Score](https://img.shields.io/scrutinizer/g/marcolamr/view.svg?style=flat-square)](https://scrutinizer-ci.com/g/marcolamr/view)
[![Total Downloads](https://img.shields.io/packagist/dt/marcolamr/view.svg?style=flat-square)](https://packagist.org/packages/marcolamr/view)

###### Small, simple and uncomplicated. The view is a PHP view component with abstraction for MVC. 

Pequeno, simples e descomplicado. O view é um componente de views PHP com abstração para MVC.

### Highlights

- Simple installation (Instalação simples)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

View is available via Composer:

```bash
"marcolamr/view": "^1.0"
```

or run

```bash
composer require marcolamr/view
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### Getting Started:

```php
<?php

use MarcolaMr\View\View;

require __DIR__ . "/vendor/autoload.php";

$view = new View(__DIR__ . "/resources/views");

$view->init([
    "url" => "http://localhost"
]);

$content = $view->render("home", [
    "name" => "Test Name"
]);

echo $content;
```