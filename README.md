# CodagAlchemyApiBundle

This bundle provides an [AlchemyAPI](http://www.alchemyapi.com/) integration for your Symfony2 Project.

[![Build Status](https://travis-ci.org/Codag/AlchemyApiBundle.png?branch=master)](https://travis-ci.org/Codag/AlchemyApiBundle)
[![Total Downloads](https://poser.pugx.org/codag/alchemyapi-bundle/downloads.png)](https://packagist.org/packages/codag/alchemyapi-bundle)
[![Latest Stable Version](https://poser.pugx.org/codag/alchemyapi-bundle/v/stable.png)](https://packagist.org/packages/codag/alchemyapi-bundle)

**AlchemyAPI Method Supported**
- [ ] Author Extraction 
- [ ] Concept Tagging
- [ ] Content Scraping
- [ ] Entity Extraction
  - [x] WebAPI
- [ ] Keyword Extraction
- [ ] Language Detection
- [ ] Microformats Parsing
- [ ] RSS/ATOM
- [ ] Relation Extraction
- [ ] Sentiment Analysis
- [ ] Text Categorization
- [ ] Text Extraction

Do you need support for a method not on the list or not completed yet? Please submit an [issue](https://github.com/Codag/AlchemyApiBundle/issues) or feel free to contribute!

## Installation

1. Add CodagAlchemyApiBundle to your composer.json
2. Enable the bundle
3. Configure the bundle

### Step 1: Add CodagAlchemyApiBundle to your composer.json
```js
{
    "require": {
        "codag/alchemyapi-bundle": "dev-master"
    }
}
```

Update your project dependencies: 
```bash
php composer.phar update codag/alchemyapi-bundle
```

### Step 2: Enable the bundle
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Codag\AlchemyApiBundle\CodagAlchemyApiBundle(),
    );
}
```

### Step 3: Configure the bundle

Yml configuration:
```yaml
# app/config/config.yml

codag_alchemy_api:
    api_key: 831370096236c6db90393a1d206010ffffffffff
```

## Usage
This bundle provides the service `codag.alchemyapi`
```php
<?php
$alchemy = $this->get('codag.alchemyapi');
```
### Entity Extraction

#### HTML API

#### Text API

#### Web API

##Contribute

If the bundle doesn't allow you to customize an option, I invite you to fork the project, create a feature branch, and send a pull request.

To ensure a consistent code base, you should make sure the code follows
the [Coding Standards](http://symfony.com/doc/2.1/contributing/code/standards.html).


##License

This bundle is under the MIT license. See the complete license [here](https://github.com/Codag/AlchemyApiBundle/blob/master/Resources/meta/LICENSE).

