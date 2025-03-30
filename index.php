<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Simple PHP Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Simple PHP Site</h1>
        <nav>
            <a href="index.php">Home</a> | 
            <a href="about.php">About</a> | 
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <p>This is a basic PHP website deployed on Railway.</p>
        <p>Current time: <?php echo date("Y-m-d H:i:s"); ?></p>
    </main>
</body>
</html>
