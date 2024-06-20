<?php
try {
    $db = new PDO('sqlite:search_results.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert sample data
    $db->exec("INSERT INTO search_results (title, content, url) VALUES 
        ('First Result', 'This is the content of the first search result.', 'https://example.com/first'),
        ('Second Result', 'This is the content of the second search result.', 'https://example.com/second'),
        ('Third Result', 'This is the content of the third search result.', 'https://example.com/third')
    ");

    echo "Sample data inserted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
