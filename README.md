# PHP Deprecated mysql_* Functions

This repository demonstrates a common error in PHP: the use of deprecated `mysql_*` functions. These functions are no longer supported in PHP 7.0 and higher due to security vulnerabilities and lack of modern features.  This example shows how to identify and resolve this issue.

## Bug

The `bug.php` file contains code that utilizes the deprecated `mysql_*` functions. Attempting to run this code on a PHP version 7.0 or later will result in errors.

## Solution

The `bugSolution.php` file provides a corrected version using the MySQLi extension, a more secure and modern alternative.  Using prepared statements with MySQLi is also recommended for preventing SQL injection vulnerabilities.

## How to reproduce

1.  Clone this repository.
2.  Make sure you have a MySQL server running.
3.  Set up a MySQL database and adjust the credentials in both `bug.php` and `bugSolution.php`.
4.  Try to run `bug.php` - you should receive errors.
5.  Run `bugSolution.php` to see the working corrected version. 