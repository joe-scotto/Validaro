# Validaro
Validaro is a simple PHP form validation plugin that allows you to keep cleaner code with more efficient form validation. Validaro allows for an easier way to read what properties you are trying to validate for each value.

## Installation
The only file you need is "[Validaro.php](Validaro.php)". Place this file wherever you like in your project and reference it with your method of choice. 

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

After defining what you wish to validate you can then use one of the built in functions to check what you wish.
```php
if (Validaro::checkNotEmpty($data)) {
    //Do Something
}
```

##Functions
All functions will return either a true or false value allowing you to use them in a conditional statement.  

```php
if (Validaro::checkNotEmpty($data)) {
    //Do something
}
```
Checks that all fields are not empty.
```php 
Validaro::checkNotEmpty();
```
Checks that all fields match your supplied "maxLength" value.
```php
Validaro::checkMaxLength();
```
Checks that all fields match your supplied "minLength" value.
```php
Validaro::checkMinLength();
```
## License
MIT
