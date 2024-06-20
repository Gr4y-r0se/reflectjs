<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Search</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Search Page</h2>
        <form action="results.php" method="get">
            <label for="query">Search:</label>
            <input type="text" id="query" name="query" required>
            <br>
            <button type="submit">Search</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Our Website</p>
    </footer>
</body>
</html>
