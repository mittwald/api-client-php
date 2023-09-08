# mittwald PHP API client -- Contribution guide

## General considerations

- We enforce a uniform coding style across this project. Please make sure to run
  `composer run format` before committing your changes.
- Nearly all files in the `mittwald/api-client` package are generated from the
  OpenAPI spec. Please do not edit these files manually. Instead, edit the
  corresponding template files in the `packages/generator/resources/templates`
  directory.

## Building locally

Requirements for building the project locally:

- [PHP >=8.2](https://php.net/)
- [Composer](https://getcomposer.org/)

To run the type checker and formatter, run:

```bash
composer run check
composer run format
```