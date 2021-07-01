# ramsey/coding-standard Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).


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
