# php-iso/iso-639
![Packagist Version](https://img.shields.io/packagist/v/php-iso/iso-639/?style=flat-square)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/php-iso/iso-639/?style=flat-square)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/php-iso/iso-639/run-tests?style=flat-square)

- [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes): two-letter codes
## Install

```sh
composer require php-iso/iso-639
```

## Usage
```php
use \PhpIso\ISO639\ISO639_1;

ISO639_1::isExists('fa') //true
ISO639_1::isExists('foo') //false

ISO639_1::getISOName('fa') //Persian
ISO639_1::getNativeName('fa') //فارسی

ISO639_1::get639_2T('fa') //fas
ISO639_1::get639_2B('fa') //per
ISO639_1::get639_3('fa') //fas
```
