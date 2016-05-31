<?php
function query($sql) 
{
    $pdo = new \PDO('mysql:host=localhost; charset=utf8; dbname=c9', 'root', '');
    $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);
    $stmt = $pdo->query($sql);
    if(stripos($sql, 'select') !== false) {
        return $stmt->fetchAll();
    } 
    return [];
}