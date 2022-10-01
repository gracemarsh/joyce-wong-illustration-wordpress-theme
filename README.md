[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

# Joyce Wong Illustration WordPress Theme

This theme was build with `_s` the `underscores` [starter theme](https://underscores.me/).

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Setup

To start using all the tools that come with `_s` you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

## Joyce Wong Illustration Theme Notes

### Website Plugins Used

#### CoBlocks

Page Builder Gutenberg Blocks – [CoBlocks](https://wordpress.org/plugins/coblocks/)
This provides gallery blocks with a lightbox option.

#### Contact Form 7

[Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
Create a contact form that allows user to email you without exposing your email address.

#### Smash Balloon Instagram Feed

[Smash Balloon Social Photo Feed](https://wordpress.org/plugins/instagram-feed/)
Display Instagram posts from your Instagram accounts, either in the same single feed or in multiple different ones.

### Customizing this theme

This theme uses SCSS files which are compliled into a single CSS file. Future changes _must_ be made the source SCSS files to ensure a single source of truth.
Additional CSS may be added from the WordPress customizer. This doesn't modify the theme styles, but will be loaded additionally.

This theme uses [CSS Custom Properties](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties) (AKA CSS Variables). This enables some of the theme's colors to be changed without having to modify the theme itself.

These colours can be changed by adding the following to the WordPress customizer Additional CSS section.

```css
/* Override the Joyce Wong Theme colours with these variables: */
:root {
  --custom-main-orange: red;
  --custom-main-orange-light: orange;
  --custom-white: yellow;
  --custom-body-dark: blue;
  --custom-title-dark: indigo;
  --custom-transparent-white: violet;
}
```
