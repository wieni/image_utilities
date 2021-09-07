Image Utilities
======================

[![Latest Stable Version](https://poser.pugx.org/wieni/image_utilities/v/stable)](https://packagist.org/packages/wieni/image_utilities)
[![Total Downloads](https://poser.pugx.org/wieni/image_utilities/downloads)](https://packagist.org/packages/wieni/image_utilities)
[![License](https://poser.pugx.org/wieni/image_utilities/license)](https://packagist.org/packages/wieni/image_utilities)

> Drupal 8/9 module providing developer-oriented improvements to the core image module.

## Features
- Add `image_style` Twig filter. It takes field items, media or file entities and gives you an image url based on the 
  image style ID you pass as an argument.
- Add `ImageManager` service that can be used to easily generate image urls in code.
- Add `getFile`, `getAlt` and `getTitle` methods to the image field item class for use in custom code or Twig templates.

## Installation
This package requires PHP 7.2 and Drupal 8 or higher. It can be installed using Composer:

```bash
 composer require wieni/image_utilities
```

## Contributing
- [Wieni Code Style](https://github.com/wieni/wmcodestyle) is used by the project. The included `composer coding-standards` script can be used to validate the conventions.
- Tests are encouraged. This project doesn't have any test coverage yet, but contributions are welcome.
- Keep the documentation up to date. Make sure README.md and other relevant documentation is kept up to date with your changes.
- One pull request per feature. Try to keep your changes focused on solving a single problem. This will make it easier for us to review the change and easier for you to make sure you have updated the necessary tests and documentation.

## Changelog
All notable changes to this project will be documented in the
[CHANGELOG](CHANGELOG.md) file.

## Security
If you discover any security-related issues, please email
[security@wieni.be](mailto:security@wieni.be) instead of using the issue
tracker.

## License
Distributed under the MIT License. See the [LICENSE](LICENSE) file
for more information.
