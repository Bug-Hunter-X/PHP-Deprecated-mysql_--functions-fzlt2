This code uses the `mysql_*` functions which are deprecated and are no longer supported in PHP 7.0 and higher.  Attempting to use them will result in errors and security vulnerabilities.

```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
```