<?php

function db_connect(array $config): PDO
{
    $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s',
        $config['host'],
        $config['port'] ?? 3306,
        $config['name'],
        $config['charset'] ?? 'utf8mb4'
    );

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    return new PDO($dsn, $config['user'], $config['pass'], $options);
}
