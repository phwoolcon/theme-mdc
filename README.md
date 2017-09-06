# Phwoolcon Theme: MDL

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

The Material Design Lite Theme for Phwoolcon

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Install as a `phwoolcon` package

```bash
git clone git@github.com:phwoolcon/bootstrap.git theme-mdl
cd theme-mdl
bin/import-package git@github.com:phwoolcon/theme-mdl.git
```


## Usage

``` php
$skeleton = new Phwoolcon\ThemeMdl();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email fishdrowned@gmail.com instead of using the issue tracker.

## Credits
- [Material Design Lite Team](https://github.com/google/material-design-lite)
- [Christopher CHEN][link-author]
- [All Contributors][link-contributors]

## License

The Apache License, Version 2.0. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/phwoolcon/theme-mdl.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-Apache%202.0-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phwoolcon/theme-mdl/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/phwoolcon/theme-mdl.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/phwoolcon/theme-mdl.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phwoolcon/theme-mdl.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/phwoolcon/theme-mdl
[link-travis]: https://travis-ci.org/phwoolcon/theme-mdl
[link-scrutinizer]: https://scrutinizer-ci.com/g/phwoolcon/theme-mdl/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/phwoolcon/theme-mdl
[link-downloads]: https://packagist.org/packages/phwoolcon/theme-mdl
[link-author]: https://github.com/Fishdrowned
[link-contributors]: ../../contributors
