# Number-Mask

[![Latest Stable Version](https://poser.pugx.org/vijaydass/number-mask/v/stable)](https://packagist.org/packages/vijaydass/number-mask)
[![License](https://poser.pugx.org/vijaydass/number-mask/license)](https://packagist.org/packages/vijaydass/number-mask)

## Description
Number-Mask is a lightweight PHP library that provides functionality for masking or obfuscating numbers. It allows you to format numbers in a desired pattern while retaining the original digits.

## Installation

You can install this package via Composer:

```bash
composer require owndeveloper/number-massking

## Usage

### Initializing the Package
To use the package, you need to first initialize it and provide the number and format:

```php
use OwnDeveloper\NumberMask;

require "./vendor/autoload.php";
$numberMask = new NumberMask();
```

### Example Usage

Here's an example of how you can use the package to calculate the GST amount:

```php
try {
    $number = $numberMask->masking('9876543210','987-6543-210');
    echo "Masked Number: ". $number;
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

### Exception Handling

The package handles exceptions for invalid values. If the value passed to the `masking()` method is character, an exception will be thrown. You can catch the exception and handle it accordingly.

## Testing

The package comes with a set of unit tests to ensure its stability and functionality. You can run the tests using the following command:

```bash
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please create an issue in the [[issue tracker](https://github.com/Vijaydass/Number-Mask/issues/new)]. If you'd like to contribute code, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature/bug fix.
3. Commit your changes and push them to your branch.
4. Submit a pull request.

Please ensure that your code adheres to the existing coding style and is well-documented.

## License
