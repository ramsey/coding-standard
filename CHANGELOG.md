# ramsey/coding-standard Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## 2.3.1 - 2025-05-23

* Use `Generic.WhiteSpace.LanguageConstructSpacing` instead of the deprecated
  `Squiz.WhiteSpace.LanguageConstructSpacing`.


## 2.3.0 - 2025-02-28

* Switch from `SlevomatCodingStandard.TypeHints.UnionTypeHintFormat` to
  `SlevomatCodingStandard.TypeHints.DNFTypeHintFormat`.
* Bump minimum required version of slevomat/coding-standard to `^8.16.0`.


## 2.2.0 - 2023-03-17

* Set minimum PHP version to 8.1.


## 2.1.0 - 2023-01-14

### Changed

* Bump phpcsstandards/phpcsextra and dealerdirect/phpcodesniffer-composer-installer
  to their stable 1.0 releases.


## 2.0.3 - 2021-08-05

### Fixed

* Allow comments to run longer than 120 characters.


## 2.0.2 - 2021-07-07

### Fixed

* Allow doc comments without variable names above return statements.


## 2.0.1 - 2021-06-30

### Fixed

* Ignore the `IncorrectWhitespaceBeforeDeclare` error emitted by the `SlevomatCodingStandard.TypeHints.DeclareStrictTypes` sniff.

  In my personal projects, I usually have 2 newlines before the `declare` statement. One before the file header comment and one after. However, in tests, I have no file header comment, so there is only 1 newline before the `declare` statement. Since I like my tests to follow the same coding standard as the rest of my source, it is easiest to ignore this error.


## 2.0.0 - 2021-06-30

### Added

* Check format of union type hints on PHP 8, using `SlevomatCodingStandard.TypeHints.UnionTypeHintFormat`.

### Changed

* Upgrade to slevomat/coding-standard version 7.

  This may require downstream changes, since some Slevomat sniffs have BC breaks. This is why ramsey/coding-standard is bumping to version 2.0.0 for this change.

  See the [Slevomat changelog for 7.0.0](https://github.com/slevomat/coding-standard/releases/tag/7.0.0) for details.


## 1.3.0 - 2020-11-14

### Added

* Enforce the use of strict comparisons.
* Check for and disallow duplicate spaces everywhere.


## 1.2.0 - 2020-09-05

### Added

* Revised rules for absolute class name references


## 1.1.2 - 2020-08-28

### Fixed

* Use correct command prefixes


## 1.1.1 - 2020-08-28

### Fixed

* Explicitly require [PHPCSUtils](https://github.com/PHPCSStandards/PHPCSUtils)
  to avoid setting minimum-stability


## 1.1.0 - 2020-08-27

### Changed

* Package name is now "ramsey/coding-standard"


## 1.0.3 - 2020-08-21

### Fixed

* Allow bin dir in dist packages, avoiding Composer warnings


## 1.0.2 - 2020-08-21

### Fixed

* Move ext-dom to require-dev


## 1.0.1 - 2020-08-21

### Fixed

* Remove unnecessary (and unused) tools, commands, and code


## 1.0.0 - 2020-08-20

### Added

* Initial release of Ramsey coding standard
