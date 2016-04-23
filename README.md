# php-bmp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/urbanplum/php-bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/php-bmp)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/urbanplum/php-bmp/master.svg?style=flat-square)](https://travis-ci.org/urbanplum/php-bmp)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/urbanplum/php-bmp.svg?style=flat-square)](https://scrutinizer-ci.com/g/urbanplum/php-bmp/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/urbanplum/php-bmp.svg?style=flat-square)](https://scrutinizer-ci.com/g/urbanplum/php-bmp)
[![Total Downloads](https://img.shields.io/packagist/dt/urbanplum/php-bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/php-bmp)

BMP image support for PHP. Found on the net and packaged here for easy consumption.
## Install

Via Composer

``` bash
$ composer require urbanplum/php-bmp
```

## Usage

``` php
$phpBmp = new Urbanplum\PhpBmp\PhpBmp();
$image = $phpBmp->create('/path/to/file.bmp');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ make test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [mgutt](http://www.programmierer-forum.de/function-imagecreatefrombmp-welche-variante-laeuft-t143137.htm)
- Fabien Menager
- [John Smith](https://github.com/john-n-smith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
