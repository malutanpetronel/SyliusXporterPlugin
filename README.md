# Sylius Aquis Exporter

---
## INSTALATION
To correctly install the plugin please follow the next steps

---
#### Install the plugin
dev phase
<pre>
,
    "repositories": [
        {
            "type": "path",
            "url": "../SyliusXporterPlugin"
        }
    ]
</pre>
then
<pre>
composer require aquis/sylius-xporter-plugin:*@dev
</pre>

---
#### Fix Sylius related errors
<p>
You may get in 1.8 a strange error Attempted to load class "SecurityCheckerCommand" from 
namespace in bin/console can be fixed with probably from outside docker as inside will 
throw allowed memory:
</p>
<pre>composer require sensiolabs/security-checker</pre>

then fix missing directory
<pre>mkdir /srv/sylius/public/media/image</pre>

---
#### Enable the plugin in the bundles.php by adding at the end
<pre>
...
Aquis\ProductDesignConfigurator\SyliusXporterPlugin::class => ['all' => true],
</pre>
    
## Enable plugin routes
Add the following routes into your project routes.yml
<pre>
sylius-aquis-xporter-plugin.admin:
    # loads routes from the SyliusProductDesignConfigurator Plugin - Admin
    resource: '@SyliusXporterPlugin/Resources/config/admin_routing.yml'

sylius-aquis-xporter-plugin.shop:
    # loads routes from the SyliusProductDesignConfigurator Plugin - Shop
    resource: '@SyliusXporterPlugin/Resources/config/shop_routing.yml'
</pre>

## Import configurations in _sylius.yml of your project
<pre>
- { resource: "@SyliusXporterPlugin/Resources/config/packages/_sylius.yml" }
- { resource: "@SyliusXporterPlugin/Resources/config/packages/oneup_flysystem.yml" }
- { resource: "@SyliusXporterPlugin/Resources/config/packages/monolog.yml" }
</pre>

---
## Add required traits in the project entities 
<pre>
+++ b/src/Entity/Channel/Channel.php
+use Aquis\XporterPlugin\Model\Channel\ChannelTrait;
+    use ChannelTrait;

+++ b/src/Entity/Customer/Customer.php
+use Aquis\XporterPlugin\Model\Customer\CustomerTrait;
+    use CustomerTrait;

+++ b/src/Entity/Order/Adjustment.php
+use Aquis\XporterPlugin\Model\Order\AdjustmentTrait;
+    use AdjustmentTrait;

+++ b/src/Entity/Order/OrderItem.php
+use Aquis\XporterPlugin\Model\Order\OrderItemTrait;
+    use OrderItemTrait;

+++ b/src/Entity/Payment/PaymentMethod.php
+use Aquis\XporterPlugin\Model\Payment\PaymentMethodTrait;
+    use PaymentMethodTrait;

+++ b/src/Entity/Product/Product.php
+use Aquis\XporterPlugin\Model\Product\ProductTrait as ProductTrait_EX;
+    use ProductTrait_EX;
 
+++ b/src/Entity/Product/ProductAttributeValue.php
+use Aquis\XporterPlugin\Model\Product\ProductAttributeValueTrait;
+    use ProductAttributeValueTrait;

+++ b/src/Entity/Product/ProductVariant.php
+use Aquis\XporterPlugin\Model\Product\ProductVariantTrait as ProductVariantTrait_EX;
+    use ProductVariantTrait_EX;
 
+++ b/src/Entity/Promotion/Promotion.php
+use Aquis\XporterPlugin\Model\Promotion\PromotionTrait;
+    use PromotionTrait;

+++ b/src/Entity/Shipping/ShippingMethod.php
+use Aquis\XporterPlugin\Model\Shipping\ShippingMethodTrait;
+    use ShippingMethodTrait;

+++ b/src/Entity/Taxation/TaxRate.php
+use Aquis\XporterPlugin\Model\Taxation\TaxRateTrait;
+    use TaxRateTrait;

+++ b/src/Entity/Taxonomy/Taxon.php
+use Aquis\XporterPlugin\Model\Taxonomy\TaxonTrait;
+    use TaxonTrait;

+++ b/src/Entity/User/ShopUser.php
+use Aquis\XporterPlugin\Model\User\ShopUserTrait;
+    use ShopUserTrait;

