# bmp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/urbanplum/bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/bmp)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/urbanplum/bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/bmp)

BMP image support for PHP. Found on the net and packaged here for easy consumption.
## Install

Via Composer

``` bash
$ composer require urbanplum/bmp
```

## Usage

``` php
$bmp = new Urbanplum\Bmp\Bmp();
$resource = $bmp->create('/path/to/file.bmp');
```

## Credits

- [mgutt](http://www.programmierer-forum.de/function-imagecreatefrombmp-welche-variante-laeuft-t143137.htm)
- Fabien Menager
- [John Smith](https://github.com/john-n-smith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
