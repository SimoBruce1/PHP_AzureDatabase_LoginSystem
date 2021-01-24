# Login System Using PHP and Microsoft Azure Database

A source code for https://childofcode.com/create-a-login-system-using-php-and-microsoft-azure-database/ 
Create a Login System Using PHP, Transact-SQL and Microsoft Azure Database solution.

This is a simple login system using PHP, TSQL and Microsoft Azure database. with simple bootstrap style sheets.
Feature Including login, logout, protection of content pages, track the IP address and login time of the logged-in user.

However, if you want use for production mode, there are still some TODO parts that need to be completed. 
For example, the registered page, profile page (update profile or change password) and the forgotten password page.

For my purposes, is don’t allow people to register themselves, so in my case, 
just simply use a php script to generate password hashes and create user data through Azure Data Studio.

You can found the PHP script(hash.php) and SQL query(insert.sql) I used to create a new user, 
First, I will use a PHP script to generate user password hash after that using Azure Data Studio to create user data on a Microsoft Azure database.

Let me know if anyone really needs other parts, I will update them when I have time. 
And if you find any security issues, errors, bugs, feel free to create new issues thanks.
