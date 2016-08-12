# Validaro
Validaro is a simple PHP form validation plugin that allows you to keep cleaner code with more efficient form validation. Validaro allows for an easier way to read what properties you are trying to validate for each value.

## Installation
The only file you need is "Validaro.php". Place this file wherever you like in your project and reference it with your method of choice. 

## Basic Usage
In order to use any of the functions within Validaro you need to first create an variable array. This array will hold all the values that you wish to validate. This array can be as long as you like.
```php
$data = array(
    array(
        'field' => $_POST['name'],
        'maxLength' => 32,
        'minLength' => 6
    ),
    array (
        'field' => $_POST['email'],
        'maxLength' => 32,
        'minLength' => 6
    )
)
```

## License
MIT