<?php
try {
    // Create (connect to) SQLite database in file
    $db = new PDO('sqlite:search_results.db');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create search_results table
    $db->exec("CREATE TABLE IF NOT EXISTS search_results (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL,
        url TEXT NOT NULL
    )");

    echo "Database and table created successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
