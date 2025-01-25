This code uses the MySQLi extension which is a more secure and supported alternative to the deprecated `mysql_*` functions.

```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');
if ($mysqli->connect_errno) {
die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
echo 'Connected successfully';
$mysqli->close();
?>
```

**Important Note:** Always use prepared statements with MySQLi to prevent SQL injection vulnerabilities.