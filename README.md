# Adobe Target PHP SDK

## Quick Start

```bash
$ brew install composer              # Install composer
$ composer install                   # Install dependencies
```

### Run tests
```bash
$ composer test
```

### Format code
```bash
$ composer format
```

### Code generation
The SDK depends on [Target Open API](https://github.com/adobe/target-openapi). It uses Open API and the `Open API generator` to generate the low level HTTP client.

To be able to use `Target Open API` for code generation, we are leveraging Git subtree.

To import `Target Open API` as `openapi` folder please use commands:
```bash
$ git subtree add --prefix openapi git@github.com:adobe/target-openapi.git main --squash
```

`Open API generator` is a Java application hence the code generation process requires a few tools besides `Composer`:
- Java 8+
- NPM 6+

NPM is required since we are relying on `openapi-generator-cli`.

Once all the tools are installed, there is no need to invoke them directly, everything is wrapped in a `Composer` script, which can be invoked by running:
```bash
$ composer codegen
```

# Gotchas
> On Mac you might have to disable IPv6 to make composer work.
> See https://www.maximumbuilders.my/news/trouble-shooting-on-composer-timeout
