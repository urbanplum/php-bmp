# bmp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/urbanplum/bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/bmp)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/urbanplum/bmp.svg?style=flat-square)](https://packagist.org/packages/urbanplum/bmp)

Adds BMP image support for PHP's GD functionality.
## Install

Via Composer

``` bash
$ composer require urbanplum/bmp
```

## Usage

``` php
require sprintf('%s/../vendor/autoload.php', __DIR__);

$bmp = new Urbanplum\Bmp\Bmp();

// creating a GD resource from a file
$resource = $bmp->createFromFile('/path/to/file.bmp');

// creating a GD resource from a string (e.g. from DB, S3, etc.)
$resource = $bmp->createFromString($bitmapString);

// output image to a browser
header('Content-Type: image/jpeg');
imagejpeg($resource);

// clean up
imagedestroy($resource);
```

## Credits

- [mgutt](http://www.programmierer-forum.de/function-imagecreatefrombmp-welche-variante-laeuft-t143137.htm)
- Fabien Menager
- [John Smith](https://github.com/john-n-smith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
