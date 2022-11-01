<?php

use App\DI\Container;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/../.env');

$connection = Container::getInstance()->getDB()->getConnection();

$connection->exec("CREATE TABLE applicants (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255),
    birthday DATE,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    country VARCHAR(255),
    city VARCHAR(255),
    phone VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

$connection->exec("CREATE TABLE employers (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255),
    birthday DATE,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    country VARCHAR(255),
    city VARCHAR(255),
    phone VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

$connection->exec("CREATE TABLE companies (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    descriptions LONGTEXT,
    logo VARCHAR(255)
)");

$connection->exec("CREATE TABLE vacancies (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500),
    description LONGTEXT,
    company_id INT(4) UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

$connection->exec("CREATE TABLE summaries (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(4) UNSIGNED,
    position VARCHAR(255) NOT NULL,
    description MEDIUMTEXT,
    skills TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");

$connection->exec("CREATE TABLE educations (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    summary_id INT(4) UNSIGNED,
    profession VARCHAR(255) NOT NULL,
    establishment VARCHAR(500) NOT NULL,
    started_date TIMESTAMP NOT NULL,
    finished_date TIMESTAMP NOT NULL
)");

$connection->exec('CREATE TABLE experience (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    summary_id INT(4) UNSIGNED NOT NULL,
    position VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    started_date TIMESTAMP NOT NULL,
    finished_date TIMESTAMP NOT NULL
)');

$connection->exec('CREATE TABLE categories (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)');

$connection->exec('CREATE TABLE categories_vacancies (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    vacancy_id INT(4) UNSIGNED NOT NULL,
    category_id INT(4) UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)');