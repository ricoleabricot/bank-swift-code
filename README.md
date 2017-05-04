# bank-swift-code

Fetch bank swift codes the easiest and minamalest way possible.

Getting Started
---------------

`bank-swift-code` is a library used to fetch all bank swift code in a minimalest way possible by only loading few metadatas.

Its goal is to, one day, easily manage swift codes from every countries to simplify developpers work.

Feel free to contribute with any kind of help.

Installation via composer
-------------------------

If you use [composer](https://getcomposer.org/) you can simply run `composer require rico/bank-swift-code` to get going. Reportedly [![Daily Downloads](https://poser.pugx.org/globalcitizen/php-iban/d/daily)](https://packagist.org/packages/globalcitizen/php-iban) (and [![Monthly Downloads](https://poser.pugx.org/globalcitizen/php-iban/d/monthly)](https://packagist.org/packages/globalcitizen/php-iban)) were done via composer.

Then just add the following to your `composer.json` file:

```js
// composer.json
{
    "require": {
        "rico/": "2.5.9"
    }
}
```

You can [see this library on Packagist](https://packagist.org/packages/globalcitizen/php-iban).



Installation via git
--------------------

For a regular install, use the `git clone` command:

```sh
# HTTP
$ git clone https://github.com/Kafei59/bank-swift-code.git
```



Countries Supported
-------------------

Only 1 country is supported:

* *France* (FR)



Requirements
------------

PHP 5.3.2 or above (at least 5.3.4 recommended to avoid potential bugs).



Versioning
----------

We use [SemVer](http://semver.org/) for versioning. No versions available for now. 



Authors
-------

- Pierrick Gicquelais - *Initial project worker* | [GitHub](https://github.com/Kafei59)  | [Twitter](https://twitter.com/Kafei59) | <pierrick.gicquelais@gmail.com>
- Jason Toulotte - *Scrap data online* | [GitHub](https://github.com/eldorne) | <jason.toulotte@gmail.com>



Security Reports
----------------

Please send any sensitive issue to [pierrick.gicquelais@gmail.com](mailto:pierrick.gicquelais@gmail.com). Thanks!



License
-------

Composer is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.




Acknowledgments
---------------

- Build tests
- Lot of works is still in TODO (create classes on other languages or insert data from other countries).
- Thanks to https://www.juristique.org to share those useful informations online.
