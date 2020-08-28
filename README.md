<h1 align="center">ramsey/coding-standard</h1>

<p align="center">
    <strong>A common coding standard for Ramsey's PHP libraries.</strong>
</p>

<p align="center">
    <a href="https://github.com/ramsey/coding-standard"><img src="http://img.shields.io/badge/source-ramsey/coding--standard-blue.svg?style=flat-square" alt="Source Code"></a>
    <a href="https://packagist.org/packages/ramsey/coding-standard"><img src="https://img.shields.io/packagist/v/ramsey/coding-standard.svg?style=flat-square&label=release" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://img.shields.io/packagist/php-v/ramsey/coding-standard.svg?style=flat-square&colorB=%238892BF" alt="PHP Programming Language"></a>
    <a href="https://github.com/ramsey/coding-standard/blob/master/LICENSE"><img src="https://img.shields.io/packagist/l/ramsey/coding-standard.svg?style=flat-square&colorB=darkcyan" alt="Read License"></a>
    <a href="https://github.com/ramsey/coding-standard/actions?query=workflow%3Amain"><img src="https://img.shields.io/github/workflow/status/ramsey/coding-standard/main?logo=github&style=flat-square" alt="Build Status"></a>
    <a href="https://packagist.org/packages/ramsey/coding-standard/stats"><img src="https://img.shields.io/packagist/dt/ramsey/coding-standard.svg?style=flat-square&colorB=darkmagenta" alt="Package downloads on Packagist"></a>
    <a href="https://phpc.chat/channel/ramsey"><img src="https://img.shields.io/badge/phpc.chat-%23ramsey-darkslateblue?style=flat-square" alt="Chat with the maintainers"></a>
</p>

## About

This is a custom coding standard for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
It borrows many sniffs from [Slevomat Coding Standard](https://github.com/slevomat/coding-standard)
and [PHPCSExtra](https://github.com/PHPCSStandards/PHPCSExtra) and combines them
into a single unified, common standard for Ramsey's PHP libraries.

This project adheres to a [code of conduct](CODE_OF_CONDUCT.md).
By participating in this project and its community, you are expected to
uphold this code.

## Installation

Install this package as a dependency using [Composer](https://getcomposer.org).

``` bash
composer require --dev ramsey/coding-standard
```

## Usage

To use this coding standard, add `<rule ref="Ramsey"/>` to your `phpcs.xml`
configuration.

Here are the contents of an example `phpcs.xml.dist` file that you may place in
the root of your repository:

``` xml
<?xml version="1.0"?>
<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd">

    <arg name="extensions" value="php"/>
    <arg name="colors"/>
    <arg value="sp"/>

    <file>./src</file>
    <file>./tests</file>

    <rule ref="Ramsey"/>

</ruleset>
```

Then, run PHP_CodeSniffer:

```bash
./vendor/bin/phpcs
```

## Contributing

Contributions are welcome! Before contributing to this project, familiarize
yourself with [CONTRIBUTING.md](CONTRIBUTING.md).

To develop this project, you will need [PHP](https://www.php.net) 7.4 or greater
and [Composer](https://getcomposer.org).

After cloning this repository locally, execute the following commands:

``` bash
cd /path/to/repository
composer install
```

Now, you are ready to develop!

### Tooling

This project uses [CaptainHook](https://github.com/CaptainHookPhp/captainhook)
to validate all staged changes prior to commit.

### Project Structure

This project uses [pds/skeleton](https://github.com/php-pds/skeleton) as its
base folder structure and layout.

## Copyright and License

The ramsey/coding-standard library is copyright © [Ben Ramsey](https://benramsey.com)
and licensed for use under the terms of the
MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
