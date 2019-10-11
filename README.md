# Mage2 Module OrviSoft Redirect

    ``orvisoft/module-redirect``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
This module overrides 404 page with 301 permanent redirect to homepage in Magento which is sometime required by SEO team to remove URLs

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/OrviSoft`
 - Enable the module by running `php bin/magento module:enable OrviSoft_Redirect`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require orvisoft/module-redirect`
 - enable the module by running `php bin/magento module:enable OrviSoft_Redirect`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - status (web/options/status)

 - redirect_url (web/options/redirect_url)


## Specifications




## Attributes



