<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Simple PHP Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a> | 
            <a href="about.php">About</a> | 
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <form action="process.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>
            <input type="submit" value="Send">
        </form>
    </main>
</body>
</html>
