<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My PHP Website</title>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- <?php include 'includes/header.php'; ?> -->
    <main>
        <div>
            <h2>Home Page</h2>
            <p>This is the home page of my simple PHP website.</p>
        </div>
        
        <div>
            <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br>
            <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // Here you would typically send an email or save to a database
        echo "<p>Thank you, $name. Your message has been received!</p>";
    }
    ?>
        </div>
    </main>
    <!-- <?php include 'includes/footer.php'; ?> -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
    </footer>
</body>
</html>