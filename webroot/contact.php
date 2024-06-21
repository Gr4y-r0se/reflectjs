<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <!-- 
        Try setting utm_source and seeing what happens (See? I'm not totally evil)
    -->
</head>
<body>
    <header>
        <h1>Contact Us</h1>
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
        <h2>Contact Page</h2>
        <form action="contact_submit.php" method="post">
            <label class="btn-reverse" for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Our Website</p>
    </footer>
    <script>
    !(function () {
            function e(e) {
                return document.querySelector(e);
            }
            function t(e, t) {
                return document.querySelectorAll(e).forEach(function (e) {
                e.style.display = t;
                });
            }
            function n(e) {
                return e.split("").reverse().join("");
            }
            function o(e) {
                return e.toLowerCase().replace(/\s+/g, "-");
            }
            function c() {
                function c() {
                document.addEventListener("DOMContentLoaded", function d() {
                    function c() {
                    e("#btn-reverse").addEventListener("click", function () {
                        var t = e("#input-reverse").value;
                        e("#output-reverse").innerText = n(t);
                    });
                    }
                    function u() {
                    e("#btn-slugify").addEventListener("click", function () {
                        var t = e("<?php $utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : 'utm_source'; $utm_source = html_entity_decode($utm_source, ENT_QUOTES, 'UTF-8'); $utm_source = str_replace(['<', '>'], '', $utm_source); echo $utm_source;?>").value;
                        e("#output-slugify").innerText = o(t);
                    });
                    }
                    function l() {
                    e("#toggle-divs").addEventListener("click", function () {
                        t(".toggle", "none"),
                        setTimeout(function () {
                            t(".toggle", "block");
                        }, 1e3);
                    });
                    }
                    function f() {
                    document.body.addEventListener(
                        "click",
                        function (e) {
                        var t = e.target;
                        t.tagName.toLowerCase() === t.dataset.tag &&
                            alert("Clicked on a " + t.dataset.tag);
                        },
                        !1
                    );
                    }
                    c(), u(), l(), f();
                });
                }
                c();
            }
            c();
            })();
    </script>
</body>
</html>
