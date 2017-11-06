<?php
$content   = array (
  'plugins' => 
  array (
    0 => 
    array (
      'name' => 'PleineLune',
      'owner' => 'piwik',
      'description' => 'A dark theme for Piwik, ideal to view your analytics reports before sunrise.',
      'homepage' => 'http://piwik.org',
      'license' => 'GPL-3.0+',
      'createdDateTime' => '2013-11-08 02:08:04',
      'donate' => 
      array (
      ),
      'isTheme' => true,
      'keywords' => 
      array (
        0 => 'night',
        1 => 'pleinelune',
        2 => 'moon',
      ),
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Piwik',
          'email' => 'hello@piwik.org',
          'homepage' => 'http://piwik.org',
        ),
      ),
      'repositoryUrl' => 'https://github.com/piwik/theme-PleineLune',
      'lastUpdated' => '2013-11-08 02:08:04',
      'latestVersion' => '1.0.0',
      'numDownloads' => 4813,
      'screenshots' => 
      array (
        0 => 'http://themes.piwik.org/PleineLune/images/Dashboard.png',
        1 => 'http://themes.piwik.org/PleineLune/images/Visitors.png',
      ),
      'activity' => 
      array (
        'numCommits' => '11',
        'numContributors' => '4',
        'lastCommitDate' => '2014-10-10 14:20:48',
      ),
      'featured' => false,
      'versions' => 
      array (
        0 => 
        array (
          'name' => '1.0.0',
          'release' => '2013-11-08 02:08:04',
          'download' => '/api/1.0/plugins/PleineLune/download/1.0.0',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik PleineLune Theme

## Description

A dark theme for Piwik, ideal to view your analytics reports before sunrise.

## Changelog

- 1.0 Initial release

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)

## Create a Theme for Piwik

Quick start
------------

1. Create a file describing your plugin at the following path: "plugins/YourPluginName/plugin.json"

```json
{
  "theme": true,
  "stylesheet": "stylesheets/theme.less"
}
```

2. Create your stylesheet file with the following path: "plugins/YourPluginName/stylesheets/theme.less"

3. Activate your theme on the Piwik instance: Settings > Platform > Themes


About the plugin.json file
------------

You can complete your plugin.json file with the following entries:

* "description"
* "homepage"
* "author"
* "author_homepage"
* "license"
* "license_homepage"
* "version"


Activate the development mode
-------------
If you change your theme.less file, you will not see the difference on your Piwik instance.
The stylesheets have a cache mode to prevent from compiling them on every page call.
To disable it, you have to modify the "config/config.ini.php" file:

```ini
	[Debug]
	disable_merged_assets = 1
```


Limitations
------------
You just can not theme:

* Installation plugin pages
* CoreUpdater plugin pages


How to theme 
===============

Images
----------
You can stock your images in the folder "plugins/YourPluginName/images".
To use images in CSS, you have to use a relative path that start at the root folder.

Example: 

```css
  background-image: url(plugins/YourPluginName/images/dropDown.jpg);
```

Multiple stylesheets files
----------
You can submit only one stylesheets file for theme.
But you can import other Less files from the main theme file:

Example: 

```css
  @import "../../plugins/YourPluginName/stylesheets/_yourSubStylesheetName.less"
```

It\'s important to use this complex path to prevent compilation bugs.
It is better to prefix your sub stylesheet file name with an \'_\'. 


Graphs
----------
You can style some graph elements.
You should see "plugins/CoreHome/stylesheets/jqplotColors.less" for more informations.


Sparklines
----------
You can style some sparklines elements.
You should see "plugins/CoreHome/stylesheets/sparklineColors.less" for more informations.


Transitions
----------
You can style some transitions elements.
You should see "plugins/Transition/stylesheets/_transitionColors.less" for more informations.
',
          'numDownloads' => 4813,
          'repositoryChangelogUrl' => 'https://github.com/piwik/theme-PleineLune/commits/1.0.0',
          'readmeHtml' => 
          array (
            'description' => '

<p>A dark theme for Piwik, ideal to view your analytics reports before sunrise.</p>

',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>

',
          ),
        ),
      ),
    ),
  ),
);
$expires_on   = 1417586158;
$cache_complete   = true;
?>