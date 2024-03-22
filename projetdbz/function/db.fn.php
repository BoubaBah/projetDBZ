<?php
function getPDOLink($config) {
    $dsn = 'mysql:dbname=' . $config['database'] . ';host=' . $config['host'] . ';port=' . $config['port'];
    try{
        return new PDO($dsn, $config['username'], $config['password']);
    }
    catch (PDOException $exception){
        exit($exception->getMessage());
    }
};