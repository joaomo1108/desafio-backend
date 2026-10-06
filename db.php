<?php
$host = 'C:\Users\renat\agenda-telefonica\data\agenda.fdb';
$user = 'SYSDBA';
$pass = 'masterkey';
$pdo = new PDO("firebird:dbname=$host;charset=UTF8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
