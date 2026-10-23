<?php
// Save this file as "index.php"

// 1. Define Variables
$pageTitle = "Welcome to My PHP Page";
$currentYear = date("Y");
$userLoggedIn = true;
$hobbies = ["Coding", "Reading", "Gaming", "Hiking"];
// changes1234
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; color: #333; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .status { padding: 10px; border-radius: 4px; display: inline-block; }
        .success { background-color: #d4edda; color: #155724; }
    </style>
</head>
<body>

    <div class="container">
        <!-- 2. Display Dynamic Content -->
        <h1><?php echo $pageTitle; ?></h1>
        <p>Today's date and time is: <strong><?php echo date("F j, Y, g:i a"); ?></strong></p>

        <!-- 3. Conditional Logic -->
        <?php if ($userLoggedIn): ?>
            <div class="status success">
                <p>Welcome back, User! You are securely logged in.</p>
            </div>
        <?php endif; ?>

        <!-- 4. Loops -->
        <h3>My Hobbies</h3>
        <ul>
            <?php 
            foreach ($hobbies as $hobby) {
                echo "<li>" . htmlspecialchars($hobby) . "</li>";
            }
            ?>
        </ul>
    </div>

    <footer style="margin-top: 20px; font-size: 0.8em; color: #666;">
        <p>&copy; <?php echo $currentYear; ?> My Sample Webpage</p>
    </footer>

</body>
</html>