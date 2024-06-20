<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
    <header>
        <h1>Search Results</h1>
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
        <h2>Results for "<?php echo htmlspecialchars($_GET['query']); ?>"</h2>
        <?php
        try {
            $db = new PDO('sqlite:../search_results.db');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = '%' . $_GET['query'] . '%';
            $stmt = $db->prepare("SELECT * FROM search_results WHERE title LIKE :query OR content LIKE :query");
            $stmt->bindParam(':query', $query, PDO::PARAM_STR);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($results) {
                foreach ($results as $result) {
                    echo '<div class="result">';
                    echo '<h3><a href="' . htmlspecialchars($result['url']) . '">' . htmlspecialchars($result['title']) . '</a></h3>';
                    echo '<p>' . htmlspecialchars($result['content']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No results found.</p>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Our Website</p>
    </footer>
    <script type="text/javascript">
        function jobSearch(searchURLPartial) {
            var jobSearchURL = searchURLPartial;
            var searchUrl = jobSearchURL + "/search/";
            var locationHrefGCS = searchUrl + "?q=" + "<?php echo $_GET['query']; ?>";
            window.location.href = locationHrefGCS;
        }
        jQuery("#close-wid").on("click", function() {
            jQuery("#rolewidget").remove()
        });

        jQuery("#searchKeywords").keypress(function(e) {
            if(e.keyCode == 13) {
                siteSearch();
            }
        });
</script>
</body>
</html>
