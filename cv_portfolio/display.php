<?php
include 'database.php'; // Include your database connection file

$skills = getSkills($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Skills</h1>
        <!-- Navigation here -->
    </header>
    <main>
        <h2>My Skills</h2>
        <ul>
            <?php foreach ($skills as $skill): ?>
                <li><?php echo htmlspecialchars($skill['skill_name']); ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>
