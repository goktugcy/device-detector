```markdown
# Device Detector

Device Detector is a utility class for identifying user browser, operating system, device type, and preferred language based on HTTP headers. It is designed to work with Laravel framework.

## Features

- Detects user's browser from the User-Agent header.
- Identifies user's operating system from the User-Agent header.
- Determines user's device type from the User-Agent header.
- Retrieves user's preferred language from the Accept-Language header.

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/goktugcy/device-detector.git
    ```

2. **Include the Class in Your Laravel Project:**

    Copy the `Detector.php` file to your Laravel project's `app/Utils` directory.

3. **Use the Detector Class:**

    ```php
    use App\Utils\Detector;
    ```

## Usage

### Get User Browser

```php
$browser = Detector::getUserBrowser();
echo $browser; // Outputs the user's browser
```

### Get User Operating System

```php
$os = Detector::getUserOS();
echo $os; // Outputs the user's operating system
```

### Get User Device

```php
$device = Detector::getUserDevice();
echo $device; // Outputs the user's device type
```

### Get User Preferred Language

```php
$language = Detector::getUserLanguage();
echo $language; // Outputs the user's preferred language
```

### Get All User Information

```php
$userInfo = Detector::getUserInfo();
print_r($userInfo); // Outputs an associative array of user information
```

## Methods

### `getUserBrowser()`

Retrieves the user's browser based on the `User-Agent` header.

### `getUserOS()`

Retrieves the user's operating system based on the `User-Agent` header.

### `getUserDevice()`

Retrieves the user's device type based on the `User-Agent` header.

### `getUserLanguage()`

Retrieves the user's preferred language based on the `Accept-Language` header.

### `getUserInfo()`

Retrieves all user information (browser, OS, device, language) in an associative array.

## Contributing

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature-name`.
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