+++ b/src/Entity/Channel/Channel.php
+use Aquis\XporterPlugin\Model\Channel\ChannelTrait;
+    use ChannelTrait;

+++ b/src/Entity/Customer/Customer.php
+use Aquis\XporterPlugin\Model\Customer\CustomerTrait;
+    use CustomerTrait;

+++ b/src/Entity/Order/Adjustment.php
+use Aquis\XporterPlugin\Model\Order\AdjustmentTrait;
+    use AdjustmentTrait;

+++ b/src/Entity/Order/OrderItem.php
+use Aquis\XporterPlugin\Model\Order\OrderItemTrait;
+    use OrderItemTrait;

+++ b/src/Entity/Payment/PaymentMethod.php
+use Aquis\XporterPlugin\Model\Payment\PaymentMethodTrait;
+    use PaymentMethodTrait;

+++ b/src/Entity/Product/Product.php
+use Aquis\XporterPlugin\Model\Product\ProductTrait as ProductTrait_EX;
+    use ProductTrait_EX;
 
+++ b/src/Entity/Product/ProductAttributeValue.php
+use Aquis\XporterPlugin\Model\Product\ProductAttributeValueTrait;
+    use ProductAttributeValueTrait;

+++ b/src/Entity/Product/ProductVariant.php
+use Aquis\XporterPlugin\Model\Product\ProductVariantTrait as ProductVariantTrait_EX;
+    use ProductVariantTrait_EX;
 
+++ b/src/Entity/Promotion/Promotion.php
+use Aquis\XporterPlugin\Model\Promotion\PromotionTrait;
+    use PromotionTrait;

+++ b/src/Entity/Shipping/ShippingMethod.php
+use Aquis\XporterPlugin\Model\Shipping\ShippingMethodTrait;
+    use ShippingMethodTrait;

+++ b/src/Entity/Taxation/TaxRate.php
+use Aquis\XporterPlugin\Model\Taxation\TaxRateTrait;
+    use TaxRateTrait;

+++ b/src/Entity/Taxonomy/Taxon.php
+use Aquis\XporterPlugin\Model\Taxonomy\TaxonTrait;
+    use TaxonTrait;

+++ b/src/Entity/User/ShopUser.php
+use Aquis\XporterPlugin\Model\User\ShopUserTrait;
+    use ShopUserTrait;
</pre>

---
## Run the follosing command to export your data
Data can start from any entity and all related info will be dumped into a yaml file
<pre>
bin/console  aquis:fixture:dump App\\Entity\\Product\\Product --ids=1,3 --debug=true
</pre>


---

## Test the plugin

We are using Behat, PHPSpec and PHPUnit to test this plugin.

### How to run the tests

From the plugin root directory, run the following commands:

    $ (cd tests/Application && yarn install)
    $ (cd tests/Application && yarn build)
    $ (cd tests/Application && bin/console assets:install public -e test)
    
    $ (cd tests/Application && bin/console doctrine:database:create -e test)
    $ (cd tests/Application && bin/console doctrine:schema:create -e test)
    
To be able to setup a plugin's database, remember to configure you database credentials in `tests/Application/.env` and `tests/Application/.env.test`.

## Usage

### Running plugin tests

  - PHPUnit

    ```bash
    $ bin/phpunit
    ```

  - PHPSpec

    ```bash
    $ bin/phpspec run
    ```

  - Behat

    ```bash
    $ bin/behat
    ```
    
### Opening Sylius with this plugin

- Using `test` environment:

    ```bash
    $ (cd tests/Application && bin/console sylius:fixtures:load -e test)
    $ (cd tests/Application && bin/console server:run -d public -e test)
    ```
    
- Using `dev` environment:

    ```bash
    $ (cd tests/Application && bin/console sylius:fixtures:load -e dev)
    $ (cd tests/Application && bin/console server:run -d public -e dev)
    ```
  
---
done...

---

##### Sylius & API-PLATFORM
<pre>https://docs.sylius.com/en/latest/api/unified_api/introduction.html</pre>

##### Get the service names
bin/console debug:container | grep state_machine | grep -vE 'Transition|Definition' | awk '{ print $1 }'
### Refresh js and css
bin/console assets:install web --ansi
###
bin/console debug:container sylius.repository.product

##### Install dev
COMPOSER=composer.dev.json composer install
