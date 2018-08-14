![RSS-Extender](https://raw.github.com/lformella/rss-extender/master/rss-extender.png)

RSS-Extender is extending RSS-Feeds.

Test status of all configs having test cases: [![CircleCI](https://circleci.com/gh/Strubbl/rss-extender.svg?style=svg)](https://circleci.com/gh/Strubbl/rss-extender)

To use cache you need to create subfolder "tmp/" with write permissions (here user is www-data):
* $ mkdir tmp/
* $ chown www-data: tmp/

To enable [readability](https://github.com/andreskrey/readability.php) support as fallback if configs fail:
* install [composer](https://getcomposer.org/) 
* $ composer update

For creating the regular expressions for the config files the web site http://regex101.com/ helps for testing.
