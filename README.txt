
Introduction to @aaronfischer's Drupal Starter Theme/Boilerplate or base_theme (adaptation of Basic theme)

base_theme boasts a clean HTML5 structure with extensible CSS classes for unlimited
theming possibilities as well as a top-down load order for improved SEO.

base_theme's goal is to provide themers the building blocks needed to get their designs up and
running quickly and simply.

base_theme is perfect if you want a simple, smart, and flexible theme starter.

Note from @aaronfischer (base_theme):
* I've been developing a number of Drupal sites lately and needed a quick/basic theme to get the ball rolling quickly, had good optimization, and was built on a skeleton boilerplate that included the basic classes/overrides I use with every project. BASIC was a great starting point. I have taken BASIC and stripped out a bit of the bloat and what I felt was unncessary code and replaced Grunt with Gulp. It is also using the PRPLrs Boilerplate (https://github.com/prplrs/prpl-boilerplate).

__________________________________________________________________________________________

Installation

- base_theme utilizes SCSS for grids and layouts and general structure of the site.
  It's recommended to use SCSS for building out your theme. You are required to download
  the following Ruby Gems and plugins:

  - SASS (http://sass-lang.com/)

- base_theme uses GULP, reference the package.json file for included node_modules

- base_theme is meant to be YOUR theme. To change the name of the theme from 'base_theme' to another name like 'mytheme',
follow these steps (to do BEFORE enabling the theme) :

    - rename the theme folder to 'mytheme'
    - rename basic.info to mytheme.info
    - Edit base_theme.info and change the name, description, project (can be deleted), replace all other instances of "base_theme" ie. [base_theme_tabs] would become [mytheme_tabs]
    - In template.php change each iteration of 'base_theme' to 'mytheme'
    - In theme-settings.php change each iteration of 'base_theme' to 'mytheme'

__________________________________________________________________________________________

What are the files for ?
------------------------

- base_theme.info                		=> provide informations about the theme, like regions, css, settings, js ...
- block-system-main.tpl.php     	=> template to edit the content
- block.tpl.php             				=> template to edit the blocks
- comment.tpl.php           			=> template to edit the comments
- node.tpl.php              			=> template to edit the nodes (in content)
- page.tpl.php             				=> template to edit the page
- template.php              			=> used to modify drupal's default behavior before outputting HTML through
                               the theme
- theme-settings            			=> used to create additional settings in the theme settings page

In /SASS
-------

- This uses a version of the PRPLrs Boilerplate (https://github.com/prplrs/prpl-boilerplate)

__________________________________________________________________________________________

Changing the Grid

The grid used in base_theme is fairly simple. It has been tested on
all major browser including IE (8+), Opera, Firefox, Safari, Chrome ...
The purpose of this method is to become as OOCSS as possible.

Refers to the notes in grid.scss to see how to modify the grid.
__________________________________________________________________________________________

Using Gulp

In order to use gulp (http://gulpjs.com/) with basic you will need to install a few programs.

Getting Started

1. Navigate to http://nodejs.org/ and install node.js.
2. Once you have node installed you will be able to use the npm (node package manager) to install the rest.
   In order for gulp to work in terminal we are going to need the gulp cli. Open a new terminal window and type "npm install --global gulp" , this will install the gulp globally. Restart terminal when that is complete and you will now be able to use gulp commands.
3. Install gulp in your project devDependencies: "npm install --save-dev gulp".

How To Use Gulp

1. cd into the base_theme and run "gulp watch".


__________________________________________________________________________________________

UPDATING base_theme (Basic)

Once you start using base_theme, you will massively change it until a point where it has nothing
to do with base_theme anymore. Unlike ZEN, base_theme is not intended to be use as a base theme for a
sub-theme (even though it is possible to do so). Because of this, it is not necessary to
update your theme when a new version of base_theme comes out. Always see base_theme as a STARTER, and
as soon as you start using it, it is not base_theme anymore, but your own theme.

If you didn't rename your theme, but you don't want to be notified when basic has a new version
by the update module, simply delete "project = "base_theme" in base_theme.info

__________________________________________________________________________________________

Thanks for using BASIC, and remember to use the issue queue in drupal.org for any question
or bug report:

http://drupal.org/project/issues/basic

Maintainers of base_theme:
* Aaron Fischer - (@aaronfischer) - http://aaronbrycefischer.com

Maintainers of BASIC:
* Steve Krueger (SteveK) -http://drupal.org/user/111656 (http://thejibe.com)
* Niall Morgan (lil.destro) -https://drupal.org/user/597808 (http://thejibe.com)