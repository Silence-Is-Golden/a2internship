# Lesson 3
1) Create database lesson3 locally.
2) Implement the given Database class.
3) Create index.php and show you implementation.

Example:
```php
$config = [];
$myDatabaseConnection = new Database($config);

$myDatabaseConnection->execute("INSERT INTO users SET name = :name, email = :email", [':name' => 'max', ':email' = 'test@gmail.com']);
$myDatabaseConnection->execute("SELECT id, name FROM users LIMIT 5");
$myDatabaseConnection->execute("SELECT id, name FROM users WHERE id < :id LIMIT 2", [':id' => 10]);
$myDatabaseConnection->execute("UPDATE users SET name = :name WHERE email = :email", [':name' => 'xam', ':email' = 'test@gmail.com']);
$myDatabaseConnection->execute("DELETE FROM users WHERE name = :name", [':name' => 'xam']);
```

## Описание
Создайте локальную базу данных lesson3.
Используя Database класс поработайте с данными.
Класс Database должен реализовать подключение к локальной базе данных через PDO драйвер.
Единтсвенный метод execute() должен принимать запрос к бд и данные, если необходимо.
