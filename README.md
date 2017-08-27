# laradeck-flash-messages

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Механизм показа информационных сообщений для пользователя посредством [Laravel FlashData][laravel-flash-data]

## Install

Via Composer

``` bash
$ composer require ngtfkx/laradeck-flash-messages
```

## Usage

``` php
flash_success('First success message!');
flash_success('Second success message!');
flash_error('First error message!');
```

## Documentation

В контролрах сообщения можно добавлять посредством хелперов

- `flash_success` - успешное действие
- `flash_error` - ошибка 
- `flash_warning` - предупреждение
- `flash-info` - информационное

Можно добавдять несколько однотипных сообщений. Каждое будет выведено на экран.

Для вывода сообщений в blade-шаблон, в то место где они должны выводиться, добавьте строку

``` php
@include('laradeck-flash-messages::panel')
```

Если надо изменить шаблоны пакета, то опубликуйте их и отредактируйте. 

``` bash
php artisan vendor:publish --provider="Ngtfkx\Laradeck\FlashMessages\LaradeckFlashMessagesServiceProvider"
```

После публикации шаблоны будут в папке `resources/views/vendor/laradeck-flash-messages`.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Denis Sandal][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[laravel-flash-data]: https://laravel.com/docs/5.4/session#flash-data
[ico-version]: https://img.shields.io/packagist/v/ngtfkx/laradeck-flash-messages.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ngtfkx/laradeck-flash-messages/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ngtfkx/laradeck-flash-messages.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ngtfkx/laradeck-flash-messages.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ngtfkx/laradeck-flash-messages.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ngtfkx/laradeck-flash-messages
[link-travis]: https://travis-ci.org/ngtfkx/laradeck-flash-messages
[link-scrutinizer]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-flash-messages/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ngtfkx/laradeck-flash-messages
[link-downloads]: https://packagist.org/packages/ngtfkx/laradeck-flash-messages
[link-author]: https://github.com/ngtfk
[link-contributors]: ../../contributors
