<?php
require_once 'database.php';

if ($conn && !$conn->connect_error) {
    $result = $conn->query('SELECT DATABASE() as db');
    $row = $result->fetch_assoc();
    echo "Connected to MySQL server. Current DB: " . ($row['db'] ?? 'none') . "\n";
    $res2 = $conn->query('SHOW DATABASES');
    echo "Databases:\n";
    while ($r = $res2->fetch_assoc()) {
        echo " - " . array_values($r)[0] . "\n";
    }
} else {
    echo "Connection failed\n";
}
