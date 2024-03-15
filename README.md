# WordPress Development Project

This project is a boilerplate for WordPress development.

## Author
- **Name:** John Jezon Ajias
- **Email:** johnjezonajias@gmail.com

## Composer
### Dependencies
- **PHP Version:** >=7.4
- **roots/bedrock-autoloader:** ^1.0
- **advanced-custom-fields/advanced-custom-fields-pro:** ^6.1
- **wpackagist-plugin/safe-svg:** ^2.1
- **wpackagist-plugin/query-monitor:** ^3.12
- **wpackagist-plugin/wp-mail-smtp:** ^3.8

### Dev Dependencies
- **squizlabs/php_codesniffer:** *
- **wp-coding-standards/wpcs:** 3.0
- **dealerdirect/phpcodesniffer-composer-installer:** ^1.0
- **phpcompatibility/phpcompatibility-wp:** *
- **szepeviktor/phpstan-wordpress:** ^1.3
- **composer/installers:** ^2.2
- **phpstan/phpstan:** ^1.10

## NPM - Node Package Manager
- **npm-run-all:** ^4.1.5
- **prettier:** npm:wp-prettier@^2.8.5

## Zonryll Theme
- **Name:** Zonryll
- **Version:** 1.0.0
- **Requires at least:** WordPress 6.1
- **Tested up to:** WordPress 6.2
- **Requires PHP:** 7.4
- **License:** GPL v2 or later

## Zonryll Theme Dependencies
### Dev Dependencies
- **@wordpress/babel-preset-default:** ^7.16.0
- **@wordpress/eslint-plugin:** ^14.5.0
- **@wordpress/scripts:** ^26.3.0
- **@wordpress/stylelint-config:** ^21.15.0
- **copy-webpack-plugin:** ^11.0.0
- **cssnano:** ^6.0.1

### Dependencies
- **@fancyapps/ui:** ^5.0.10
- **swiper:** ^9.4.0

## Installation and Usage
1. Clone this repository:
   ```bash
   git clone https://github.com/johnjezonajias/webdevelopment-setup.git wp-content
2. Navigate into the wp-content directory:
   ```bash
   cd wp-content
3. Install PHP dependencies:
   ```bash
   composer install
4. Install JavaScript dependencies:
   ```bash
   npm install

## Webpack Linting and Formatting
To lint and format your code using webpack, you can use the following scripts:
- Start: Launch the development server to preview your project.
- Build: Generate production-ready assets for deployment.
- Lint: Detect and report issues in your code using stylelint and eslint.
- Format: Automatically format your code according to predefined rules using stylelint and eslint.

   ```bash
   npm start
   npm run build
   npm run lint
   npm run format

These scripts utilize webpack and related plugins for linting and formatting according to the provided configuration.

## PHP Code Linting and Formatting
Ensure code quality and adherence to coding standards with PHPStan and PHP_CodeSniffer. Utilize the following scripts:
- Analyze: Execute PHPStan to identify potential bugs and errors.
- Lint: Use PHP_CodeSniffer to perform linting on PHP files, ensuring conformity to coding standards.
- Lint:fix: Automatically format PHP code according to coding standards using PHP_CodeSniffer.

   ```bash
   composer analyze
   composer lint
   composer lint:fix

Now you're all set to start developing your WordPress project with the Zonryll theme and its associated dependencies!
