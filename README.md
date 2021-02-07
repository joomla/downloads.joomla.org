<p align="center"><a href="https://downloads.joomla.org" target="_blank" rel="noopener noreferrer"><img src="https://downloads.joomla.org/images/homepage/joomla-logo.png" alt="Joomla Logo"></a></p>


## Joomla! Downloads Portal

This repository holds additions from the base Joomla! application (extensions, layouts, etc.) for the Joomla! Downloads Portal.

## Akeeba Release System

The site is primarily powered by [Akeeba Release System](https://github.com/akeeba/release-system) with custom frontend layouts. However, there are also some modifications to the component:

- The `Akeeba\ReleaseSystem\Admin\Model\Releases` class has an added `announcement_url` property (and accompanying SQL change) to allow a URL to the release post to be used
- The `Akeeba\ReleaseSystem\Site\Helper\DownloadCounter` class has been added to help query download counts (primarily for use on the homepage and the admin dashboard)
- The frontend router has been modified to allow an item to be routed via its filename or alias (primarily used for download stream URLs)
- The frontend router has been modified to throw a 404 versus falling back to ARS' native repository view
- The `plgContentArslatest` class has been modified to support two additional shortcodes: `release_announcements` and `vgroup_downloads`

## Language Pack Upload

Go to the Downloads website and [login](https://downloads.joomla.org/login)

On the Language Packs page you can select the desired Joomla version.

`Add screenshot`

Scroll to your language or filter the page.

`Add screenshot`

Press "Create a new release"

<img width="163" alt="image" src="https://user-images.githubusercontent.com/11913918/107161535-8d84ba80-699d-11eb-896e-3f18579e3b2c.png">


## Translations
You can help translate the needed parts for this website on Crowdin - https://joomla.crowdin.com/joomla-official-websites  
Crowdin sync status: ![Crowdin Action](https://github.com/joomla/downloads.joomla.org/workflows/Crowdin%20Action/badge.svg)  
Crowdin localication status: [![Crowdin](https://badges.crowdin.net/e/9d2c7ef410adb090cd5be80fb3644064/localized.svg)](https://joomla.crowdin.com/joomla-official-websites)
