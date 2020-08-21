#!/bin/bash
#
# Lint ruleset XML file.
#
# BASH-VERSION  :4.2+
# DEPENDS       :apt-get install libxml2-utils

RULESET="src/Ramsey/ruleset.xml"
XML_SCHEMA="resources/XMLSchema.xsd"
PHPCS_SCHEMA="vendor/squizlabs/php_codesniffer/phpcs.xsd"

set -e

# Current directory should be repository root
test -r "$RULESET"

# Dependencies should be installed with 'composer install'
test -r "$PHPCS_SCHEMA"

# Check dependency
hash xmllint

xmllint --noout --schema "$XML_SCHEMA" "$PHPCS_SCHEMA"
xmllint --noout --schema "$PHPCS_SCHEMA" "$RULESET"
diff -B "$RULESET" <(XMLLINT_INDENT="    " xmllint --format "$RULESET")
