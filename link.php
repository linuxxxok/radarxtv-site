<!-- link.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newLink = trim($_POST["new_link"]);
    file_put_contents("link.txt", $newLink);
    $message = "Link updated successfully!";
}
$currentLink = file_exists("link.txt") ? trim(file_get_contents("link.txt")) : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Stream Link</title>
</head>
<body style="font-family:sans-serif; padding:20px; background:#f5f5f5;">
    <h2>Update iframe Link</h2>
    <?php if (!empty($message)) echo "<p style='color:green;'>$message</p>"; ?>
    <form method="post">
        <input type="text" name="new_link" value="<?= htmlspecialchars($currentLink) ?>" style="width:80%;" required>
        <button type="submit">Update Link</button>
    </form>
</body>
</html>