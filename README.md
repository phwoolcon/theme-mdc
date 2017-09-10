# Phwoolcon Theme: MDC

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

The Material Design Theme for Phwoolcon

## Install

Install as a `phwoolcon` package

```bash
git clone git@github.com:phwoolcon/bootstrap.git theme-mdc
cd theme-mdc
bin/import-package git@github.com:phwoolcon/theme-mdc.git
```

## Usage

Load css in html head:
```html
<?= View::assets('mdc-css'); ?>
```

Append js to body:
```html
<?= View::assets('mdc-js'); ?>
<script>mdc.autoInit();</script>
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email fishdrowned@gmail.com instead of using the issue tracker.

## Credits
- [Material Components-Web Team](https://github.com/material-components/material-components-web)
- [Christopher CHEN][link-author]
- [All Contributors][link-contributors]

## License

The Apache License, Version 2.0. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/phwoolcon/theme-mdc.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-Apache%202.0-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phwoolcon/theme-mdc/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/phwoolcon/theme-mdc.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/phwoolcon/theme-mdc.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phwoolcon/theme-mdc.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/phwoolcon/theme-mdc
[link-travis]: https://travis-ci.org/phwoolcon/theme-mdc
[link-scrutinizer]: https://scrutinizer-ci.com/g/phwoolcon/theme-mdc/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/phwoolcon/theme-mdc
[link-downloads]: https://packagist.org/packages/phwoolcon/theme-mdc
[link-author]: https://github.com/Fishdrowned
[link-contributors]: ../../contributors
