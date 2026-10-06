<?php require 'db.php'; `$q = `$pdo->query('SELECT RDB`$RELATION_NAME FROM RDB`$RELATIONS WHERE RDB`$SYSTEM_FLAG = 0'); while (`$row = `$q->fetch(PDO::FETCH_NUM)) { echo trim(`$row[0]) . PHP_EOL; }
