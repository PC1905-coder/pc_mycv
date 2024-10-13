<?php
include 'database.php'; // Include your database connection

// Create
function insertSkill($conn, $skill) {
    $stmt = $conn->prepare("INSERT INTO skills (skill_name) VALUES (?)");
    $stmt->bind_param("s", $skill);
    $stmt->execute();
    $stmt->close();
}

// Read
function getSkills($conn) {
    $result = $conn->query("SELECT * FROM skills");
    $skills = [];
    while ($row = $result->fetch_assoc()) {
        $skills[] = $row;
    }
    return $skills;
}

// Update
function updateSkill($conn, $id, $newSkill) {
    $stmt = $conn->prepare("UPDATE skills SET skill_name = ? WHERE id = ?");
    $stmt->bind_param("si", $newSkill, $id);
    $stmt->execute();
    $stmt->close();
}

// Delete
function deleteSkill($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM skills WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Example Usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['insert'])) {
        insertSkill($conn, $_POST['skill_name']);
    } elseif (isset($_POST['update'])) {
        updateSkill($conn, $_POST['id'], $_POST['new_skill_name']);
    } elseif (isset($_POST['delete'])) {
        deleteSkill($conn, $_POST['id']);
    }
}

// Fetch skills to display
$skills = getSkills($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills Management</title>
</head>
<body>
    <h1>Skills Management</h1>

    <h2>Add Skill</h2>
    <form method="POST">
        <input type="text" name="skill_name" required>
        <button type="submit" name="insert">Add Skill</button>
    </form>

    <h2>Current Skills</h2>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li>
                <?php echo htmlspecialchars($skill['skill_name']); ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $skill['id']; ?>">
                    <input type="text" name="new_skill_name" required>
                    <button type="submit" name="update">Update</button>
                </form>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $skill['id']; ?>">
                    <button type="submit" name="delete" onclick="return confirm('Are you sure?');">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<?php
$conn->close(); // Close the connection
?>
