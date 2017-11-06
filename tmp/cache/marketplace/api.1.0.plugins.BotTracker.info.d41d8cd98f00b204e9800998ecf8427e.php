<?php
$content   = array (
  'name' => 'BotTracker',
  'owner' => 'Thomas--F',
  'description' => 'Detection of bots & spiders and count their visits without tracking them in the visitor-log.',
  'homepage' => 'http://dev.piwik.org/trac/ticket/2391',
  'license' => 'GPL 3.0 / fair use',
  'createdDateTime' => '2014-02-21 13:14:04',
  'donate' => 
  array (
  ),
  'isTheme' => false,
  'keywords' => 
  array (
    0 => 'BotTracker',
  ),
  'authors' => 
  array (
    0 => 
    array (
      'name' => 'Thomas Fasselt',
      'email' => 'Thomas.Fasselt@gmx.com',
      'homepage' => 'http://dev.piwik.org/trac/ticket/2391',
    ),
  ),
  'repositoryUrl' => 'https://github.com/Thomas--F/BotTracker',
  'lastUpdated' => '2014-09-04 19:52:04',
  'latestVersion' => '0.52',
  'numDownloads' => 8073,
  'screenshots' => 
  array (
  ),
  'activity' => 
  array (
    'numCommits' => '46',
    'numContributors' => '4',
    'lastCommitDate' => '2014-09-25 17:50:45',
  ),
  'featured' => false,
  'versions' => 
  array (
    0 => 
    array (
      'name' => '0.43',
      'release' => '2014-02-21 13:14:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.43',
      'requires' => 
      array (
        'piwik' => '2.0.1',
        'php' => '5.3.20',
      ),
      'readme' => 'BotTracker
==========

BotTracker-Plugin for Piwik

for additional information go to http://dev.piwik.org/trac/ticket/2391

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, some things you should be aware of:

- many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.

- if you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```

- the "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


And last but not least:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I fell like I have to support him. 
I want to work on this plugin beacute I want to and not because I have to. I hope you can unterstand that.
',
      'numDownloads' => 0,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.43a',
      'readmeHtml' => 
      array (
        'description' => '',
        'faq' => '',
        'changelog' => '',
        'support' => '',
      ),
    ),
    1 => 
    array (
      'name' => '0.44',
      'release' => '2014-02-21 13:54:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.44',
      'requires' => 
      array (
        'piwik' => '2.0.1',
        'php' => '5.3.20',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 914,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.44',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    2 => 
    array (
      'name' => '0.45',
      'release' => '2014-04-03 20:14:05',
      'download' => '/api/1.0/plugins/BotTracker/download/0.45',
      'requires' => 
      array (
        'piwik' => '2.0.1',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 303,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.45',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    3 => 
    array (
      'name' => '0.46',
      'release' => '2014-04-14 09:24:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.46',
      'requires' => 
      array (
        'piwik' => '2.0.1',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 1649,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.46',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    4 => 
    array (
      'name' => '0.47',
      'release' => '2014-06-13 13:38:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.47',
      'requires' => 
      array (
        'piwik' => '2.0.1',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 3,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.47',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    5 => 
    array (
      'name' => '0.48',
      'release' => '2014-06-13 13:54:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.48',
      'requires' => 
      array (
        'piwik' => '2.4.0',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.48__
* change requirements because 0.47 doesn\'t wokr with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 94,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.48',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t wokr with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    6 => 
    array (
      'name' => '0.49',
      'release' => '2014-06-22 17:18:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.49',
      'requires' => 
      array (
        'piwik' => '>=2.4.0-b6',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 1167,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.49',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    7 => 
    array (
      'name' => '0.50',
      'release' => '2014-08-07 19:52:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.50',
      'requires' => 
      array (
        'piwik' => '>=2.4.0-b6',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 1,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.50',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    8 => 
    array (
      'name' => '0.51',
      'release' => '2014-08-07 20:02:05',
      'download' => '/api/1.0/plugins/BotTracker/download/0.51',
      'requires' => 
      array (
        'piwik' => '>=2.4.0-b6',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.51__
* emergency-fix for v0.50
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 1002,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.51',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.51</strong>
* emergency-fix for v0.50
<strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
    9 => 
    array (
      'name' => '0.52',
      'release' => '2014-09-04 19:52:04',
      'download' => '/api/1.0/plugins/BotTracker/download/0.52',
      'requires' => 
      array (
        'piwik' => '>=2.4.0-b6',
        'php' => '5.3.10',
      ),
      'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.52__
* bugfix for issue #10 (NOTICE in error-log for undeclared variables)
__0.51__
* emergency-fix for v0.50
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
      'numDownloads' => 2940,
      'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.52',
      'readmeHtml' => 
      array (
        'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
        'faq' => '',
        'changelog' => '

<p><strong>0.52</strong>
* bugfix for issue #10 (NOTICE in error-log for undeclared variables)
<strong>0.51</strong>
* emergency-fix for v0.50
<strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
        'support' => '

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
      ),
    ),
  ),
);
$expires_on   = 1417587202;
$cache_complete   = true;
?>